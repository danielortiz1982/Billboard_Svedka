<?php get_header(); ?>
<div class="main-content">
	<div class="container">
		<div class="content">
			<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', get_post_format() );
					the_post_thumbnail();
					the_post_navigation();
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile;
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
