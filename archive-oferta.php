<?php get_header();
?>
<main class="wrapper">
    <section>
        <header class="bookmark container-fluid">
            <h1 class="text-center">Oferta dla Paśtwa dzieci</h1>
        </header>
    </section>
    <section class="all-offers my-3 mx-3">
        <!--oferta-->

        <div class="container-fluid  ">
            <article class="blog-article col-12 col-md-10 my-md-6">
                <p class="text-justify">
                    Pragniemy z wykorzystaniem pedagogiki Marii Montessori dać szansę dziecku na rozwój swojej osoby według
                    stworzonych przez siebie indywidualnych planów rozwojowych. W planach tych zapisane są jego możliwości,
                    kompetencje i umiejętności, umożliwiające mu naukę samodzielną i efektywniejszą.</p>
                <p> <strong>W podstawowej ofercie naszego przedszkola znajduje się ciekawy program zajęć dodatkowych dla
                        wszystkich
                        dzieci niezależnie od grupy wiekowej:</strong></p>
                <ul>
                    <?php while (have_posts()) {
                        the_post(); ?>

                        <li class="offers-list"><a href="<?php the_permalink(); ?>"><i class="fas fa-arrow-circle-right"></i> <?php the_title(); ?></li></a>

                    <?php  } ?>
                </ul>
            </article>
        </div>


    </section>
</main>
<hr class="d-none d-lg-block">

<?php
get_footer();
