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

<div class="wrap clearfix city-pages">
    <?php while(have_posts()) { the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php /* the_content(); */ ?>
        
        <div class="text-and-picture">
        
            <div class="picture">
                <img src="http://placekitten.com/g/300/165">
            </div>
            
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec nunc id est accumsan semper eu nec turpis. Sed eleifend est massa, sed consequat lectus tincidunt ac. Fusce et vestibulum turpis, sit amet malesuada nibh. Curabitur quam arcu, mattis id facilisis a, consequat eu odio. Nunc tincidunt neque quam, nec facilisis augue pellentesque et. Nullam ac bibendum sem, ut varius eros. Maecenas lacinia dolor et commodo sodales.
            </p>
        
        </div>
        
        <div class="clearfix"></div>
        
        <h3>Join us in Anytown</h3>
        
        <div class="text-and-picture">
        
            <div class="picture">
                <img src="http://placekitten.com/300/165">
            </div>
            
            <h4>The Brigade</h4>
            
            <p>
                Ut tortor erat, fermentum dignissim nisl vitae, rutrum tincidunt risus.
                Aliquam hendrerit consectetur pulvinar. Vestibulum nec nibh convallis erat volutpat suscipit nec eget dolor.
                Aenean augue odio, aliquet vel luctus ac, lobortis nec leo. Curabitur pellentesque lectus vel porta blandit. Nullam bibendum, arcu vitae hendrerit blandit, elit nibh aliquet leo, et malesuada ligula nibh eu tellus. Proin in euismod eros. In suscipit mi sed sapien auctor, vitae iaculis nisl tristique. Morbi porttitor venenatis volutpat. Quisque luctus orci nec risus semper, at ornare lectus eleifend. Ut rhoncus est purus, imperdiet ullamcorper sem dictum eget. Etiam convallis lectus purus, a volutpat metus laoreet vulputate. Sed pellentesque iaculis metus vitae varius. Vestibulum dignissim ipsum ut tempor molestie.
            </p>
            
            <p class="link-block">
                <a href="#">Mauris vel lectus sed mi</a>
                <br>
                <a href="#">Elementum bibendum in ac risus</a>
            </p>
        
        </div>
        
        <div class="text-and-picture">
            
            <div class="picture">
                <img src="http://placekitten.com/300/165">

                <p>
                    Nunc aliquet pulvinar nulla, quis ultrices ligula varius in. Maecenas ac quam quis lectus condimentum fermentum. Integer id odio urna. Praesent at ultrices dolor.
                </p>
            </div>
        
            <h4>The 20XX CfA Fellowship in Anytown</h4>
            
            <p>
                Aliquam erat volutpat. Etiam vestibulum libero arcu, eu luctus ligula gravida ac. In quis libero nec dui viverra commodo ac ac felis. Integer laoreet sit amet eros a consequat. Curabitur at feugiat purus. Etiam sed velit sit amet nisi dignissim gravida. Maecenas porta, purus sit amet commodo tempus, mauris neque ullamcorper dui, sit amet porttitor tellus neque vitae sem. Aenean vitae lacinia dolor.
                Aliquam erat volutpat. Etiam vestibulum libero arcu, eu luctus ligula gravida ac. In quis libero nec dui viverra commodo ac ac felis. Integer laoreet sit amet eros a consequat. Curabitur at feugiat purus. Etiam sed velit sit amet nisi dignissim gravida. Maecenas porta, purus sit amet commodo tempus, mauris neque ullamcorper dui, sit amet porttitor tellus neque vitae sem. Aenean vitae lacinia dolor.
                Aliquam erat volutpat. Etiam vestibulum libero arcu, eu luctus ligula gravida ac. In quis libero nec dui viverra commodo ac ac felis. Integer laoreet sit amet eros a consequat. Curabitur at feugiat purus. Etiam sed velit sit amet nisi dignissim gravida. Maecenas porta, purus sit amet commodo tempus, mauris neque ullamcorper dui, sit amet porttitor tellus neque vitae sem. Aenean vitae lacinia dolor.
            </p>
            
            <p class="link-block">
                <a href="#">Mauris vel lectus sed mi</a>
                <br>
                <a href="#">Elementum bibendum in ac risus</a>
                <br>
                <a href="#">Mauris vel lectus sed mi</a>
                <br>
                <a href="#">Elementum bibendum in ac risus</a>
            </p>
            
            <p class="link-block">
                <a href="#">Mauris vel lectus sed mi</a>
                <br>
                <a href="#">Elementum bibendum in ac risus</a>
            </p>
            
            <h5>Community Partners</h5>
            
            <p>
                <a href="#"><img src="http://placekitten.com/200/50"></a>
            </p>
        
        </div>
        
        <hr>
        
        <h3>Articles and Videos</h3>
        
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
