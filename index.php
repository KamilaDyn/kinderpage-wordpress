<?php get_header(); ?>


<section class="main">


    <!--Why we-->
    <div id="blog" class="container-fluid">
        <?php while (have_posts()) {
            the_post(); ?>
            <h2 class="title text-center "><?php the_title() ?></h2>
            <div class="metabox">
                <p>Opublikowany przez: <?php the_author_posts_link(); ?> on <?php the_time('n.j.y') ?></p>
            </div>
            <p><?php the_content(); ?></p>

        <?php   }
        echo paginate_links();
        ?>



    </div>


</section>



<?php get_footer();
