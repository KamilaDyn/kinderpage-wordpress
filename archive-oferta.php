<?php get_header();
?>
<main class="wrapper">
    <section class="mb-5">
        <header class="bookmark container-fluid">
            <h1 class="text-center">Oferta dla Paśtwa dzieci</h1>
        </header>
    </section>
    <section class="mb-5">
        <!--oferta-->
        <div class="offer-container col-12 col-md-10 col-lg-8 text-justify m-auto ">
            <p>
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
        </div>


    </section>
</main>
<hr class="d-none d-lg-block">

<?php
get_footer();
