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
    <div class="about-us row justify-content-around ">
      <div class="about-conatiner col-10 col-md-7 col-lg-8 text-justify ">
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
                echo '<h4 class="pb-3">Nad naszym samopoczuciem i rozwojem czuwają:  </h4>';
              }
              ?>

              <ul>
                <?php


                while ($relatedTeachers->have_posts()) {
                  $relatedTeachers->the_post(); ?>
                  <li class="d-inline ">
                    <a href="<?php the_permalink(); ?>" class="teacher-card position-relative">
                      <img class="teacher-image mr-3 img-thumbnail" src="<?php the_post_thumbnail_url('teacherLand'); ?>" alt="zdjęcie: <?php the_title(); ?>">

                      <p class="teacher-name  position-absolute px-2"><?php the_title(); ?></p>

                    </a>
                    <?php
                    if (is_user_logged_in()) { ?>
                      <p>kontakt mail: <?php the_field('mail_nauczyciela'); ?> </p>
                    <?php } ?>
                  </li>
                <?php  }

                wp_reset_postdata();
                ?>
              </ul>
            </div>
            <?php
            if (is_user_logged_in()) { ?>
              <div class="col-12 d-lg-flex row">
                <div class="col-12 col-lg-6 mt-3">
                  <h4 class="pb-3">Lista Uczniów i dzień urodzin</h4>
                  <div><?php the_field('lista_uczniow'); ?></div>
                </div>
                <div class="col-12 col-lg-6 mt-3">
                  <h4>Lista rodziców i kontakt</h4>
                  <div><?php the_field('lista_rodzicow'); ?></div>
                </div>
              </div>
            <?php
            }
            ?>

            <div><?php echo get_the_excerpt();?></div>

          </article>

        </div>
      </div>

      <div class="up-date-kid col-12 col-md-4 col-lg-3 ">
        <div class="col-12 my-3 my-lg-4 text-center">
          <?php dynamic_sidebar('default-sidebar'); ?>
        </div>
      </div>
    </div>

  </section>
</main>
<?php
get_footer();

?>