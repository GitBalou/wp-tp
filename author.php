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
?>
    <div class="row">
    <div class="col-md-6 text-center">
        <div class="tf-autor">
            <h2><?php the_title(); ?></h2>

            <p><?php the_content();?></p>
            <p><?php the_post_thumbnail();?></p>
        </div>
    </div>
<?php
endwhile;

// inclusion du footer
get_footer();