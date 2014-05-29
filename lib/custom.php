<?php
// Redirect To Post When Search Query Returns Single Result, from http://wpsnipp.com/index.php/functions-php/redirect-to-post-when-search-query-returns-single-result/
add_action('template_redirect', 'single_result');  
function single_result() {  
    if (is_search()) {  
        global $wp_query;  
        if ($wp_query->post_count == 1) {  
            wp_redirect( get_permalink( $wp_query->posts['0']->ID ) );  
        }  
    }  
}

// Display Post Thumbnail Also In Edit Post and Page Overview, from http://wpengineer.com/1960/display-post-thumbnail-post-page-overview/
if ( !function_exists('fb_AddThumbColumn') && function_exists('add_theme_support') ) {
// for post and page
add_theme_support('post-thumbnails', array( 'post', 'page' ) );
function fb_AddThumbColumn($cols) {
    $cols['thumbnail'] = __('Thumbnail');
    return $cols;
}

function fb_AddThumbValue($column_name, $post_id) {
    $width = (int) 35;
    $height = (int) 35;
    if ( 'thumbnail' == $column_name ) {
        // thumbnail of WP 2.9
        $thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );
          
        // image from gallery
        $attachments = get_children( array('post_parent' => $post_id, 'post_type' => 'attachment', 'post_mime_type' => 'image') );
        
        if ($thumbnail_id)
            $thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
        elseif ($attachments) {
            foreach ( $attachments as $attachment_id => $attachment ) {
            $thumb = wp_get_attachment_image( $attachment_id, array($width, $height), true );
        }
    }
    if ( isset($thumb) && $thumb ) { echo $thumb; }
    else { echo __('None'); }
    }
}

// for posts
add_filter( 'manage_posts_columns', 'fb_AddThumbColumn' );
add_action( 'manage_posts_custom_column', 'fb_AddThumbValue', 10, 2 );

// for pages
add_filter( 'manage_pages_columns', 'fb_AddThumbColumn' );
add_action( 'manage_pages_custom_column', 'fb_AddThumbValue', 10, 2 );
}

// Change default 'enter title here' within post title input field, from http://wpsnipp.com/index.php/functions-php/chnage-default-enter-title-here-text-within-post-title-input-field/
function title_text_input( $title ){
     return $title = 'Title: Recommend max of 60 characters';
}
add_filter( 'enter_title_here', 'title_text_input' );
