<?php get_header(); ?>


<main class="wrapper">
    <section>
        <div class="jumbotron jumbotron-fluid h-50" style="background-image: url(<?php echo get_theme_file_uri('./images/pooh.jpg'); ?>)">
            <div class="container ">
                <h1 class="display-4">Witaj na naszym blogu</h1>
                <p class="lead">Staramy się dzielić wiedzą na temat dzieci ich wychowania i nauki</p>
            </div>
        </div>
    </section>
    <section id="blog" class="my-4 px-3">
        <div class="container-fluid">

            <?php while (have_posts()) {
                the_post(); ?>
                <article class="blog-article col-12 col-md-10 my-md-6">
                    <h2 class="title text-center text-primary pb-3"><?php the_title(); ?></h2>
                    <div class="metabox bg-light">
                        <h5>Kategoria: <strong><?php the_category(', '); ?></strong> </h5>
                        <p class="text-secondary">Opublikowany przez: <?php the_author_posts_link(); ?> on <?php the_time('n.j.y') ?></p>
                    </div>
                    <p><?php the_content(); ?></p>
                </article>
                <hr class="d-none d-lg-block">
            <?php   }
            echo paginate_links();
            ?>

        </div>
    </section>


</main>



<?php get_footer();
