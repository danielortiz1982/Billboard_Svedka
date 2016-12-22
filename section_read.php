<?php 
    $args = array( 'post_type' => 'party_articles', 'posts_per_page' => 4 ); 
    $loop = new WP_Query( $args );
    if($loop->have_posts()) : ?>

        <div id="read" class="section section--read">

            <h1 class="section-header section-header--read">
                Read
            </h1>

            <?php 
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <div class="readlist-item__image-container">
                <a href="<?php echo get_post_meta(get_the_ID(), 'article_url', true); ?>" target="_blank">
                    <img class="readlist-item__image" src="<?php the_post_thumbnail_url(); ?>">
                </a>
                <div class="readlist-item__title">
                    <span class="readlist-item__title-word">
                        <?php echo implode('</span><span class="readlist-item__title-word">', explode(' ', the_title('','',false))); ?>
                    </span>
                </div>
            </div>
            <?php
            endwhile;
            wp_reset_query();?>
        </div>
<?php
    endif; ?>