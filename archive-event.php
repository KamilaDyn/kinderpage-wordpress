<?php

get_header();
?>

<main class="wrapper">
    <section>
        <header class="bookmark container-fluid">
            <h1 class="text-center">Aktualności</h1>
        </header>
    </section>
    <section class="all-events my-3 px-3">
        <div class="container-fluid">
            <?php while (have_posts()) {
                the_post(); ?>
                <a href="<?php the_permalink() ?> ">
                    <article id="<?php echo get_the_ID(); ?>" class="event col-12 col-md-10 my-md-6 p-4">
                        <h2><?php the_title(); ?></h2>
                        <img class="d-none d-sm-block mr-3 float-left" style="max-width: 200px; max-height: 200px;" src="<?php the_post_thumbnail_url('eventsPictureMedium'); ?>" alt="obraz: <?php the_title() ?>">
                        <h3> <?php
                                $eventDate = new DateTime(get_field('event_date'));
                                echo  $eventDate->format('d.m.Y') . 'r';
                                ?> </h3>

                        <p> <?php echo wp_trim_words(get_the_content(), 100); ?></p>
                        <p><a class="text-primary" href="<?php the_permalink() ?>">Czytaj więcej</a></p>
                    </article>
                </a>
            <?php }
            echo paginate_links();
            ?>
        </div>

        <p class="text-center pb-5">Może zainteresują Państwa nasze poprzednie wydarzenia, możemy je dla Państwa zorganizować. Zapraszamy do zapoznania się z <a href="<?php echo site_url('/past-events'); ?>" class="text-primary"> poprzednimi wydarzeniami</a></p>
        <hr class="d-none d-lg-block">
    </section>





</main>

<?
get_footer();