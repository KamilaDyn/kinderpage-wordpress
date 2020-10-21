<?php

get_header();

?>
<main class="wrapper">
    <section class="header-section">
        <header class="bookmark container-fluid">
            <h1 class="text-center"><?php the_field('rola_pracownika') ?> : <?php the_title(); ?></h1>
        </header>
    </section>
    <section class="post-section">
        <div class="col-10 m-auto mb-5">
            <div class="metabox bg-light">
                <p>Wróć do: <a class="metabox__blog-home-link" href="<?php echo site_url('/o-przedszkolu/kadra') ?>">Kadra przedszkola</a><span class="metabox__main"><?php the_title(); ?></span></p>
            </div>
            <div class="container mt-3 mb-5">
                <?php
                while (have_posts()) {
                    the_post(); ?>
                    <article>
                        <h2 class="pt-4 text-center text-primary"><?php the_title(); ?></h2>
                        <p class="mt-3 text-justify"> <?php the_content(); ?></p>
                    </article>
                <?php }
                ?>
            </div>
        </div>
    </section>
</main>
<hr class="d-none d-lg-block">
<?php
get_footer();

?>