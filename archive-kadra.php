<?php get_header();
?>
<main class="wrapper">
    <section>
        <header>
            <div class="bookmark container-fluid">
                <h1 class="text-center">Kadra przedszkola</h1>
            </div>
        </header>
    </section>

    <section class="all-offers my-3 mx-3">
        <div class="about-us column">
            <h4 class="team-text text-center py-2">Nad prawidłowym funkcjonowaniem całej placówki czuwa nasz zespół </h4>
            <div class="team my-1 py-1 mb-md-2 py-md-3 px-5 row justify-content-around align-items-center">

                <?php $relatedTeachers = new WP_Query(array(
                    'post_per_page' => -1,
                    'post_type' => 'kadra',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'meta_query' => array(
                        array(
                            'key' => 'nazwa_grupy',
                            'compare' => 'LIKE',
                            'value' => 'Dyrekcja',
                        )
                    )
                ));

                while ($relatedTeachers->have_posts()) {
                    $relatedTeachers->the_post();
                ?>

                    <div class="card col-6 col-md-4 col-lg-3 mb-2" style="width: 18rem;">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url('teacherPortrait'); ?>" class="card-img-top img-thumbnail" alt="kot">
                            <div class="card-body">
                                <p class="text-center"><strong><?php the_title(); ?></strong></p>
                                <p class="text-center"><?php the_field('rola_pracownika'); ?></p>
                            </div>
                        </a>
                    </div>

                <?php } ?>


            </div>

            <div class="col-12 my-1 py-1 mb-md-1 py-md-2 px-3 text-justify ">
                <p>Kadra Niepublicznego Przedszkola „Kubusiowe Przedszkole” to zespół kreatywnych nauczycielek otwartych na
                    potrzeby Państwa dzieci. Pracujemy według sprawdzonych programów nauczania oraz metod wychowawczych,
                    korzystamy również z nowatorskich osiągnięć dydaktycznych aby zapewnić wszechstronny rozwój Państwa dzieci.
                </p>
            </div>
            <div class="col-12 my-1 py-1 mb-md-1 py-md-2 px-3 text-justify ">
                <h4 class="team-text text-center py-2">Ciepłą i życzliwą codzienną atmosferę zapewniają </h4>
            </div>

            <div class="team my-1 py-1 mb-md-2 py-md-3px-5 row justify-content-around align-items-center">
                <div class="col-12 py-3">
                    <h3 style="color: #e52121">Grupa "Tygryski"</h3>
                </div>
                <?php $relatedTeachers = new WP_Query(array(
                    'post_per_page' => -1,
                    'post_type' => 'kadra',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'meta_query' => array(
                        array(
                            'key' => 'nazwa_grupy',
                            'compare' => 'LIKE',
                            'value' => 'Tygryski',
                        )
                    )
                ));

                while ($relatedTeachers->have_posts()) {
                    $relatedTeachers->the_post();
                ?>

                    <div class="card col-6 col-md-4 col-lg-3 mb-2" style="width: 18rem;">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url('teacherPortrait'); ?>" class="card-img-top img-thumbnail" alt="kot">
                            <div class="card-body">
                                <p class="text-center"><strong><?php the_title(); ?></strong></p>
                                <p class="text-center"><?php the_field('rola_pracownika'); ?></p>
                            </div>
                        </a>
                    </div>

                <?php } ?>

            </div>

            <div class="team my-1 py-1 mb-md-2 py-md-3 px-5 row justify-content-around align-items-center">
                <div class="col-12 py-3">
                    <h3 style="color: #e52121">Grupa "Kaangurki"</h3>
                </div>
                <?php $relatedTeachers = new WP_Query(array(
                    'post_per_page' => -1,
                    'post_type' => 'kadra',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'meta_query' => array(
                        array(
                            'key' => 'nazwa_grupy',
                            'compare' => 'LIKE',
                            'value' => 'Kangurki',
                        )
                    )
                ));

                while ($relatedTeachers->have_posts()) {
                    $relatedTeachers->the_post();
                ?>
                    <div class="card col-6 col-md-4 col-lg-3 mb-2" style="width: 18rem;">
                        <a href="<? the_permalink();?>">
                            <img src="<?php the_post_thumbnail_url('teacherPortrait'); ?>" class="card-img-top img-thumbnail" alt="kot">
                            <div class="card-body">
                                <p class="text-center"><strong><?php the_title(); ?></strong></p>
                                <p class="text-center"><?php the_field('rola_pracownika'); ?></p>
                            </div>
                        </a>
                    </div>
                <?php } ?>

            </div>

            <div class="team my-1 py-1 mb-md-2 py-md-3 px-5 row justify-content-around align-items-center">
                <div class="col-12 py-3">
                    <h3 style="color: #e52121">Grupa "Puchatki"</h3>
                </div>
                <?php $relatedTeachers = new WP_Query(array(
                    'post_per_page' => -1,
                    'post_type' => 'kadra',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'meta_query' => array(
                        array(
                            'key' => 'nazwa_grupy',
                            'compare' => 'LIKE',
                            'value' => 'Puchatki',
                        )
                    )
                ));

                while ($relatedTeachers->have_posts()) {
                    $relatedTeachers->the_post();
                ?>
                    <div class="card col-6 col-md-4 col-lg-3 mb-2" style="width: 18rem;">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url('teacherPortrait'); ?>" class="card-img-top img-thumbnail" alt="kot">
                            <div class="card-body">
                                <p class="text-center"><strong><?php the_title(); ?></strong></p>
                                <p class="text-center"><?php the_field('rola_pracownika'); ?></p>
                            </div>
                        </a>
                    </div>
                <?php } ?>

            </div>

            <div class="team my-1 py-1 mb-md-5 py-md-5 px-5 row justify-content-around align-items-center">
                <div class="col-12 py-3">
                    <h3 style="color: #e52121">Obsługa</h3>
                </div>
                <?php $relatedTeachers = new WP_Query(array(
                    'post_per_page' => -1,
                    'post_type' => 'kadra',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'meta_query' => array(
                        array(
                            'key' => 'nazwa_grupy',
                            'compare' => 'LIKE',
                            'value' => 'Obsługa',
                        )
                    )
                ));

                while ($relatedTeachers->have_posts()) {
                    $relatedTeachers->the_post();
                ?>
                    <div class="card col-6 col-md-4 col-lg-3 mb-2" style="width: 18rem;">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url('teacherPortrait'); ?>" class="card-img-top img-thumbnail" alt="kot">
                            <div class="card-body">
                                <p class="text-center"><strong><?php the_title(); ?></strong></p>
                                <p class="text-center"><?php the_field('rola_pracownika'); ?></p>
                            </div>
                        </a>
                    </div>
                <?php } ?>



            </div>
        </div>



    </section>
</main>

<?php get_footer();
