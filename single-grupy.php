<?php

get_header();

?>
<main class="wrapper">
    <section class="header-section">
        <header class="bookmark container-fluid">
            <h1 class="text-center">Grupa: <?php the_title() ?></h1>
        </header>
    </section>
    <section class="post-section">
        <div class="col-10 m-auto mb-5">
            <div class="metabox bg-light">
                <p>Wróć do: <a class="metabox__blog-home-link" href="<?php echo site_url('/o-przedszkolu/grupy') ?>">Grupy</a><span class="metabox__main"><?php the_title(); ?></span></p>
            </div>
            <div class="container mt-3 mb-5">

                <article>
                    <p><?php the_content(); ?></p>
                    <div>
                        <?php $relatedTeachers = new WP_Query(array(
                            'post_per_page' => -1,
                            'post_type' => 'kadra',
                            'orderby' => 'title',
                            'order' => 'ASC',
                            'meta_query' => array(
                                array(
                                    'key' => 'powiazane_grupy',
                                    'compare' => 'LIKE',
                                    'value' => '"' . get_the_ID() . '"',
                                )
                            )
                        ));
                        if ($relatedTeachers->have_posts()) {
                            echo '<h4 class="pb-3">Nauczyciele w grupie' . get_the_title() . ' </h4>';
                        }
                        ?>

                        <ul>
                            <?php
                            $relatedTeachers = new WP_Query(array(
                                'post_per_page' => -1,
                                'post_type' => 'kadra',
                                'orderby' => 'title',
                                'order' => 'ASC',
                                'meta_query' => array(
                                    array(
                                        'key' => 'powiazane_grupy',
                                        'compare' => 'LIKE',
                                        'value' => '"' . get_the_ID() . '"',
                                    )
                                )
                            ));

                            while ($relatedTeachers->have_posts()) {
                                $relatedTeachers->the_post(); ?>
                                <li class="d-inline ">
                                    <a href="<?php the_permalink(); ?>" class="teacher-card position-relative">
                                        <img class="teacher-image mr-3 img-thumbnail" src="<?php the_post_thumbnail_url('teacherLand'); ?>" alt="zdjęcie: <?php the_title(); ?>">

                                        <p class="teacher-name  position-absolute px-2"><?php the_title(); ?></p>

                                    </a>
                                </li>
                            <?php  }

                            wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                    <div>Może galeria...?</div>
                </article>

            </div>
        </div>

    </section>
</main>
<hr class="d-none d-lg-block">
<?php
get_footer();

?>