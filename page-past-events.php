<?php

get_header();
?>

<section class="main">
    <div class="bookmark container-fluid">
        <h1 class="text-center">Nasze poprzednie wydarzenia</h1>
    </div>
    <hr class="d-none d-lg-block">
    <div class="container">

        <?php
        $today = date('Ymd');
        $pastEvents = new WP_Query(array(
            'paged' => get_query_var('paged', 1),
            'post_type' => 'event',
            'meta_key' => 'event_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => array(
                array(
                    'key' => 'event_date',
                    'compare' => '<',
                    'value' => $today,
                    'type' => 'numeric',
                )
            )
        ));
        while ($pastEvents->have_posts()) {
            $pastEvents->the_post(); ?>
            <a href="<?php the_permalink() ?> ">
                <div id="<?php echo get_the_ID(); ?>" class="event col-12">
                    <h2><?php the_title(); ?></h2>
                    <img class="d-none d-sm-block mr-3 float-left" style="max-width: 200px; max-height: 200px;" src="<?php the_post_thumbnail_url('eventsPictureSmall'); ?>" alt="zdjecie <?php the_title(); ?>">
                    <h3> <?php
                            $eventDate = new DateTime(get_field('event_date'));
                            echo  $eventDate->format('d.m.Y') . 'r';
                            ?> </h3>

                    <p> <?php echo wp_trim_words(get_the_content(), 100); ?></p>
                    <p><a class="text-primary" href="<?php the_permalink() ?>">Czytaj więcej</a></p>
                </div>
            </a>
        <?php } ?>


        <?php
        echo  paginate_links(array(
            'total' => $pastEvents->max_num_pages,
        )); ?>
    </div>
    <hr class="d-none d-lg-block">

    <!-- aktualnośći slides-->
    <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-inner">
                <h2 class="text-center py-3">Zobacz nadchodzące wydarzenia</h2>
                <?php
                $today = date('Ymd');
                $homepageEvents = new WP_Query(array(
                    'post_per_page' => -1,
                    'post_type' => 'event',
                    'meta_key' => 'event_date',
                    'orderby' => 'meta_value_num',
                    'order' => 'ASC',
                    'meta_query' => array(
                        array(
                            'key' => 'event_date',
                            'compare' => '>=',
                            'value' => $today,
                            'type' => 'numeric',
                        )
                    )
                ));

                while ($homepageEvents->have_posts()) {
                    $homepageEvents->the_post(); ?>
                    <?php $active_class = (0 === $homepageEvents->current_post) ? ' active' : '';  ?>

                    <div id="<?php echo get_the_ID(); ?>" class="carousel-item<?php echo esc_attr($active_class); ?>">
                        <img class="img-slide col-12 col-md-5 d-block d-sm-none d-md-inline-block mt-md-4 mt-lg-3 mt-xl-0 mb-3 mb-lg-0 align-top" src="<?php the_post_thumbnail_url('eventsPictureMedium'); ?>" alt="First slide">
                        <a href="<?php the_permalink(); ?>" class="event">
                            <div class="event d-block col-12 col-md-6 d-md-inline-block mb-5 mt-sm-3 mb-md-5 text-center">
                                <h4 class="mt-md-3 mt-lg-5"><?php the_title(); ?></h4>
                                <h3> <?php
                                        $eventDate = new DateTime(get_field('event_date'));
                                        echo  $eventDate->format('d.m.Y') . 'r';
                                        ?> </h3>
                                <p> <?php if (has_excerpt()) {
                                        the_excerpt();
                                    } else {
                                        echo wp_trim_words(get_the_content(), 20);
                                    }  ?></p>

                            </div>
                        </a>
                    </div>
                <?php  }
                ?>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- end of slides -->
</section>

<?php
get_footer();
