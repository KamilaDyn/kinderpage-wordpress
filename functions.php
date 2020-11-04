<?php


require get_theme_file_path('/inc/search-route.php');
require get_theme_file_path('/inc/like-route.php');

require get_theme_file_path('/inc/widgets.php');
/* add style and scripts to website */
function kindergarden_files()
{
    wp_enqueue_style('bootstrap',  '//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome',  get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Pacifico&display=swap', array(), null);
    wp_enqueue_style('my-style', get_template_directory_uri() . '/style.min.css');
    // wp_enqueue_script('bootstrap-js', '//code.jquery.com/jquery-3.3.1.slim.min.js', NULL, '1.0', true);
    wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/js/jquery-3.5.1.min.js', array('jquery'), false, true);
    wp_enqueue_script('bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array(), false, true);
    // wp_enqueue_script('custom-script',  get_theme_file_uri('/js/scripts.js'),  array('jquery'));
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/bundle/bundle.js', array('jquery'), false, true);

    wp_localize_script('custom-script', 'kindergardenData', array(
        'root_url' => get_site_url(),
        'nonce' => wp_create_nonce('wp_rest')
    ));
}
add_action('wp_enqueue_scripts', 'kindergarden_files');

add_filter('style_loader_tag', 'my_style_loader_tag_filter', 10, 2);

function my_style_loader_tag_filter($html, $handle)
{
    if ($handle === 'google-fonts') {
        return str_replace("rel='stylesheet'", "rel='preload' as='font' type='font/woff2' crossorigin='anonymous'", $html);
    }
    return $html;
}

/* add features to website*/
function kindergarden_features()
{
    register_nav_menu('footerLocationOne', 'Footer Location One');
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


/* redirect subscriber account out of admin daschboard onto frontpage */
function redirectSubscriberToFront()
{
    $currentUser = wp_get_current_user();
    if (count($currentUser->roles) == 1 and  $currentUser->roles[0] == 'subscriber') {
        wp_redirect(site_url('/'));
        exit;
    }
}
add_action('admin_init', 'redirectSubscriberToFront');


/* hide admin bar */

function noSubsAdminBar()
{
    $currentUser = wp_get_current_user();
    if (count($currentUser->roles) == 1 and  $currentUser->roles[0] == 'subscriber') {
        show_admin_bar(false);
    }
}


add_action('admin_init', 'noSubsAdminBar');


/* customize login page */
function ourheaderurl()
{
    return esc_url(site_url('/'));
}
add_filter('login_headerurl', 'ourheaderurl');


/*change login style */
function ourloginCSS()
{

    wp_enqueue_style('my-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Pacifico&display=swap');
}
add_action('login_enqueue_scripts', 'ourLoginCSS');


/*change login headline title */

function ourLoginTitle()
{
    return get_bloginfo('name');
}

add_filter('login_headertitle', 'ourLoginTitle');


/* register sidebar*/

function my_register_sidebars()
{
    $sidebar_list = array(
        array(
            'name'          => __('Sidebar-oferta', 'Kindergarden'),
            'id'            => 'offers-sidebar',
            'description' => 'Elementy dla sidebar-1',
        ),
        array(
            'name'          => __('siedebar-aktualności', 'Kindergarden'),
            'id'            => 'events-sidebar',
            'description' => 'Elementy dla sidebar wyświetlanego w aktualnościach',
        ),
        array(
            'name'          => __('Siedebar-default', 'Kindergarden'),
            'id'            => 'default-sidebar',
            'description' => 'Elementy dla sidebar 3',
        )
    );


    $sidebar_options = array(

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    );
    foreach ($sidebar_list as $sidebar) {
        register_sidebar(array_merge($sidebar, $sidebar_options));
    }
}

add_action('widgets_init', 'my_register_sidebars');
