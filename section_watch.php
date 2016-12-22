<?php
    $args = array( 'post_type' => 'party_video', 'posts_per_page' => 10 );
    $loop = new WP_Query( $args );
    if($loop->have_posts()) : ?>

        <div id="watch" class="section">
    
            <h1 class="section-header section-header--watch">
                Watch
            </h1>
            <?php
            $isFirst = true;
            while ( $loop->have_posts() ) : $loop->the_post();
                $thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID(), 'video-Img'));
                $thumbnail_url = $thumbnail_data[0];
                $containerClass = $isFirst ? 'video-container--first' : 'video-container--list';
                $isFirst = false; ?>
                <div class="video-container <?php echo $containerClass ?> js-video-container" data-video-id="<?php echo get_post_meta(get_the_ID(), 'video_ID', true); ?>">
                    <div class="video-wrapper play-button">
                        <img class="video" src="<?php the_post_thumbnail_url(); ?>">
                    </div>
                    <div class="video-text-container">
                        <h1 class="video-title">
                            <?php the_title(); ?>
                        </h1>
                        <p class="video-body">
                            <?php the_content(); ?>
                        </p>
                    </div>
                </div>

            <?php
            endwhile;
            wp_reset_query(); ?>

            <div class="lightbox-container js-lightbox-container">
                <div class="lightbox-wrapper">
                    <button class="lightbox-close js-lightbox-close">x</button>
                    <div class="lightbox-content">
                        <div style="display: block; position: relative; max-width: 100%;">
                            <div class="js-video-wrapper" style="padding-top: 56.25%;">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    endif; ?>