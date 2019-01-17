<?php

get_header();

if (have_posts()) :
	while (have_posts()): the_post(); ?>
	
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php the_content(null, false); ?> 
<?php	endwhile;
	
	else:
		echo '<p>Ikke noe innhold funnet</p>';
	endif;

get_footer();

?>