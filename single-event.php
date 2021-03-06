<?php

get_header();

?>
<main class="wrapper">
    <section class="header-section">
        <header class="bookmark container-fluid">
            <h1 class="text-center">Nadchodzące wydarzenie</h1>
        </header>
    </section>
    <section class="post-section">
        <div class="d-lg-flex">
            <div class="col-12 col-lg-8 mx-3 m-auto mb-5">
                <div class="metabox bg-light">
                    <p>Wróć do: <a class="metabox__blog-home-link" href="<?php echo site_url('/events') ?>">Aktualności</a><span class="metabox__main"><?php the_title(); ?></span></p>
                </div>
                <div class="container mt-3 mb-5">
                    <?php
                    while (have_posts()) {
                        the_post(); ?>
                        <article>
                            <h2 class="pt-4 text-center text-primary"><?php the_title(); ?></h2>
                            <h3 class="text-center pb-3"> <?php
                                                            $eventDate = new DateTime(get_field('event_date'));
                                                            echo  $eventDate->format('d.m.Y') . 'r'; ?> </h3>
                            <p class="mt-3 text-justify"> <?php the_content(); ?></p>
                        </article>
                    <?php }
                    ?>
                </div>
                <div class="col text-center mt-3"><a href="<?php echo site_url('/events'); ?>">
                        <button type="button" class="btn btn-primary btn-lg btn-hover btn-default">Aktualności</button>
                    </a>
                </div>
            </div>


            <div class="sidebar col-12  col-lg-3 ">
                <div class="col-10 col-lg-12 my-3 my-lg-4 text-center mx-auto">
                    <?php dynamic_sidebar('events-sidebar'); ?>
                </div>
            </div>
        </div>
    </section>
</main>
<hr class="d-none d-lg-block">
<?php
get_footer();

?>