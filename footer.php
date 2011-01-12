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
					<li><a href="/fellows/institute">Timeline</a></li>
					<li><a href="/the-fellowship/2012-program-and-timeline/">Institute</a></li>
					<li><a href="/fellows-selection">Process</a></li>
					<li><a href="/apply">Apply</a></li>
				</ul>
			</li>
			<li><h4><a href="/cities">Cities</a></h4>
				<ul>
					<li><a href="/boston">Boston</a></li>
					<li><a href="/dc">Washington DC</a></li>
					<li><a href="/philadelphia">Philadelphia</a></li>
					<li><a href="/seattle">Seattle</a></li>		
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
				</ul>
			</li>
			<li><h4><a href="#">Search</a></h4><form role="search" method="get" id="searchform" action="/cfa_wordpress/">
		<input type="text" value="..." name="s" id="s" style="border: 1px dotted #ccc; font-weight: bold; padding-left: 2px; width: 140px;" value="First name" onfocus="if (this.value == '...') {this.value = '';}" onblur="if (this.value == '') {this.value = '...';}">
						</form></li>
		</ul>
		<p id="copyr">Code for America Labs, Inc is a non-partisan, non-political 501(c)3 organization. Content is licensed through <a href="#">Creative Commons</a>.</p>
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



</body>
</html>
