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
        
        <table class="kinds-of-geek">
            <tr>
                <td>
                    <h3>Software Developers</h3>
                    
                    <ul>
                        <li>Get in <a href="https://github.com/codeforamerica">our code</a> and hack.</li>
                        <li>Deploy and build apps in your city. Join a local <a href="http://brigade.codeforamerica.org/">CfA Brigade</a>.</li>
                        <li>Guide and advise fellows and civic startups. <a href="http://codeforamerica.org/mentor">Become a Mentor</a>.</li>
                        <li>Learn about <a href="http://beyondtransparency.org/">open data and the civic tech ecosystem</a>.</li>
                    </ul>
                </td>
                <td>
                    <h3>Designers</h3>
                    
                    <ul>
                        <li>Design great citizen experiences, join a local <a href="http://brigade.codeforamerica.org/">CfA Brigade</a>.</li>
                        <li><a href="http://www.codeforamerica.org/mentor/">Mentor UX and graphic designers</a> in our fellowship and accelerator programs.</li>
                        <li>Level up on citizen-centered design.</li>
                    </ul>
                </td>
                <td>
                    <h3>Organizers</h3>
                    
                    <ul>
                        <li>Release more open data.</li>
                        <li>Organize a <a href="https://docs.google.com/a/codeforamerica.org/document/d/16CSiN809nNUksFYiQIpxzxHEhPZRAa_WpGA4DZ9upmc/edit#heading=h.7p1k5dwapvgf">civic write-a-thon</a>.</li>
                        <li>Test the latest <a href="http://www.codeforamerica.org/apps/">civic tech applications</a>.</li>
                        <li>Persuade your local government to enlist the <a href="http://www.codeforamerica.org/fellows/">fellows</a>.</li>
                        <li>Learn about <a href="http://beyondtransparency.org/">government transparency and open data practices</a>.</li>
                    </ul>
                </td>
            </tr>
        </table>
        
        <hr>
        
        <div class="picture-and-text">
        
            <div class="picture">
                <img src="http://placekitten.com/g/300/154">
            </div>
            
            <h4>Fellowship: Ready to spend a year in civic service?</h4>
            
            <p>
                Code for America’s Fellowship is a one-year paid fellowship program where cutting-edge developers, designers and urbanists are embedded in US cities to solve civic problems using technology. Fellows in past years have built apps that support citizen engagement, criminal justice and public health. Applications for the 2015 Fellowship will open in March 2014. Find out more.
            </p>

            <p>
                <a href="http://www.codeforamerica.org/fellows/2013-fellows/">Current fellows</a>
                &amp;
                <a href="http://www.codeforamerica.org/fellows/alumni-fellows/">alumni fellows</a>.
            </p>
        
        </div>
        
        <div class="picture-and-text">
        
            <div class="picture">
                <img src="http://placekitten.com/g/300/154">
            </div>
            
            <h4>Civic Startups: Are you a founder? Government needs options.</h4>
            
            <p>
                Code for America’s Accelerator is an annual 4-month program bringing funding, support, and mentorship to early-stage technology businesses that serve local governments.
            </p>

            <p>
                <a href="http://codeforamerica.org/accelerator/">Find out more</a>.
            </p>
        
        </div>
        
        <div class="clearfix"></div>
        
        <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
    <?php } ?>  
</div>

<?php get_footer(); ?>
