				<div class="global-footer" id="global-footer">
					<div class="layout-breve layout-tight">
						<!-- This form is in 2 different places on the main site template, so make sure IDs are unique each time it is used -->
						<form class="search-global" id="search-global" role="search" method="GET">
							<input type="search" id="search-global-input" class="search-global-input" autocomplete="off" placeholder="Search" name="s">
							<!-- consider applying autofocus="autofocus" to input -->
							<button class="search-global-submit" id="search-global-submit" value="Search" type="submit">Search</button>
						</form>
						<nav class="nav-footer" role="navigation">
							<ul>
								<li class="nav-tier1"><a class="nav-heading" href="../../../about/">About</a>
									<ul class="nav-tier2">
										<li><a href="../../../programs/">What we do</a></li>
										<li><a href="http://annual.codeforamerica.org/">Annual report</a></li>
										<li><a href="http://www.codeforamerica.org/press/">Press</a></li>
										<li><a href="http://www.codeforamerica.org/supporters/">Supporters</a></li>
										<li><a href="http://www.codeforamerica.org/jobs/">Jobs</a></li>
										<li><a href="http://www.codeforamerica.org/contact/">Contact</a></li>
									</ul>
								</li>
								<li class="nav-tier1"><a class="nav-heading" href="http://www.codeforamerica.org/who-we-are/">Who we are</a>
									<ul class="nav-tier2">
										<li><a href="#">Board</a></li>
										<li><a href="#">Team</a></li>
										<li><a href="#">Staff</a></li>
										<li><a href="#">City Partners</a></li>
										<li><a href="#">Brigade captains</a></li>
									</ul>
								</li>
								<li class="nav-tier1"><a class="nav-heading" href="#">Programs</a>
									<ul class="nav-tier2">
										<li><a href="../../../fellows/">Fellowship</a></li>
										<li><a href="../../../brigade/">Brigade</a></li>
										<li><a href="../../../startups/">Startup</a></li>
										<li><a href="../../../international">International</a></li>
										<li><a href="../../../peernetwork">Peer Network</a></li>
									</ul>
								</li>
								<li class="nav-tier1"><a class="nav-heading" href="../../../donate/">Donate</a>
									<ul class="nav-tier2">
										<li><a href="#">Financial Contributions</a></li>
										<li><a href="#">In-Kind Donations</a></li>
									</ul>
								</li>
								<li class="nav-tier1"><a class="nav-heading" href="#">Social</a>
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
				<div class="global-foot" role="contentinfo">
					<div class="layout-tight layout-breve">
						<div class="global-foot-content">
							<img class="global-foot-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/global/logo-inversed.png">
							<small>Code for America Labs, Inc is a non-partisan, non-political 501(c)(3) organization. Content is licensed through Creative Commons.</small>
						</div>
					</div>
				</div>
			</main>
			<?php wp_footer(); ?>
			<?php require_once( get_template_directory() . '/inc/scripts-footer.php' ); ?>
		</div>
	</body>
</html>
