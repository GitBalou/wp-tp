 
<?php 

get_header(); ?>


<div class="row">
  <div class="col-md-8">

	<!--vérifier s’il y a des articles à afficher: « if have posts ». S’il n’y en a pas, il n’affiche rien. -->
	<?php if(have_posts()) : ?>

	<!--va aller chercher PARMI les articles (commande « while ») celui qu’il faut (« the post »)-->
	<?php while(have_posts()) : the_post(); ?> 

	<!--aller chercher l’ID de l’article dans la base-->
		<div class="post" id="post-<?php the_ID(); ?>">

		<!--appeler le titre de l’article ou des articles // avec commande qui va permettre au titre de s’afficher quand vous survolez son lien-->
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

		<p class="postmetadata">
		Le <?php the_time('j F Y') ?> 
		par <?php the_author() ?> <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires') . edit_post_link('Editer', ' &#124; ', ''); ?>   
		</p>
			
			<!--afficher le contenu de l'article-->
			<div class="text-justify">
			<?php the_content(); ?>
			</div> 
		</div>

	<!--fermer cette requête-->
	<?php endwhile; ?> 
	<?php endif; ?>

	<?php get_footer(); ?>
</div>