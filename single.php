


<?php 
/*Template Name: Single*/
get_header(); ?>

<div id="contain">

	<div class="post" id="post-<?php the_ID(); ?>">

	<!--appeler le titre de l’article ou des articles // avec commande qui va permettre au titre de s’afficher quand vous survolez son lien-->


		<div id="content-article">

			<h2 id="title-article"><?php the_title(); ?></h2>

		</div>

		<div class="post_content">

		<?php if(have_posts()) : ?>

		<!--va aller chercher PARMI les articles (commande « while ») celui qu’il faut (« the post »)-->
		<?php while(have_posts()) : the_post(); ?> 

			<?php the_content(); ?>

			<div> 

				<?php comments_template(); ?>

			</div>

		<?php endwhile; ?> 
		<?php endif; ?>

		</div> 

		

		<p class="postmetadata">

			Le <?php the_time('j F Y')?> par <?php the_author()?> <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires') . edit_post_link('Editer', ' &#124; ', ''); ?>   
		</p>

		


	<?php get_footer(); ?>

</div>