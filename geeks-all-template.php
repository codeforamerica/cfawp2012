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

<div class="wrap clearfix city-pages">
    <?php while(have_posts()) { the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php /* the_content(); */ ?>
        
        <p>
            Across America, government employees are accelerating city innovation by sharing their best ideas, collaborating with local civic hackers, and enlisting elite technologists for a year of service.
        </p>
        
        <script src="/wp-content/themes/cfawp2012/cities-wufoo-signup.js" type="application/javascript"></script>

        <form class="sign-up" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="https://codeforamerica.wufoo.com/forms/x7p4s5/#public">
            <p>
                <label for="Field4">Your Name</label><br>
                <input type="text" id="Field4" name="Field4">
            </p>
            <p>
                <label for="Field17">Your Title</label><br>
                <input type="text" id="Field17" name="Field17">
            </p>
            <p>
                <label for="Field5">Your Organization</label><br>
                <input type="text" id="Field5" name="Field5">
            </p>
            <p>
                <label for="Field15">City, State</label><br>
                <input type="text" id="Field15" name="Field15">
            </p>
            <p>
                <label for="Field3">Your Email</label><br>
                <input type="text" id="Field3" name="Field3">
            </p>
            <p>
                <button>Join</button>
                <input type="hidden" id="idstamp" name="idstamp" value="sh5/MTRGERiNsV54IXogmRj5IrbhkUDhfGHwlVPFPss=">
            </p>
        </form>
        
        <h3>Join the Conversation</h3>
        
        <p>
            Over 200 local officials, startups and NGOs discuss data standards, current events and civic tech on a focused, moderated email list. Titles of some active members include:
        </p>
        
        <p>
            Chief Innovation Officer, City of KC, Missouri
            <br>
            Deputy Chief of Staff, City of Houston
            <br>
            Director of Research and Technology, Urban Strategies Council
        </p>
        
        <h3>Ready to Level Up?</h3>
        
        <p>
            Code for America's Peer Network helps you innovate by providing targeted training, hands-on support and early access to new technology. Recent trainings include <a href="/07-11-2013-jared/">user interface engineering</a> and <a href="/05-13-201/">broadband policy</a>.
        </p>
        
        <p>
            <a href="#">Request an invite</a>.
        </p>
        
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
