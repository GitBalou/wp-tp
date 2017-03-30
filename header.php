<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- bootstrap 3-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<<<<<<< HEAD
	<title>

		<?php bloginfo('name') ?>
		<?php if ( is_404() ) : ?> &raquo; 

			<?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; 
			<?php bloginfo('description') ?><?php else : ?>
			<?php wp_title() ?>
			
		<?php endif ?>
		
	</title> 

	  

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> 

 
=======
    <!--fontawesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
>>>>>>> 53cc36bb677c34fa722fb4d7bfccbf9e4d1667cd

    <!-- titre-->
	<title>the First : blog de jeux vidéos</title>

    <!-- css -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<<<<<<< HEAD
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" /> 

	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" /> 

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

=======
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
>>>>>>> 53cc36bb677c34fa722fb4d7bfccbf9e4d1667cd

</head> 

<body>

<!-- Navigation -->
<nav class="navbar navbar-fixed-top">
    <div class="container">

        <!--navbar brand-->
        <a class="navbar-brand" href="#page-top">The First</a>

        <!--bouton toggle -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-responsive">
                <span class="sr-only">Menu</span> Menu <i class="fa fa-bars"></i>
            </button>
        </div>

        <!-- Menu responsive -->
        <div class="collapse navbar-collapse" id="menu-responsive">
            <ul class="nav navbar-nav navbar-right">
                <li class="page-scroll">
                    <a href="#presentation">Présentation</a>
                </li>
                <li class="page-scroll">
                    <a href="#parcours">Parcours</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section id="tf-content">

