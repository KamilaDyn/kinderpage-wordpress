<?php

add_action('rest_api_init', 'kindergardenRegisterSearch');

function kindergardenRegisterSearch()
{
    register_rest_route('kindergarden/v1', 'search', array(
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'kindergardenSearchResults'
    ));
}

function kindergardenSearchResults($data)
{
    $mainQuery = new WP_Query(array(
        'post_type' => array('post', 'page', 'event', 'grupy', 'oferta', 'kadra'),
        's' => sanitize_text_field($data['term'])
    ));

    $results = array(
        'generalInfo' => array(),
        'grupy' => array(),
        'oferty' => array(),
        'events' => array(),
        'kadra' => array()
    );

    while ($mainQuery->have_posts()) {
        $mainQuery->the_post();

        if (get_post_type() == 'post' or get_post_type() == 'page') {
            array_push($results['generalInfo'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'postType' => get_post_type(),
                'authorName' => get_the_author()
            ));
        }

        if (get_post_type() == 'grupy') {
            array_push($results['grupy'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),

            ));
        }

        if (get_post_type() == 'oferta') {
            array_push($results['oferty'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink()
            ));
        }

        if (get_post_type() == 'kadra') {
            array_push($results['kadra'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'image' => get_the_post_thumbnail_url(0, 'teacherSmall'),

            ));
        }

        if (get_post_type() == 'event') {
            $eventDate = new DateTime(get_field('event_date'));
            $description = null;
            if (has_excerpt()) {
                $description = get_the_excerpt();
            } else {
                $description = wp_trim_words(get_the_content(), 18);
            }

            array_push($results['events'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'date' => $eventDate->format('d/m/Y'),
                'description' => $description
            ));
        }
    }

    return $results;
}
