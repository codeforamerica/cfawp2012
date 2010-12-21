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
			<li><h4><a href="#">Home</a></h4>
			</li>
			<li><h4><a href="#">About</a></h4>
				<ul>
					<li><a href="#">Who We Are</a></li>
					<li><a href="#">What We Do</a></li>
					<li><a href="#">Donors</a></li>
					<li><a href="#">Press</a></li>
				</ul>
			</li>
			<li><h4><a href="#">Fellows</a></h4>
				<ul>
					<li><a href="#">Timeline</a></li>
					<li><a href="#">Institute</a></li>
					<li><a href="#">Broader Impact</a></li>
					<li><a href="#">Process</a></li>
					<li><a href="#">Apply</a></li>
				</ul>
			</li>
			<li><h4><a href="#">Citites</a></h4>
				<ul>
					<li><a href="#">Boston</a></li>
					<li><a href="#">Washington DC</a></li>
					<li><a href="#">Philadelphia</a></li>
					<li><a href="#">Seattle</a></li>		
				</ul>
			</li>
			<li><h4><a href="#">Issues</a></h4>
				<ul>
					<li><a href="#">Lorem Ipsum</a></li>
					<li><a href="#">Dolor</a></li>
					<li><a href="#">Sit Amet</a></li>
					<li><a href="#">Viverra</a></li>
					<li><a href="#">In Lacus</a></li>
				</ul>
			</li>
			<li><h4><a href="#">Get Involved</a></h4>
			</li>
			<li><h4><a href="#">Donate</a></h4>
				<ul>
					<li><a href="#">Financial Contributions</a></li>
					<li><a href="#">Supplies &amp; In-Kind Donations</a></li>
				</ul>
			</li>
			<li><h4><a href="#">Social</a></h4>
				<ul>
					<li><a href="#">Facebook</a></li>
					<li><a href="#">Twitter</a></li>
					<li><a href="#">YouTube</a></li>
					<li><a href="#">RSS</a></li>
				</ul>
			</li>
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
