<?php


require get_theme_file_path('/inc/search-route.php');
/* add style and scripts to website */
function kindergarden_files()
{
    wp_enqueue_style('bootstrap',  '//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.7.2/css/all.css');
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Pacifico&display=swap');
    wp_enqueue_style('my-style', get_template_directory_uri() . '/style.css');
    // wp_enqueue_script('bootstrap-js', '//code.jquery.com/jquery-3.3.1.slim.min.js', NULL, '1.0', true);
    wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/js/jquery-3.5.1.min.js', array('jquery'));
    wp_enqueue_script('bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js');

    wp_enqueue_script('custom-script', get_theme_file_uri('/js/scripts.js'),  array('jquery'));
    // wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'));

    wp_localize_script('custom-script', 'kindergadernData', array(
        'root_url' => get_site_url(),
    ));
}
add_action('wp_enqueue_scripts', 'kindergarden_files');

/* add features to website*/
function kindergarden_features()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('teacherSamall', 100, 70, true);
    add_image_size('teacherLand', 400, 260, true);
    add_image_size('teacherPortrait', 380, 550, true);
    add_image_size('eventsPictureSmall', 250, 150, true);
    add_image_size('eventsPictureMedium', 350, 250, true);
    add_image_size('groupPicturePortrait', 100, 250);
}

add_action('after_setup_theme', 'kindergarden_features');

/* display posts per page */

function kindergarden_adjust_queries($query)
{

    if (!is_admin() and is_post_type_archive('oferta') and is_main_query()) {
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
        $query->set('posts_per_page', -1);
    }
    if (!is_admin() and is_post_type_archive('event') and $query->is_main_query()) {
        $today = date('Ymd');
        $query->set('meta_key', 'event_date');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
        $query->set('meta_query', array(
            array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
            )
        ));
    }
}

add_action('pre_get_posts', 'kindergarden_adjust_queries');


function kindergarden_custom_rest()
{
    register_rest_field('post', 'authorName', array(
        'get_callback' => function () {
            return get_the_author();
        },
    ));
}

add_action('rest_api_init', 'kindergarden_custom_rest');
