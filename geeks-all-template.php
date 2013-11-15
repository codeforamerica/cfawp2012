<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: Geeks Page (new)
*/

get_header(); ?>

<div class="wrap clearfix geeks-page">
    <?php while(have_posts()) { the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php /* the_content(); */ ?>
        
        <h3>Citizens have the power to help their cities.</h3>
        
        <p>
            We’re collaborating with New York - Philadelphia - Boston - Seattle - San Francisco - DC - Oakland - Chicago - Detroit - Austin -  San Diego - Lexington - Denver - Maine - Arlington -Twin Cities - San Diego - Sacramento - Hampton Roads - Honolulu - Grand Rapids - International -  more
        </p>
        
        <div class="geek-of-the-week">
            <h3>Why I Code for America</h3>
        
            <p>
                <img alt="" src="http://codeforamerica.org/wp-content/uploads/2012/10/Richa_Agarwal_Headshot-150x150.jpg" width="150" height="150">
            </p>
        
            <p>
                <a href="http://www.codeforamerica.org/2013/11/06/richa-agarwal-why-im-coding-for-america/">Richa Agarwal</a>
                <br>
                2013 Fellow
            </p>
        
            <p>
                Co-creator of
                <br>
                <a href="http://records.oaklandnet.com/">RecordTrac</a>
            </p>
        
            <p>
                <a href="http://www.codeforamerica.org/category/codingforamerica/">More civic hackers</a>
            </p>
        </div>

        <h3>What's Happening</h3>
        

        <ul>
            <li>Nov 19: <a href="">Bike Hack NYU Rudin</a> <a href="" class="additional">more events</a></li>
            <li>Hack request: <a href="">Add SMS to Ohana API</a> <a href="" class="additional">more hack requests</a></li>
            <li>Feb 22-24: <a href="">Code Across America</a> <a href="" class="additional">more national projects</a></li>
            <li>Video: <a href="">Civic Engagement & Design</a> <a href="" class="additional">more CfA videos</a></li>
            <li><a href="">Publish and Curate Open Data</a> <a href="" class="additional">more organizing</a></li>
        </ul>
        
        <hr>
        
        <div class="picture-and-text">
        
            <div class="picture">
                <img src="/wp-content/themes/cfawp2012/images/build-capacity.jpg">
            </div>
            
            <h4>Build capacity in your community.</h4>
            
            <p>
                Volunteer researchers, designers, developers and city officials are building better civic technology and <a href="/apps">deploying apps</a> in more than 40 cities. See who’s hacking near you or check out an event in your city. 
            </p>

            <p>
                <a href="http://brigade.codeforamerica.org/brigades">Brigades</a>
                <br>
                <a href="http://brigade.codeforamerica.org/pages/events">Events</a>
            </p>
        
        </div>
        
        <div class="picture-and-text">
        
            <div class="picture">
                <img src="/wp-content/themes/cfawp2012/images/bring-coders-designers.jpg">
            </div>
            
            <h4>Bring top coders, designers and researchers to your city.</h4>
            
            <p>
                Code for America’s Fellowship is a one-year program where cutting-edge developers, designers and researchers are embedded in US cities to solve civic problems using technology. Cities who’ve worked with us have built apps that support citizen engagement, criminal justice and public health. Contact <a href="mailto:luke@codeforamerica.org">luke@codeforamerica.org</a> to find out more or visit our <a href="/cities/fellowship">FAQ</a>.
            </p>

            <p>
                <a href="/city-current/">Current Cities</a>
                <br>
                <a href="/apps">The Apps</a>
            </p>
        
        </div>
        
        <div class="picture-and-text">
        
            <div class="picture">
                <img src="/wp-content/themes/cfawp2012/images/join-standards.jpg">
            </div>
            
            <h4>Join our data standards collaborations.</h4>
            
            <p>
                Releasing data in standard format makes it easy for developers to create useful applications for citizens. Together with city officials, we’re developing <a href="/civic-data-standards/">standards</a> that anyone can adopt for critical categories of data like restaurant and house inspections. Pledge to release your data:
            </p>

            <p>
                <a href="http://housefacts.me/">House Facts</a>
                <br>
                <a href="http://foodinspectiondata.us/">LIVES</a>
            </p>
        
        </div>
        
        <div class="clearfix"></div>
        
        <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
    <?php } ?>  
</div>

<?php get_footer(); ?>
