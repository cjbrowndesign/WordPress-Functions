//
// Misc Functions
//

//Page Slug Body Class
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
        $classes[] = $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

// Page Logged In/Out Body Class
function logged_in_filter( $classes ) {
    if( is_user_logged_in() ) {
        $classes[] = 'logged_in';
    } else {
        $classes[] = 'logged_out';
    }
    return $classes;
}
add_filter('body_class','logged_in_filter');

//Custom Excerpt Length
// -- example echo limit_words(get_the_excerpt(), '41');
function limit_words($string, $word_limit) {
    $words = explode(' ', $string);
    return implode(' ', array_slice($words, 0, $word_limit));
}

// Get Image
function get_img( $imgUrl, $imgAlt ) {
    $imgDir = get_template_directory_uri() . '/assets/images/' . $imgUrl;
    echo '<img src="' . $imgDir . '" alt="' . $imgAlt . '">';
}

// Get Image URL
function get_img_url( $imgURL ) {
    return get_template_directory_uri() . '/assets/images/' . $imgURL;
}
