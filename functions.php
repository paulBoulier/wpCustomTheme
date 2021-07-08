<?php
add_theme_support( "post-thumbnails" );
add_theme_support("custom-logo", [
    "height" => 72,
    "width" => 72
]);
add_theme_support( "title-tag" );

function the_logo_setup() {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    
    if ( has_custom_logo() ) {
        echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
    } else {
        echo '<h1>' . get_bloginfo('name') . '</h1>';
    }
}

function custom_menu_setup() {
    ?>
    <ul id="menu"><li><a href="/">Home</a></li><li><a href="/wp-admin/nav-menus.php">Set primary menu</a></li></ul>
    <?php
  }

function hook_the_button($param) {
    var_dump($param);
}

add_action("previous_posts_link", "hook_the_button");