

<?php 
get_header(); ?>

<div class="wrap clearfix issues"  id="inner">
    <div id="participating-wrap" class="clearfix">
         <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div id="issues">	
            <div style="width: 620px; padding: 0px; float: left; " class="entry-content">	<h3 id="page-header" style="background:url(<?php $headerimg="headerimg"; echo get_post_meta($post->ID, $headerimg, true); ?>) center center no-repeat"><a href="#" ><?php the_title(); ?></a></h3>
                <?php the_content(); ?> 
            </div>
        </div>
        <div class="right-col">
            <?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
            <div class="testimonial-wrap">
                <div class="testimonial-content"> 
                    <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 90 ) ); ?>
                    <p><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php printf( esc_attr__( '%s', 'twentyten' ), get_the_author() ); ?></a> <span class="position">Project Lead</span></p>
                    <p style="font-size: .8em; color: #666;">	
                    <em>Contact <?php the_author_meta( 'first_name' ); ?> to get involved:</em>
                    <br><a href="mailto:<?php the_author_meta( 'user_email' ); ?>">Email</a> | <a href="http://twitter.com/<?php the_author_meta( 'twitter' ); ?>"><?php the_author_meta( 'twitter' ); ?></a>
                    </p>
                </div>
            </div>
        <?php endif; ?>
            <div id="wp-widget"><h3 class="widget-title">Get Involved Now</h3>	
                <div class="textwidget">
                    <?php $getinvolved="getinvolved"; echo get_post_meta($post->ID, $getinvolved, true); ?>	
                </div>
            </div>
            <div id="wp-widget"><h3 class="widget-title">Be Social</h3>	
                <div class="textwidget">
                
            <span class="st_twitter_large" displayText="Tweet"></span><span class="st_facebook_large" displayText="Facebook"></span><span class="st_ybuzz_large" displayText="Yahoo! Buzz"></span><span class="st_gbuzz_large" displayText="Google Buzz"></span><span class="st_email_large" displayText="Email"></span><span class="st_sharethis_large" displayText="ShareThis"></span>    
            </div>
            </div>
    </div>
</div>

<div id="twocols-container" class="clearfix">
    <div id="maincontent" class="entry-content">
        <?php $leftcolumn="leftcolumn"; echo get_post_meta($post->ID, $leftcolumn, true); ?>	
        <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
    </div>
    <div class="right-col">
        <?php $rightcolumn="rightcolumn"; echo get_post_meta($post->ID, $rightcolumn, true); ?></div>
    </div>
</div>


<?php endwhile; ?>

<?php get_footer(); ?>

