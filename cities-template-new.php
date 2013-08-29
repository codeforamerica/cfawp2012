<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: Cities Page (new)
*/

get_header(); ?>

<div class="wrap clearfix city-pages">
    <?php while(have_posts()) { the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php /* the_content(); */ ?>
        
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec nunc id est accumsan semper eu nec turpis. Sed eleifend est massa, sed consequat lectus tincidunt ac.
        </p>
        
        <form class="sign-up">
            <p>
                Your Name<br>
                <input type="text">
            </p>
            <p>
                Your Title<br>
                <input type="text">
            </p>
            <p>
                City, State<br>
                <input type="text">
            </p>
            <p>
                Your Email<br>
                <input type="text">
            </p>
            <p>
                <button>Join</button>
            </p>
        </form>
        
        <h3>Join The Municipal Innovation Conversation</h3>
        
        <p style="width: 620px;">
            Ut tortor erat, fermentum dignissim nisl vitae, rutrum tincidunt risus. Aliquam hendrerit consectetur pulvinar. Vestibulum nec nibh convallis erat volutpat suscipit nec eget dolor.
        </p>
        
        <h3>Ready To Level Up?</h3>
        
        <p style="width: 620px;">
            Aenean augue odio, aliquet vel luctus ac, lobortis nec leo. Curabitur pellentesque lectus vel porta blandit. Nullam bibendum, arcu vitae hendrerit blandit, elit nibh aliquet leo, et malesuada ligula nibh eu tellus. Proin in euismod eros. In suscipit mi sed sapien auctor, vitae iaculis nisl tristique. Morbi porttitor venenatis volutpat. Quisque luctus orci nec risus semper, at ornare lectus eleifend. Ut rhoncus est purus, imperdiet ullamcorper sem dictum eget. Etiam convallis lectus purus, a volutpat metus laoreet vulputate. Sed pellentesque iaculis metus vitae varius. Vestibulum dignissim ipsum ut tempor molestie.
        </p>
        
        <hr style="clear: both">
        
        <div class="picture-and-text">
        
            <div class="picture">
                <img src="http://placekitten.com/300/165">
            </div>
            
            <h4>Duis a pharetra mi</h4>
            
            <p>
                Morbi congue viverra felis nec luctus. Duis diam mi, sodales eu lacinia accumsan, fermentum ut sem. Nunc ut felis eros. Duis a porta mi. Cras suscipit neque nec lorem feugiat imperdiet sit amet ac dui. Quisque rutrum a justo ac adipiscing.
            </p>
        
        </div>
        
        <div class="picture-and-text">
        
            <div class="picture">
                <img src="http://placekitten.com/300/165">
            </div>
            
            <h4>Phasellus ultricies scelerisque est</h4>
            
            <p>
                Quis pellentesque neque. Curabitur eu accumsan purus. Nullam aliquet viverra varius. Donec faucibus velit dui, quis luctus sem porta eget. Nunc vulputate, leo vel suscipit congue, odio diam imperdiet velit, vel vehicula magna velit sed nibh.
                Quis pellentesque neque. Curabitur eu accumsan purus. Nullam aliquet viverra varius. Donec faucibus velit dui, quis luctus sem porta eget. Nunc vulputate, leo vel suscipit congue, odio diam imperdiet velit, vel vehicula magna velit sed nibh.
                Quis pellentesque neque. Curabitur eu accumsan purus. Nullam aliquet viverra varius. Donec faucibus velit dui, quis luctus sem porta eget. Nunc vulputate, leo vel suscipit congue, odio diam imperdiet velit, vel vehicula magna velit sed nibh.
                Quis pellentesque neque. Curabitur eu accumsan purus. Nullam aliquet viverra varius. Donec faucibus velit dui, quis luctus sem porta eget. Nunc vulputate, leo vel suscipit congue, odio diam imperdiet velit, vel vehicula magna velit sed nibh.
            </p>
        
        </div>
        
        <div class="clearfix"></div>
        
        <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
    <?php } ?>  
</div>

<?php get_footer(); ?>
