<?php 
	
	add_action('add_meta_boxes', 'add_party_article_meta');
	function add_party_article_meta(){
		add_meta_box('party_article', 'Article URL', 'dislpay_party_article_meta', 'party_articles', 'normal', 'high');
	}
	function dislpay_party_article_meta( $post ){
		global $post;
		$values = get_post_custom( $post->ID );
		wp_nonce_field( 'party_article_meta_box_nonce', 'meta_box_nonce' );
    	$article_txt = isset( $values['article_url'] ) ? esc_attr( $values['article_url'][0] ) : '';
		?>
		<label for="article_url">Story Link</label><br />
        <input type="text" class="input" class="input" name="article_url" id="article_url" placeholder="http://www.sample.com/article" value="<?php echo $article_txt; ?>" />
        <?php 
	}
	// start of post meta function ~~~>
	add_action( 'save_post', 'party_article_meta_box_save' );
	function party_article_meta_box_save( $post_id )
	{
	    // Bail if we're doing an auto save
	    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	    // if our nonce isn't there, or we can't verify it, bail
	    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'party_article_meta_box_nonce' ) ) return;
	    // if our current user can't edit this post, bail
	    if( !current_user_can( 'edit_post' ) ) return;
	    // now we can actually save the data
	    $allowed = array();
	    // Make sure your data is set before trying to save it
	    if( isset( $_POST['article_url'] ) )
	        update_post_meta( $post_id, 'article_url', wp_kses( $_POST['article_url'], $allowed ) );
	}
	// start of Instagram meta ~~~>
	add_action('add_meta_boxes', 'add_party_instagram_meta');
	function add_party_instagram_meta(){
		add_meta_box('party_instagram_meta', 'Instagram Photo URL', 'dislpay_party_instagram_meta', 'party_instagram', 'normal', 'high');
	}
	function dislpay_party_instagram_meta( $post ){
		global $post;
		$values = get_post_custom( $post->ID );
		wp_nonce_field( 'party_instagram_meta_box_nonce', 'meta_box_nonce' );
    	$instagram_txt = isset( $values['instagram_url'] ) ? esc_attr( $values['instagram_url'][0] ) : '';
		?>
		<label for="instagram_url">Instagram Link</label><br />
        <input type="text" class="input" name="instagram_url" id="instagram_url" placeholder="http://www.sample.com/Instagram" value="<?php echo $instagram_txt; ?>" />
        <?php 
	}
	// start of post meta function ~~~>
	add_action( 'save_post', 'party_instagram_meta_box_save' );
	function party_instagram_meta_box_save( $post_id )
	{
	    // Bail if we're doing an auto save
	    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	    // if our nonce isn't there, or we can't verify it, bail
	    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'party_instagram_meta_box_nonce' ) ) return;
	    // if our current user can't edit this post, bail
	    if( !current_user_can( 'edit_post' ) ) return;
	    // now we can actually save the data
	    $allowed = array();
	    // Make sure your data is set before trying to save it
	    if( isset( $_POST['instagram_url'] ) )
	        update_post_meta( $post_id, 'instagram_url', wp_kses( $_POST['instagram_url'], $allowed ) );
	}

// start of Video meta ~~~>
	add_action('add_meta_boxes', 'add_party_video_meta');
	function add_party_video_meta(){
		add_meta_box('party_video_meta', 'Video ID', 'dislpay_party_video_meta', 'party_video', 'normal', 'high');
	}
	function dislpay_party_video_meta( $post ){
		global $post;
		$values = get_post_custom( $post->ID );
		wp_nonce_field( 'party_video_meta_box_nonce', 'meta_box_nonce' );
    	$video_txt = isset( $values['video_ID'] ) ? esc_attr( $values['video_ID'][0] ) : '';
		?>
		<label for="video_ID">Brigthcove ID</label><br />
        <input type="text" class="input" name="video_ID" id="video_ID" placeholder="5026803797001" value="<?php echo $video_txt; ?>" />
        <?php 
	}
	// start of post meta function ~~~>
	add_action( 'save_post', 'party_video_meta_box_save' );
	function party_video_meta_box_save( $post_id )
	{
	    // Bail if we're doing an auto save
	    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	    // if our nonce isn't there, or we can't verify it, bail
	    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'party_video_meta_box_nonce' ) ) return;
	    // if our current user can't edit this post, bail
	    if( !current_user_can( 'edit_post' ) ) return;
	    // now we can actually save the data
	    $allowed = array(
	    	'iframe' => array(
	    		'src' => array()
	    		)
	    	);
	    // Make sure your data is set before trying to save it
	    if( isset( $_POST['video_ID'] ) )
	        update_post_meta( $post_id, 'video_ID', wp_kses( $_POST['video_ID'], $allowed ) );
	}


