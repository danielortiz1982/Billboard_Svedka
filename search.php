<?php get_header(); ?>
<div class="main-content">
	<div class="container">
		<div class="content">
			<?php
				if ( have_posts() ) : ?>
					<header class="page-header">
						<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'Billboard_Svedka' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header>
					<?php
					while ( have_posts() ) : the_post();
						the_post_thumbnail();
						the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
						Billboard_Svedka_posted_on();
						the_excerpt();
						Billboard_Svedka_entry_footer();
					endwhile;
					the_posts_navigation();
				else :
				if ( is_home() && current_user_can( 'publish_posts' ) ) :
			 		printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'Billboard_Svedka' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) );
				 elseif ( is_search() ) :
					esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Billboard_Svedka' );
						get_search_form();
				else :
					esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'Billboard_Svedka' );
						get_search_form();
				endif;
				endif; 
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
