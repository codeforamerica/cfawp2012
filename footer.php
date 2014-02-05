<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->
<div class="global-footer" id="global-footer">
  
  <div class="layout-breve layout-tight">
  
    <form class="search-global" action="https://www.google.com/search" method="get">
        <input type="search" autocomplete="off" placeholder="Search" name="q">
        <input name="as_sitesearch" value="www.codeforamerica.org" type="hidden">
    </form>
  
    <nav class="nav-footer" role="navigation">
      <ul>
        <li class="nav-tier1"><a class="nav-heading" href="/">Home</a></li>
        <li class="nav-tier1"><a class="nav-heading" href="/about">About</a>
          <ul class="nav-tier2">
            <li><a href="/about/fellowship">Fellowship</a></li>
            <li><a href="/about/brigade">Brigade</a></li>
            <li><a href="/about/startups">Civic Startups</a></li>
            <li><a href="/about/peernetwork">Peer Network</a></li>
            <li><a href="/about/international">International</a></li>
            <li><a href="/about/team">Team</a></li>
            <li><a href="/supporters">Supporters</a></li>
            <li><a href="/press">Press</a></li>
            <li><a href="/jobs">Jobs</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </li>
      
        <li class="nav-tier1"><a class="nav-heading" href="/cities">Governments</a>
          <ul class="nav-tier2">
            <li><a href="/cities/atlanta">Atlanta, GA</a></li>
            <li><a href="/cities/charlotte">Charlotte, NC</a></li>
            <li><a href="/cities/chattanooga">Chattanooga, TN</a></li>
            <li><a href="/cities/denver">Denver, CO</a></li>
            <li><a href="/cities/lexington">Lexington, KY</a></li>
            <li><a href="/cities/longbeach">Long Beach, CA</a></li>
            <li><a href="/cities/mesa">Mesa, AZ</a></li>
            <li><a href="/cities/rhodeisland">Rhode Island</a></li>
            <li><a href="/cities/sanantonio">San Antonio, TX</a></li>
            <li><a href="/cities/sanjuan">San Juan, PR</a></li>
            <li><a href="/cities/alumni">Alumni Partners</a></li>
            <li><a href="/about/peernetwork">Peer Network</a></li>
            <li><a href="/cities/data-standards-faq">Data Standards</a></li>
          </ul>
        </li>
          <li class="nav-tier1"><a class="nav-heading" href="/geeks">Citizens</a>
          <ul class="nav-tier2">
            <li><a href="/geeks/our-geeks">Our Geeks</a></li>
            <li><a href="https://github.com/codeforamerica">Our Code</a></li>
            <li><a href="/geeks/our-startups">Our Startups</a></li>
            <li><a href="/events">Events</a></li>
            <li><a href="https://github.com/codeforamerica/hack-requests">Requests</a></li>
          </ul>
        </li>
           
          <li class="nav-tier1"><a class="nav-heading" href="/apps">Apps</a>
          <ul class="nav-tier2">
            <li><a href="/apps/local-service.html#nav-tabs">Local Service</a></li>
            <li><a href="/apps/citizen-engagement.html#nav-tabs">Citizen Engagement</a></li>
            <li><a href="/apps/free.html#nav-tabs">Free Apps</a></li>
            <li><a href="/apps/paid.html#nav-tabs">Paid Apps</a></li>
          </ul>
        </li>
        <li class="nav-tier1"><a class="nav-heading" href="/donate">Donate</a>
          <ul class="nav-tier2">
            <li><a href="/donate/form">Financial Contributions</a></li>
          </ul>
        </li>
        <li class="nav-tier1"><a class="nav-heading">Social</a>
          <ul class="nav-tier2">
            <li><a href="https://www.facebook.com/codeforamerica" class="icon-facebook">Facebook</a></li>
            <li><a href="https://twitter.com/codeforamerica" class="icon-twitter">Twitter</a></li>
            <li><a href="http://www.youtube.com/user/CodeforAmerica" class="icon-youtube">YouTube</a></li>
            <li><a href="https://github.com/codeforamerica" class="icon-github2">GitHub</a></li>
            <li><a href="http://codeforamerica.tumblr.com/" class="icon-tumblr">Tumblr</a></li>
            <li><a href="http://www.flickr.com/photos/codeforamerica" class="icon-flickr">Flickr</a></li>
            <li><a href="http://www.codeforamerica.org/feed/" class="icon-feed">RSS</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>

<div class="global-foot">
  <div class="layout-tight layout-breve">
    <div class="global-foot-content">
      <img class="global-foot-logo" src="<?php bloginfo( 'template_url' ); ?>/images/logo-inversed.png" />
      <small>Code for America Labs, Inc is a non-partisan, non-political 501(c)(3) organization. Content is licensed through Creative Commons.</small>
    </div>
  </div>
  <?php
		/* Always have wp_footer() just before the closing </body>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to reference JavaScript files.
		 */

		wp_footer();
	?>
</div><!-- end semi-breve-->

  <!--   ==============   END FOOTER   ==============   -->


</section><!-- ending content wrapper -->
</main>
</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20825280-1']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript">
var _sf_async_config={uid:20661,domain:"codeforamerica.org"};
(function(){
  function loadChartbeat() {
    window._sf_endpt=(new Date()).getTime();
    var e = document.createElement('script');
    e.setAttribute('language', 'javascript');
    e.setAttribute('type', 'text/javascript');
    e.setAttribute('src',
       (("https:" == document.location.protocol) ? "https://a248.e.akamai.net/chartbeat.download.akamai.com/102508/" : "http://static.chartbeat.com/") +
       "js/chartbeat.js");
    document.body.appendChild(e);
  }
  var oldonload = window.onload;
  window.onload = (typeof window.onload != 'function') ?
     loadChartbeat : function() { oldonload(); loadChartbeat(); };
})();

</script>
<!-- Ethnio Activation Code -->
<script type="text/javascript" language="javascript" src="//ethn.io/remotes/20160" async="true" charset="utf-8"> </script>
<script src="http://style.codeforamerica.org/script/global.js"></script>
</body>
</html>
