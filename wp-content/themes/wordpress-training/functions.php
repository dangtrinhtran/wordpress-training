<?php
    // create menu support for theme
if(function_exists('register_nav_menu')){
    register_nav_menus(
            array(
                'main_nav' => 'Main Navigation Menu'
            )
            
    );
}

    // khai bao thumbnail cho theme
if(function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

// excerpt de hien thi link continue reading
function new_excerpt_length($length){
    return 30;   
}
add_filter('excerpt_length','new_excerpt_length');
function new_excerpt_more($more){
    global $post;
    return "<a class='read_more' hreft='".get_permalink($post->ID)."'>Continue Reading</a>";
}
add_filter('excerpt_more','new_excerpt_more');

// đăng ký side bar
if(function_exists('register_sidebar')){
    register_sidebar( array(
        'name' => 'Sidebar',
        'id'   => 'sidebar',
        'description'   => 'These are widgets for the sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));
}
?>
