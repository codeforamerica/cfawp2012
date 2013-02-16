function CfAProjectFilters () {
  this.initialize();
}

CfAProjectFilters.prototype = {
  ITEM_SELECTOR: ".project",

  initialize: function () {
    // Set properties
    this.$container = this._container();
    this.$projects  = this._projects();
    this.$categoryFilters = this._categoryFilters();
    this.$typeFilters = this._typeFilters();
    this.$sortLinks = this._sortLinks();
    this.$clearFiltersLink = this._clearFiltersLink();

    // Bind Category Filter Change
    this.$categoryFilters.click(
      $.proxy(this.onCategoryFilterClick, this)
    );

    // Bind Type Filter Change
    this.$typeFilters.change(
      $.proxy(this.onTypeFilterChange, this)
    );

    // Bind Sort Change
    this.$sortLinks.click(
      $.proxy(this.onSortLinkClick, this)
    );

    this.$clearFiltersLink.click(
      $.proxy(this.clearFilters, this)
    );

    // Initialize container Isotope
    this.$container.isotope({
      itemSelector: this.ITEM_SELECTOR
    });

    return this;
  },

  filter: function () {
    this.$container.isotope({
      filter: this.selector()
    });
  },

  clearFilters: function () {
    this.$categoryFilters.removeClass("active");
    this.$categoryFilters.parent().find("[data-filter=*]").addClass("active");
    this.$typeFilters.attr("checked", false);

    this.filter();

    return false;
  },

  onCategoryFilterClick: function (e) {
    var $el = $(e.target);

    this.$categoryFilters.removeClass("active");
    $el.addClass("active");
    this.filter();

    return false;
  },

  onTypeFilterChange: function (el) {
    this.filter();

    return false;
  },

  onSortLinkClick: function (e) {
    var $el  = $(e.target);
    var sort = $el.data("sort");
    var sortAscending = true;

    if (sort == "title") sortAscending = false;

    this.$container.isotope({
      sortBy: sort,
      sortAscending: sortAscending
    });

    return false;
  },

  activeCategoryFilters: function () {
    return this.$categoryFilters.parent().find(".active").toArray();
  },

  activeTypeFilters: function () {
    return this.$typeFilters.parent().find("input:checked").toArray();
  },

  selector: function () {
    var activeFilters = [];

    var activeCategoryFilters = this.activeCategoryFilters();
    var activeTypeFilters = this.activeTypeFilters();
    var activeFilterEls = activeCategoryFilters.concat(activeTypeFilters);

    for (var i = 0; i < activeFilterEls.length; i++) {
      var $filter = $(activeFilterEls[i]);
      var filter = $filter.data("filter");

      activeFilters.push(filter);
    }

    return activeFilters.join(".")
  },

  // private

  _container: function () {
    return $("#projects-showcase-list");
  },

  _projects: function () {
    return $(".project");
  },

  _categoryFilters: function () {
    return $("#projects-showcase-category-filters a");
  },

  _typeFilters: function () {
    return $("#projects-showcase-type-filters input");
  },

  _sortLinks: function () {
    return $("#projects-showcase-sort a");
  },

  _clearFiltersLink: function () {
    return $("#projects-clear-filters")
  }
};

jQuery(function() {
  if ($("#projects").length > 0) {
    window.cfaProjectFilters = new CfAProjectFilters();
  }
});
