<?php get_header(); ?>

<h1 id="title">Egalité Homme Femme</h1>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    	<?php the_content(); ?>

			<div class="cercle paralax2 paralaxC"></div>

	<?php endwhile; endif; ?>



<?php get_footer(); ?>
