<?php
    add_action('init', 'create_PARTY_ARTICLES');
    function create_PARTY_ARTICLES() {
        register_post_type( 'party_articles',
            array(
                'labels' => array(
                    'name' => 'Party Articles',
                    'singular_name' => 'Party Article',
                    'add_new' => 'Add New Article',
                    'add_new_item' => 'Add New Article',
                    'edit' => 'Edit',
                    'edit_item' => 'Edit Article',
                    'new_item' => 'New Article',
                    'view' => 'View Articles',
                    'view_item' => 'View Article',
                    'search_items' => 'Search Articles',
                    'not_found' => 'No Article found',
                    'not_found_in_trash' => 'No Article found in Trash',    
                ),
                'public' => true,
                'menu_position' => 15,
                'supports' => array('title', 'editor', 'thumbnail'),
                'taxonomies' => array( '' ),
                'menu_icon' => 'dashicons-edit',
                'has_archive' => true
            )
        );
    }
    // end of create_PARTY_ARTICLES()
    add_action('init', 'create_PARTY_PLAYLIST');
    function create_PARTY_PLAYLIST() {
        register_post_type( 'party_playlist',
            array(
                'labels' => array(
                    'name' => 'Party Playlists',
                    'singular_name' => 'Party Playlist',
                    'add_new' => 'Add New Playlist',
                    'add_new_item' => 'Add New Playlist',
                    'edit' => 'Edit',
                    'edit_item' => 'Edit Playlist',
                    'new_item' => 'New Playlist',
                    'view' => 'View Playlist',
                    'view_item' => 'View Playlist',
                    'search_items' => 'Search Playlist',
                    'not_found' => 'No Playlist found',
                    'not_found_in_trash' => 'No Playlist found in Trash',    
                ),
                'public' => true,
                'menu_position' => 15,
                'supports' => array('title', 'editor', 'thumbnail'),
                'taxonomies' => array( '' ),
                'menu_icon' => 'dashicons-playlist-audio',
                'has_archive' => true
            )
        );
    }
    // end of create_PARTY_PLAYLIST()
    add_action('init', 'create_PARTY_INSTAGRAMS');
    function create_PARTY_INSTAGRAMS() {
        register_post_type( 'party_instagram',
            array(
                'labels' => array(
                    'name' => 'Instagram Photos',
                    'singular_name' => 'Party Instagram',
                    'add_new' => 'Add Instagram Photo',
                    'add_new_item' => 'Add New Instagram',
                    'edit' => 'Edit',
                    'edit_item' => 'Edit Instagram',
                    'new_item' => 'New Instagram',
                    'view' => 'View Instagram',
                    'view_item' => 'View Instagram',
                    'search_items' => 'Search Instagram',
                    'not_found' => 'No Instagram found',
                    'not_found_in_trash' => 'No Instagram found in Trash',    
                ),
                'public' => true,
                'menu_position' => 15,
                'supports' => array('title', 'editor', 'thumbnail'),
                'taxonomies' => array( '' ),
                'menu_icon' => 'dashicons-camera',
                'has_archive' => true
            )
        );
    }
    // end of create_PARTY_INSTAGRAMS()
    add_action('init', 'create_PARTY_VIDEO');
    function create_PARTY_VIDEO() {
        register_post_type( 'party_video',
            array(
                'labels' => array(
                    'name' => 'Party Videos',
                    'singular_name' => 'Party Video',
                    'add_new' => 'Add Party Video',
                    'add_new_item' => 'Add New Video',
                    'edit' => 'Edit',
                    'edit_item' => 'Edit Video',
                    'new_item' => 'New Video',
                    'view' => 'View Video',
                    'view_item' => 'View Video',
                    'search_items' => 'Search Party Video',
                    'not_found' => 'No Video found',
                    'not_found_in_trash' => 'No Video found in Trash',    
                ),
                'public' => true,
                'menu_position' => 15,
                'supports' => array('title', 'editor', 'thumbnail'),
                'taxonomies' => array( '' ),
                'menu_icon' => 'dashicons-video-alt2',
                'has_archive' => true
            )
        );
    }
    // end of create_PARTY_VIDEO()