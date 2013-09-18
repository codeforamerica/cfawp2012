<?php
/*
Template Name: Well-Known Status (new)

Add the following line to the top of Wordpress .htacces:
    RewriteRule .well-known/status /well-known-status/ [L,R]
*/

header('Content-Type: application/json');

while(have_posts())
{
    the_post();
    $status = get_the_content();
    
    echo json_encode(array(
        'status' => $status,
        'updated' => time(),
        'dependencies' => null,
        'resources' => null
        ));
}

?>
