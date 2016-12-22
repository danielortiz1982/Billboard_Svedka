<?php get_header(); ?>
	<div class="main-content">
		<div class="container">
			<div class="content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php
					while ( have_posts() ) : the_post();
						the_title( '<h1 class="entry-title">', '</h1>' ); ?>

						<?php the_post_thumbnail(); the_content();
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					endwhile;
				?>
			</div>
		</div>
	</div>
<?php get_footer();
