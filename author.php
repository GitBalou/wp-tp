<?php
/*
Template Name: Author
*/

// inclusion des header
get_header();

// Récupération des auteurs
$args = array(
    'post_type' => 'auteur'
);
$authors = new WP_Query($args);

// Boucle wordpress
while ($authors->have_posts()) : $authors->the_post();
    the_title();
    the_content();
    the_post_thumbnail();
endwhile;

// inclusion du footer
get_footer();