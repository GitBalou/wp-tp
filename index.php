 
<?php get_header(); ?>

<!--vérifier s’il y a des articles à afficher: « if have posts ». S’il n’y en a pas, il n’affiche rien. -->
<?php if(have_posts()) : ?>

<!--va aller chercher PARMI les articles (commande « while ») celui qu’il faut (« the post »)-->
<?php while(have_posts()) : the_post(); ?> 

<!--appeler le titre de l’article ou des articles // avec commande qui va permettre au titre de s’afficher quand vous survolez son lien-->
<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

<!--fermer cette requête-->
<?php endwhile; ?> 
<?php the_content(); ?>
<?php endif; ?>

	</body>

</html>