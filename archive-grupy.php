<?php
get_header();

?>

<main class="wrapper">
    <section>
        <header>
            <div class="bookmark container-fluid">
                <h1 class="text-center">Grupy przedszkolaków</h1>
            </div>
        </header>
    </section>
    <section class="all-offers my-3 mx-3">
        <!--Grupy-->
        <div class="about-us row justify-content-around ">
            <div class="about-conatiner col-10 col-md-7 col-lg-8 text-justify ">
                <div class="flex-md-row flex-row d-flex flex-wrap justify-content-center align-items-around flex-lg-nowrap mt-lg-5">
                    <?php while (have_posts()) {
                        the_post(); ?>

                        <div class="card col-12 col-sm-5  col-lg-4  mx-1 mt-1 mt-lg-3" style="max-width: 300px;">
                            <a href="<?php the_permalink(); ?>">
                                <img src="../o-przedszkolu/images/tiger.jpg" class="card-img card-img-top mt-2 img-thumbnail" alt="tygrysek">
                                <div class="card-body ">
                                    <p class="text-center group-link"><?php the_title(); ?></p>
                                </div>
                            </a>
                        </div>
                    <?php   }  ?>
                </div>
            </div>
            <div class="up-date-kid col-12 col-md-4 col-lg-3">
                <div class="col-12 my-3 my-lg-4 text-center">
                    <h4>Aktualne wydarzenia</h4>
                    <ul class="p-2">
                        <?php
                        $today = date('Ymd');
                        $homepageEvents = new WP_Query(array(
                            'post_per_page' => -1,
                            'post_type' => 'event',
                            'meta_key' => 'event_date',
                            'orderby' => 'meta_value_num',
                            'order' => 'ASC',
                            'meta_query' => array(
                                array(
                                    'key' => 'event_date',
                                    'compare' => '>=',
                                    'value' => $today,
                                    'type' => 'numeric',
                                )
                            )
                        ));

                        while ($homepageEvents->have_posts()) {
                            $homepageEvents->the_post(); ?>

                            <li class="up-date-link"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?> <br>
                                    <span class="text-primary"> <?php
                                                                $eventDate = new DateTime(get_field('event_date'));
                                                                echo  $eventDate->format('d.m.Y') . 'r';
                                                                ?>
                                </a>
                                </span> </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-12 text-center my-3 my-lg-4">
                    <h4 style="color:#ee7919">Praca</h4>
                    <p class="up-date-link"> <a href="../Aktualności/aktualnosci.html#work">Dołącz do naszego zespołu!!!</a></p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer();
