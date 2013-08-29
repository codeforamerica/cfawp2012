<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: City Detail Page (new)
*/

get_header(); ?>

<div class="wrap clearfix" id="cities-detail">
    <?php while(have_posts()) { the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php /* the_content(); */ ?>
        
        <div style="float: right; width: 300px;">
            <img src="http://placekitten.com/g/300/165">
        </div>
        
        <p style="width: 620px;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec nunc id est accumsan semper eu nec turpis. Sed eleifend est massa, sed consequat lectus tincidunt ac. Fusce et vestibulum turpis, sit amet malesuada nibh. Curabitur quam arcu, mattis id facilisis a, consequat eu odio. Nunc tincidunt neque quam, nec facilisis augue pellentesque et. Nullam ac bibendum sem, ut varius eros. Maecenas lacinia dolor et commodo sodales.
        </p>
        
        <h3 style="clear: both">Join us in Anytown</h3>
        
        <div style="clear: both">
        
            <div style="float: right; width: 300px;">
                <img src="http://placekitten.com/300/165">
            </div>
            
            <h4>The Brigade</h4>
            
            <p style="width: 620px;">
                Ut tortor erat, fermentum dignissim nisl vitae, rutrum tincidunt risus. Aliquam hendrerit consectetur pulvinar. Vestibulum nec nibh convallis erat volutpat suscipit nec eget dolor.
                <!--
                Aenean augue odio, aliquet vel luctus ac, lobortis nec leo. Curabitur pellentesque lectus vel porta blandit. Nullam bibendum, arcu vitae hendrerit blandit, elit nibh aliquet leo, et malesuada ligula nibh eu tellus. Proin in euismod eros. In suscipit mi sed sapien auctor, vitae iaculis nisl tristique. Morbi porttitor venenatis volutpat. Quisque luctus orci nec risus semper, at ornare lectus eleifend. Ut rhoncus est purus, imperdiet ullamcorper sem dictum eget. Etiam convallis lectus purus, a volutpat metus laoreet vulputate. Sed pellentesque iaculis metus vitae varius. Vestibulum dignissim ipsum ut tempor molestie.
                -->
            </p>
            
            <p style="width: 300px; float: left">
                <a href="#">Mauris vel lectus sed mi</a>
                <br>
                <a href="#">Elementum bibendum in ac risus</a>
            </p>
        
        </div>
        
        <div style="clear: both">
            
            <div style="float: right; width: 300px; clear: left">
                <img src="http://placekitten.com/300/165">
                <br>
                Nunc aliquet pulvinar nulla, quis ultrices ligula varius in. Maecenas ac quam quis lectus condimentum fermentum. Integer id odio urna. Praesent at ultrices dolor.
            </div>
        
            <h4>The 20XX CfA Fellowship in Anytown</h4>
            
            <p style="width: 620px;">
                Aliquam erat volutpat. Etiam vestibulum libero arcu, eu luctus ligula gravida ac. In quis libero nec dui viverra commodo ac ac felis. Integer laoreet sit amet eros a consequat. Curabitur at feugiat purus. Etiam sed velit sit amet nisi dignissim gravida. Maecenas porta, purus sit amet commodo tempus, mauris neque ullamcorper dui, sit amet porttitor tellus neque vitae sem. Aenean vitae lacinia dolor.
                Aliquam erat volutpat. Etiam vestibulum libero arcu, eu luctus ligula gravida ac. In quis libero nec dui viverra commodo ac ac felis. Integer laoreet sit amet eros a consequat. Curabitur at feugiat purus. Etiam sed velit sit amet nisi dignissim gravida. Maecenas porta, purus sit amet commodo tempus, mauris neque ullamcorper dui, sit amet porttitor tellus neque vitae sem. Aenean vitae lacinia dolor.
                Aliquam erat volutpat. Etiam vestibulum libero arcu, eu luctus ligula gravida ac. In quis libero nec dui viverra commodo ac ac felis. Integer laoreet sit amet eros a consequat. Curabitur at feugiat purus. Etiam sed velit sit amet nisi dignissim gravida. Maecenas porta, purus sit amet commodo tempus, mauris neque ullamcorper dui, sit amet porttitor tellus neque vitae sem. Aenean vitae lacinia dolor.
            </p>
            
            <p style="width: 320px; float: left">
                <a href="#">Mauris vel lectus sed mi</a>
                <br>
                <a href="#">Elementum bibendum in ac risus</a>
                <br>
                <a href="#">Mauris vel lectus sed mi</a>
                <br>
                <a href="#">Elementum bibendum in ac risus</a>
            </p>
            
            <p style="width: 320px; float: left">
                <a href="#">Mauris vel lectus sed mi</a>
                <br>
                <a href="#">Elementum bibendum in ac risus</a>
            </p>
            
            <h5 style="clear: left">Community Partners</h5>
            
            <p style="width: 620px;">
                <a href="#"><img src="http://placekitten.com/200/50"></a>
            </p>
        
        </div>
        
        <hr>
        
        <h3 style="clear: both">Articles and Videos</h3>
        
        <div style="clear: both">
        
            <div style="float: left; width: 320px; clear: left">
                <img src="http://placekitten.com/300/165">
            </div>
            
            <h4 style="clear: right">Duis a pharetra mi</h4>
            
            <p style="margin-left: 320px">
                Morbi congue viverra felis nec luctus. Duis diam mi, sodales eu lacinia accumsan, fermentum ut sem. Nunc ut felis eros. Duis a porta mi. Cras suscipit neque nec lorem feugiat imperdiet sit amet ac dui. Quisque rutrum a justo ac adipiscing.
            </p>
        
        </div>
        
        <div style="clear: both">
        
            <div style="float: left; width: 320px; clear: left">
                <img src="http://placekitten.com/300/165">
            </div>
            
            <h4 style="clear: right">Phasellus ultricies scelerisque est</h4>
            
            <p style="margin-left: 320px">
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
