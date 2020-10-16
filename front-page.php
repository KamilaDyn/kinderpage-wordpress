<?php
get_header();

while (have_posts()) {
    the_post(); ?>
    <div class="jumbotron jumbotron-fluid" style="background-image: url(<?php echo get_theme_file_uri('./images/pooh.jpg'); ?>)">
        <div class="img-main container text-center">
            <h1 class=" mt-lg-5 mt-xl-0"><?php the_title() ?></h1>
            <p class="lead mt-md-2 mt-lg-5 "><q>Dziecko nie jest pustym naczyniem, nie zawdzięcza wszystkiego co wie nam,
                    którzy go tego nauczyliśmy. Nie,
                    dziecko jest budowniczym człowieka. Każdego człowieka na tym świecie uksztaltowało dziecko którym kiedyś
                    był.</q>
                <span style="color: #000; font-weight: bold; font-size: 1rem;">Maria Montessori</span>
            </p>

        </div>
    </div>

    <!--Karty z ofertą -->
    <div class="container-oferts ">
        <div class="flex-md-row flex-row d-flex flex-wrap justify-content-center align-items-around flex-lg-nowrap">
            <div class="card col-12 col-sm-5  col-lg-3  mx-1 mt-1 mt-lg-3" style="max-width: 300px;">
                <a href="o-przedszkolu/">
                    <img src="https://i.pinimg.com/564x/5a/14/c0/5a14c0d76bc98fc33a6782860807ac8a.jpg" class="card-img card-img-top mt-2 img-thumbnail" alt="little house">
                    <div class="card-body ">
                        <p class="card-text text-center">O przedszkolu</p>
                    </div>
                </a>
            </div>

            <div class="card col-12 col-sm-5 col-lg-3 col-xl-3  mx-1 mt-1 mt-lg-3" style="max-width: 300px;">
                <a href="<?php echo site_url('/oferta') ?>">
                    <img src="<?php echo get_theme_file_uri('./images/offer.png'); ?>" class=" card-img card-img-top mt-2 img-thumbnail" alt="little house">
                    <div class="card-body ">
                        <p class="card-text text-center ">Oferta</p>
                    </div>
                </a>
            </div>
            <div class="card col-12 col-sm-5 col-lg-3 col-xl-3  ,mx-1 mt-1  mt-md-2 mt-lg-3 " style="max-width: 300px;">
                <a href="<?php echo site_url('/grupy') ?>">
                    <img src="<?php echo get_theme_file_uri('./images/kids-3171905_640.png'); ?>" class="card-img card-img-top mt-2 img-thumbnail" alt="little house">
                    <div class="card-body ">
                        <p class="card-text text-center">Grupy</p>
                    </div>
                </a>
            </div>

            <div class="card col-12 col-sm-5 col-lg-3 col-xl-3   mx-1 mt-1  mt-md-2 mt-lg-3" style="max-width: 300px;">
                <a href="<?php echo site_url('/kadra') ?>">
                    <img src="<?php echo get_theme_file_uri('./images/team-2306543_640.jpg'); ?>" class="card-img mt-2 img-thumbnail" alt="little house">
                    <div class="card-body ">
                        <p class="card-text text-center ">Kadra</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

<?php }

get_footer();
?>