<?php
    $args = array( 'post_type' => 'party_playlist', 'posts_per_page' => 10 );
    $loop = new WP_Query( $args );
    if($loop->have_posts()) : ?>

        <div id="listen" class="section section--listen">

            <h1 class="section-header section-header--listen">
                Listen
            </h1>
            <?php
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="playlist__image-container">
                    <div class="playlist__text-container">
                        <div class="playlist__text">
                            Curated By
                        </div>
                        <div class="playlist__text playlist__text--title">
                            <?php the_title(); ?>
                        </div>
                    </div>
                    <img class="playlist__image" src="<?php the_post_thumbnail_url(); ?>">
                </div>

                <div class="playlist__body">
                    <?php the_content(); ?>
                </div>
            <?php
            endwhile;
            wp_reset_query();?>
        </div>
<?php
    endif; ?>