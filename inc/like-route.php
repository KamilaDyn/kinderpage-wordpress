<?php
add_action('rest_api_init', 'kindergardenLikeRoute');
function kindergardenLikeRoute()
{

    register_rest_route('kindergarden/v1', 'manageLike', array(
        'methods' => 'POST',
        'callback' => 'createLike'

    ));

    register_rest_route('kindergarden/v1', 'manageLike', array(
        'methods' => 'DELETE',
        'callback' => 'deleteLike'
    ));
}

function createLike($data)
{
    if (is_user_logged_in()) {
        $post = sanitize_text_field($data['postId']);
        $existQuery = new WP_Query(
            array(
                'author' => get_current_user_id(),
                'post_type' => 'like',
                'meta_query' => array(
                    'key' => 'polubione_posty_id',
                    'compare' => '=',
                    'value' => $post
                )
            )
        );
        if ($existQuery->found_post == 0 and get_post_type($post) == 'post') {
            return wp_insert_post(array(
                'post_type' => 'like',
                'post_status' => 'publish',
                'post_title' => 'our php like',
                'meta_input' => array(
                    'polubione_posty_id' => $post,
                )
            ));
        } else {
            die('Nieważny id posta');
        }
    } else {
        die(' Tylko zarejestrowany użytkownik');
    }
}

function deleteLike($data)
{
    $likeId = sanitize_text_field($data['like']);
    if (get_current_user_id() == get_post_field('post_author', $likeId) and get_post_type($likeId) == 'like') {

        return  wp_delete_post($likeId, true);
    } else {
        die('Nie masz uprawnień');
    }
}
