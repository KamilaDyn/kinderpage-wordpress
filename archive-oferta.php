<!-- <?php
get_header();

?>
<div class="bookmark container-fluid">
    <h1 class="text-center">Wszystkie oferty</h1>
</div>
<section class="main">
    <?php

    while (have_posts()) {
        the_post() ?>

        <div class="about-conatiner col-10 col-md-7 col-lg-8 text-justify ">
            <p>
                Pragniemy z wykorzystaniem pedagogiki Marii Montessori dać szansę dziecku na rozwój swojej osoby według
                stworzonych przez siebie indywidualnych planów rozwojowych. W planach tych zapisane są jego możliwości,
                kompetencje i umiejętności, umożliwiające mu naukę samodzielną i efektywniejszą.</p>
            <p> <strong>W podstawowej ofercie naszego przedszkola znajduje się ciekawy program zajęć dodatkowych dla
                    wszystkich
                    dzieci niezależnie od grupy wiekowej:</strong></p>
            <ul>
                <li class="oferts-list"><i class="fas fa-arrow-circle-right"></i> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            </ul>
        </div>
    <?php
    }

    echo paginate_links();
    ?>
</section>


<?php
get_footer(); -->
