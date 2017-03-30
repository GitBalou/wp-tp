<?php

// Ajout du custom_post auteur
add_action( 'init', 'create_auteur_post' );

function create_auteur_post() {
    register_post_type('auteur', array(
        'label'     => 'auteur',
        'labels'    => array(
            'add_new_item'  => 'Ajouter un auteur',
            'edit_item'     => 'Modifier un auteur',
            'new_item'      => 'Ajouter un auteur',
            'view_item'     => 'Voir l\'auteur',
            'singular_name' => 'Auteur'
        ),
        'public'            => true
    ));
}

// Ajout d'un menu en header
add_action( 'init', 'register_navigation_menu' );
function register_navigation_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
