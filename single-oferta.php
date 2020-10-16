<?php
get_header();
while (have_post()) {
    the_post();
?>
    <div class="offert-container col-10 col-md-7 col-lg-8 text-justify ">
        <!-- <div class="offert-content"><?php the_content(); ?></div> -->
        pojedyńcza oferta
    </div>

<?php
}
get_footer();
