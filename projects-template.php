<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: Projects
*/

get_header(); ?>

<div class="wrap clearfix" id="inner">
	
  <div id="maincontent">

<div class="ttl">Get Involved with Our Projects</div>  

<?php
$args = array( 'post_type' => 'cfa_project', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>
		
<div id="issues">	
<div style="width: 620px; padding: 0px; float: left; " class="entry-content">	<h3 id="page-header" style="background:url(<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); echo $large_image_url[0]; ?>) center center no-repeat"><a href="#" ><?php the_title(); ?></a></h3>
	
				<?php the_content(); ?>
				<p><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">Read more</a></p>
				</div></div>

	
	
<?php endwhile; ?>




<!--<div id="issues">
	<h3 style="background:url(<?php bloginfo( 'template_url' ); ?>/images/openness.gif) center center no-repeat"><a href="#">Openness</a></h3>
	<div>
		<p>Openness in government can come about in many different ways: public information is freely available and useful; the workings of government are made transparent; or those working in the public interest develop the "new commons", freely available civic tools and knowledge. At their core, however, is an important and common underlying principle; that by reducing barriers and sharing what we create, we can work together to make our governments and communities more efficient and effective.</p>

<p><a href="#" class="more"><strong>Learn More: Innovative Strategies and Resources</strong></a></p>

	</div>
	<h3 style="background:url(<?php bloginfo( 'template_url' ); ?>/images/participation.gif) center center no-repeat"><a href="#">Participation</a></h3>
	<div>
		<p>In the United States, we live a paradox of low levels of political participation combined with high levels of public service and philanthropy. The challenges our communities face will only be met by enlisting the contributions of people and organizations from across society in pursuit of our common interests. Technology is enabling us to go beyond the typical ways of engaging with government, and become much more collaborative and inclusive.  </p>
		<p><a href="#" class="more"><strong>Learn More: Innovative Strategies and Resources</strong></a></p>

	</div>
	<h3 style="background:url(<?php bloginfo( 'template_url' ); ?>/images/education.gif) center center no-repeat"><a href="#">Education</a></h3>
	<div>
		<p>The gap between the United States and international leaders in student proficiency in basic subjects as well as science and technology is growing, and it is undermining our students' competitiveness, the health of our own economy, and the intellectual capital we need to solve the problems that confront our communities and our world. Improving our schools and making sure that every child has a opportunity for an education that will allow them to lead a rewarding, productive life is a recognized imperative at the local, state and national levels. The foundation for many current attempts to improve education is the use of data to make decisions, with states and districts creating technology to track and report standardized test scores.</p>
	<p><a href="#" class="more"><strong>Learn More: Innovative Strategies and Resources</strong></a></p>


	</div>
	<h3 style="background:url(<?php bloginfo( 'template_url' ); ?>/images/efficiency.gif) center center no-repeat"><a href="#">Efficiency</a></h3>
	<div>
		<p>Times are tough for American cities dealing with the financial crisis: Between budget cutbacks and increasing demands for services, it's more crucial than ever to make sure that city government's resources are managed effectively to achieve the most impact. By introducing innovative technological solutions and opening city data, we can help cities do more and work better by decreasing bureaucratic burdens, lowering costs, and streamlining service delivery.</p>

		<p><a href="#" class="more"><strong>Learn More: Innovative Strategies and Resources</strong></a></p>
</div></div>--></div>
<div class="right-col">


				
<?php get_sidebar(); ?>

<?php get_footer(); ?>
