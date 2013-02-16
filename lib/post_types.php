<?php
/*
Author: The CfA team in collaboration with Joint Concepts
URL: http://github.com/codeforamerica/cfawp2012
*/

function cfa_create_custom_post_types () {

  // CfA Projects
  register_post_type( "cfa-project",
    array(
      "labels" => array(
        "name"           => __( "Projects" ),
        "singular_name"  => __( "Project" )
      ),
      "capability_type" => "post",
      "public"          => true,
      "supports"        => array( "title", "editor","excerpt", "author", "thumbnail" ),
      "taxonomies"      => array( "post_tag" )
    )
  );

}

?>
