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

        <h3>Citizens have the power to help their cities.</h3>
        
        <p class="collaboratrix">
            We’re collaborating with
            <a href="http://www.meetup.com/betanyc/">New York</a>,
            <a href="http://www.meetup.com/Code-for-America-Philly">Philadelphia</a>,
            <a href="http://www.meetup.com/Code-for-Boston/">Boston</a>,
            <a href="http://codeforseattle.org/">Seattle</a>,
            <a href="http://www.meetup.com/Code-for-San-Francisco-Civic-Hack-Night/">San Francisco</a>,
            <a href="http://codefordc.org/">DC</a>,
            <a href="http://openoakland.org/">Oakland</a>,
            <a href="http://opengovhacknight.org/">Chicago</a>,
            <a href="https://www.facebook.com/CodeForDetroit">Detroit</a>,
            <a href="http://www.open-austin.org/">Austin</a>,
            <a href="http://codeforsandiego.org/">San Diego</a>,
            <a href="http://www.meetup.com/cfabrigade/Lexington-KY/">Lexington</a>,
            <a href="http://www.meetup.com/Colorado-Code-for-Communities/">Denver</a>,
            <a href="https://www.facebook.com/code4maine">Maine</a>,
            <a href="http://www.meetup.com/Arlington-Code-Shop/">Arlington</a>,
            <a href="http://www.meetup.com/cfabrigade/Twin-Cities/">Twin Cities</a>,
            <a href="http://www.meetup.com/cfabrigade/Open-San-Diego/">San Diego</a>,
            <a href="http://www.meetup.com/cfabrigade/Sacramento-CA/">Sacramento</a>,
            <a href="http://codeforhouston.com/">Houston</a>,
            <a href="http://codeforhamptonroads.org/">Hampton Roads</a>,
            <a href="http://www.opentwincities.org/">Minneapolis</a>,
            <a href="https://plus.google.com/communities/116866725555175272325">Honolulu</a>,
            <a href="http://friendlycode.org/">Grand Rapids</a>,
            <a href="http://www.meetup.com/Code-for-Asheville/">Asheville</a>,
            <a href="http://www.meetup.com/Triangle-Code-for-America/">Durham</a>,
            <a href="http://www.meetup.com/Triangle-Code-for-America/">Cary</a>,
            <a href="http://codeforbtv.org/">Burlington</a>,
            <a href="http://www.meetup.com/cfabrigade/Salt-Lake-City-UT/">Salt Lake City</a>,
            <a href="http://codefortulsa.org/">Tulsa</a>,
            <a href="http://www.meetup.com/cfabrigade/Anchorage-AK/">Anchorage</a>,
            <a href="http://codeformiami.org/">Miami</a>,
            <a href="http://www.codeforamerica.org/cities/lasvegas/">Las Vegas</a>,
            <a href="http://sbdatajam-zvents.eventbrite.com/">South Bend</a>,
            <a href="http://www.meetup.com/KCBrigade/">Kansas City</a>,
            <a href="http://www.codeforamerica.org/international/">International</a>,
            and <a href="http://brigade.codeforamerica.org/brigades">more</a>.
        </p>
        
        <h3>What’s Happening</h3>
        
        <ul>
            <li>
                Nov 19: <a href="">Bike Hack NYU Rudin</a>
                (<a href="http://brigade.codeforamerica.org/pages/events">more events</a>)
            </li>
            <li>
                Hack request: <a href="">Add SMS to Ohana API</a>
                (<a href="https://github.com/codeforamerica/hack-requests">more hack requests</a>)
            </li>
            <li>
                Feb 22-24: <a href="">Code Across America</a>
                (<a href="http://www.hackforchange.org/challenges">more national projects</a>)
            </li>
            <li>
                Video: <a href="">Civic Engagement &amp; Design</a>
                (<a href="http://www.youtube.com/playlist?list=PL65XgbSILalV-wInUiERrhjweMlJkukMd">more CfA videos</a>)
            </li>
            <li>
                <a href="">Publish and Curate Open Data</a>
                (<a href="http://brigade.codeforamerica.org/pages/tools">more organizing</a>)
            </li>
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
                <img src="http://www.codeforamerica.org/wp-content/uploads/2010/06/class_photosml.jpg" alt="">
            </div>
            
            <h4>Fellowship: Ready to spend a year in civic service?</h4>
            
            <p>
                Code for America’s Fellowship is a one-year paid fellowship program where cutting-edge developers, designers and urbanists are embedded in US cities to solve civic problems using technology. Fellows in past years have built apps that support citizen engagement, criminal justice and public health. Applications for the 2015 Fellowship will open in March 2014. <a href="http://www.codeforamerica.org/fellows/">Find out more</a>.
            </p>

            <p>
                <a href="http://www.codeforamerica.org/fellows/2013-fellows/">Current fellows</a>
                &amp;
                <a href="http://www.codeforamerica.org/fellows/alumni-fellows/">alumni fellows</a>.
            </p>
        
        </div>
        
        <div class="picture-and-text">
        
            <div class="picture">
                <img src="http://www.codeforamerica.org/wp-content/uploads/2013/08/Screen-Shot-2013-08-13-at-12.36.32-PM-300x202.png" alt="">
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
