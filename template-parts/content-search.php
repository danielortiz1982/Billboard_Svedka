<div class="main-content">
	<div class="container">
		<div class="content">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<?php
				if ( 'post' === get_post_type() ) :
					Billboard_Svedka_posted_on();
					endif;
					the_excerpt();
					Billboard_Svedka_entry_footer();
			?>
		</div>
	</div>
</div>

