

<div class="post" id="post-<?php the_ID(); ?>">

<!--appeler le titre de l’article ou des articles // avec commande qui va permettre au titre de s’afficher quand vous survolez son lien-->


	<div id="content-article">
		<h2><?php the_title(); ?></h2>

		<p><?php the_content(); ?></p>

	</div>

	<p class="postmetadata">

		<?php the_time('j F Y')?> par <?php the_author() . comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires') . edit_post_link('Editer', ' &#124; ', ''); ?>   
	</p>


</div>
