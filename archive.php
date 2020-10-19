<?php

get_header();
?>


<main class="wrapper">
    <div class="jumbotron jumbotron-fluid h-50" style="background-image: url(<?php echo get_theme_file_uri('./images/pooh.jpg'); ?>)">
        <div class="container ">
            <h1 class="display-4"><?php if (is_category()) {
                                        echo 'kategoria: ';
                                        single_cat_title();
                                    };
                                    if (is_author()) {
                                        echo 'autor: ';
                                        the_author();
                                    }; ?></h1>
            <p class="lead"><?php the_archive_description(); ?></p>
        </div>
    </div>
    <section>
        <article class="about-us row justify-content-around ">
            <div class="about-container col-10 col-md-7 col-lg-8 text-justify ">
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
            </div>
        </article>
    </section>



</main>
<?
get_footer();