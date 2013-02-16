<?php
/*
Author: The CfA team in collaboration with Joint Concepts
URL: http://github.com/codeforamerica/cfawp2012
*/

function cfa_enqueue_scripts_and_styles () {
  cfa_enqueue_styles();
  cfa_enqueue_scripts();
}

function cfa_enqueue_styles () {
  wp_register_style( "cfa_stylesheet", cfa_get_css_dir_uri() . "/application.css" );
  wp_enqueue_style( "cfa_stylesheet" );
}

function cfa_enqueue_scripts () {
  wp_register_script( "cfa_script", cfa_get_js_dir_uri() . "/application.min.js", false, false, true );
  wp_enqueue_script( "cfa_script" );
}

////////////////////////////////////
////////////// HELPERS ///////////////
//////////////////////////////////////

function cfa_get_library_uri () {
  return get_stylesheet_directory_uri() . "/lib";
}

function cfa_get_css_dir_uri () {
  return cfa_get_library_uri() . "/css";
}

function cfa_get_js_dir_uri () {
  return cfa_get_library_uri() . "/js";
}

?>
