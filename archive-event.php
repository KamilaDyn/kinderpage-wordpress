<?php

get_header();
?>

<main class="wrapper">
    <section>
        <header class="bookmark container-fluid">
            <h1 class="text-center">Aktualności</h1>
        </header>
    </section>
    <hr class="d-none d-lg-block">
    <section class="all-events">
        <div class="container">
            <?php while (have_posts()) {
                the_post(); ?>
                <a href="<?php the_permalink() ?> ">
                    <article id="<?php echo get_the_ID(); ?>" class="event col-12">
                        <h2><?php the_title(); ?></h2>
                        <h3> <?php
                                $eventDate = new DateTime(get_field('event_date'));
                                echo  $eventDate->format('d.m.Y') . 'r';
                                ?> </h3>
                        <img class="d-none d-sm-block mr-3 float-left" style="max-width: 200px; max-height: 200px;" src="img/insurance.png" alt="cross">
                        <p> <?php echo wp_trim_words(get_the_content(), 100); ?></p>
                        <p><a class="text-primary" href="<?php the_permalink() ?>">Czytaj więcej</a></p>
                    </article>
                </a>
            <?php }
            echo paginate_links();
            ?>
        </div>

        <p class="text-center">Może zainteresują Państwa nasze poprzednie wydarzenia, możemy je dla Państwa zorganizować. Zapraszamy do zapoznania się z <a href="<?php echo site_url('/past-events'); ?>" class="text-primary"> poprzednimi wydarzeniami</a></p>
        <hr class="d-none d-lg-block">
    </section>





</main>

<?
get_footer();