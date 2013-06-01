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

 <!--   ==============   FOOTER   ==============   -->
  <div id="footer" >
  	<div class="wrap">
	<h4 id="logo-f"><a href="http://codeforamerica.org" class="like-btn">Code for America</a></h4>
		<ul>
			<li><h4><a href="/">Home</a></h4>
			</li>
			<li><h4><a href="/about">About</a></h4>
				<ul>
					<li><a href="/who-we-are">Who We Are</a></li>
					<li><a href="/what-we-do">What We Do</a></li>
					<li><a href="/donors">Donors</a></li>
					<li><a href="/press">Press</a></li>
				</ul>
			</li>
			<li><h4><a href="/fellows">Fellows</a></h4>
				<ul>
					<li><a href="/fellows/201-program-timeline">Timeline</a></li>
					<li><a href="/fellows/fellow-selection">Process</a></li>
					<li><a href="/fellows/apply">Apply</a></li>
				</ul>
			</li>
			<li><h4><a href="/cities">2013 Cities</a></h4>
				<ul>
					<li><a href="/2013-partners/kansas-city">Kansas City, MO</a></li>
					<li><a href="/2013-partners/kansas-city">Kansas City, KS</a></li>
					<li><a href="/2013-partners/las-vegas">Las Vegas, NV</a></li>
					<li><a href="/2013-partners/louisville">Louisville, KY</a></li>
					<li><a href="/2013-partners/new-york-city">New York City, NY</a></li>
					<li><a href="/2013-partners/oakland">Oakland, CA</a></li>
					<li><a href="/2013-partners/san-francisco">San Francisco, CA</a></li>
					<li><a href="/2013-partners/san-mateo-county">San Mateo County, CA</a></li>
					<li><a href="/2013-partners/south-bend">South Bend, IN</a></li>
					<li><a href="/2013-partners/summit-county">Summit County, OH</a></li>
				</ul>
			</li>
			<li><h4><a href="/issues">Issues</a></h4>
				<ul>
					<li><a href="/issues/openness">Openness</a></li>
					<li><a href="/issues/participation">Participation</a></li>
					<li><a href="/issues/education">Education</a></li>
					<li><a href="/issues/efficiency">Efficiency</a></li>
				</ul>
			</li>
			<li><h4><a href="/donate">Donate</a></h4>
				<ul>
					<li><a href="/donate">Financial Contributions</a></li>
					<li><a href="/supplies">In-Kind Donations</a></li>
				</ul>
			</li>
			<li><h4><a href="#">Social</a></h4>
				<ul>
					<li><a href="http://facebook.com/codeforamerica">Facebook</a></li>
					<li><a href="http://twitter.com/codeforamerica">Twitter</a></li>
					<li><a href="http://www.youtube.com/user/CodeforAmerica">YouTube</a></li>
					<li><a href="/feed">RSS</a></li>
                                        <li><a href="https://github.com/codeforamerica">GitHub</a></li>
				</ul>
			</li>
			<li><h4><a href="#">Search</a></h4><form role="search" method="get" id="searchform" action="/">
		<input type="text" value="..." name="s" id="s" style="border: 1px dotted #ccc; font-weight: bold; padding-left: 2px; width: 140px;" onfocus="if (this.value == '...') {this.value = '';}" onblur="if (this.value == '') {this.value = '...';}">
						</form></li>
		</ul>
		<p id="copyr"><small>Code for America Labs, Inc is a non-partisan, non-political 501(c)(3) organization. Content is licensed through <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons</a>.<br></small></p>
	</div>
	<?php
		/* Always have wp_footer() just before the closing </body>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to reference JavaScript files.
		 */

		wp_footer();
	?>
  </div>
  <!--   ==============   END FOOTER   ==============   -->

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
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script><script type="text/javascript">stLight.options({publisher:'72c27113-3bfc-4c68-a34e-b85a85d478db'});</script>
<!-- Ethnio Activation Code -->
<script type="text/javascript" language="javascript" src="//ethn.io/remotes/20160" async="true" charset="utf-8"> </script>
</body>
</html>
