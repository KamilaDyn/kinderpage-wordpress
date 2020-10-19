<?php
get_header();

?>

<main class="wrapper">
    <section class="header-section">
        <header class="bookmark container-fluid">
            <h1 class="text-center">Oferta: <?php the_title(); ?></h1>
        </header>
    </section>
    <section>
        <div class="container mt-3 mb-5">

            <?php

            while (have_posts()) {
                the_post();
            ?>
                <div class="offert-container col-10 col-md-7 col-lg-8 text-justify ">
                    <div class="offert-content"><?php the_content(); ?></div>
                </div>

            <?php
            }
            ?>
        </div>
    </section>
</main>
<hr class="d-none d-lg-block">

<?php
get_footer();
