<?php

// Ajout du custom_post auteur
add_action( 'init', 'create_post_type' );

function create_post_type() {
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