<?php
    $args = array( 'post_type' => 'party_instagram', 'posts_per_page' => 10 );
    $loop = new WP_Query( $args );
    if($loop->have_posts()) : ?>

        <div id="lurk" class="section section--lurk">
            <h1 class="section-header section-header--lurk">
                Lurk
            </h1>
            <?php
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <div class="lurklist-item">
                    <a class="lurklist-item__link" href="<?php echo get_post_meta( get_the_ID(), 'instagram_url', true ); ?>" target="_blank">
                        <img class="lurklist-item__image" src="<?php the_post_thumbnail_url(); ?>">
                    </a>
                </div>
            <?php
            endwhile;
            wp_reset_query();?>
        </div>
<?php
    endif; ?>
