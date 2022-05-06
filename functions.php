<?php

add_action( 'wp_enqueue_scripts', function() {

    $parenthandle = 'the-bootstrap-blog';

    $theme = wp_get_theme();

    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css',
        array(),
        $theme->parent()->get('Version')
    );

    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version')
    );
} );


add_filter('body_class', function($classes) {
    $classes[] = 'wp-embed-responsive';

    return $classes;
}, 999);


function wpb_author_info_box( $content ) {
  global $post;

  // Detect if it is a single post with a post author
  if ( is_single() && isset( $post->post_author ) ) {
    // Get author's display name
    $display_name = get_the_author_meta( 'display_name', $post->post_author );

    // If display name is not available then use nickname as display name
    if ( empty( $display_name ) )
    $display_name = get_the_author_meta( 'nickname', $post->post_author );

    // Get author's biographical information or description
    $user_description = get_the_author_meta( 'user_description', $post->post_author );

    // Get author's website URL
    $user_website = get_the_author_meta('url', $post->post_author);

    // Get link to the author archive page
    $user_posts = get_author_posts_url( get_the_author_meta( 'ID' , $post->post_author));

    $avatar_col = '<div class="col col-md-2 author-img">' . get_avatar( get_the_author_meta('user_email') , 90 ) . '</div>';

    if ( ! empty( $display_name ) )
    $author_details = '<h4 class="author_name">' . $display_name . '</h4>';

    if ( ! empty( $user_description ) )
    // Author avatar and bio
    $author_details .= '<p class="author_description">' . nl2br( $user_description ). '</p>';

    $author_details .= '<p class="author_links"><a href="'. $user_posts .'">View all posts by ' . $display_name . '</a>';

    // Check if author has a website in their profile
    if ( ! empty( $user_website ) ) {
      // Display author website link
      $author_details .= ' | <a href="' . $user_website .'" target="_blank" rel="nofollow">Website</a></p>';
      } else {
      // if there is no author website then just close the paragraph
      $author_details .= '</p>';
      }

    $bio_col = '<div class="col">' . $author_details .'</div>';

    // Pass all this info to post content
    $content = $content . '<div class="author-bio row" >' . $avatar_col . $bio_col . '</div>';
  }
  return $content;
}

// Add our function to the post content filter
add_action( 'the_content', 'wpb_author_info_box' );

// Allow HTML in author bio section
remove_filter('pre_user_description', 'wp_filter_kses');
