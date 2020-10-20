<?php
get_header();

?>
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
<main>
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
                <a href="<?php echo site_url('/o-przedszkolu/0-przedszkolu/oferta') ?>">
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

    <hr class="d-none d-lg-block">
    <!--Why we-->
    <div id="why-we" class="container-fluid">
        <h2 class="title text-center ">Dlaczego My?</h2>
        <h3 class="under-title text-center pb-2 pb-md-3">Pedegogika Marii Montessori - kierujemy się między innymi
            poniższymi
            zasadami:</h3>
        <div class="row ">

            <div class="description col-12  col-md-6 my-1 my-md-2">
                <h4 class="pb-1 pb-md-3">Swobodny wybór</h4>
                <p>Reguła wolnego wyboru zajęć „swobodna praca”. W obrębie przygotowanego środowiska dziecko wybiera sobie
                    przedmiot działań i samo ustala tempo i czas uczenia się oraz stopień trudności. Dziecko również ma
                    możliwość wyboru partnera do swojej pracy, kieruje swoim uczeniem się oraz działaniem. Otoczenie dziecka
                    jest tak zaaranżowane, że ma ciekawe propozycje poznawcze odpowiednie dla fazy rozwoju dziecka. Zaspokajamy
                    potrzeby rozwojowe i poznawcze co ułatwia wszechstronny rozwój dziecka. </p>
            </div>
            <div class="description col-12 col-md-6 my-1 my-md-2">
                <h4 class="pb-1 pb-md-3">Izolowanie trudności</h4>
                <p>Jeśli dziecko pracuje np. z niebieską wieżą po to, aby poznać lub uporządkować znane już sobie pojęcia
                    związane z wielkością (duży-mały, mniejszy niż- większy-niż, duży-większy-największy) ma do dyspozycji:
                    <br>
                    Nauczyciela, który wie jak i kiedy pomóc. <br>
                    Niebieską wieżę (która jest niebieska). <br>
                    W takim przypadku dziecko nie zajmuje się kolorami ponieważ do tego służy inny materiał -tabliczka z
                    kolorami. Również nie zajmuje się innymi właściwościami jak długość grubość itp.
                </p>
            </div>

            <div class="description col-12 col-md-6 my-1 my-md-2">
                <h4 class="pb-3">Zasada ograniczenia</h4>
                <p>pedagogika Montessori nie jest ani metodą partnerską, ani bezstresową. Dzieci nie mogą robić tego co chcą
                    i nie są partnerami nauczyciela. Ograniczeniu, regułom i zasadom postępowania, podlegają wszystkie elementy
                    życia grupy. Metoda Montessori jest metodą bez represyjną, dzieci robią to, co je interesuje i co nie
                    przeszkadza innym. Dzieci nie są poddawane presji wykonania czynności, której nie chcą robić. </p>
            </div>
            <div class="description col-12 col-md-6 my-1 my-md-2">
                <h4 class="pb-3">Zasada transferu</h4>
                <p>Materiały Montessori są najpełniejszym zestawem pomocy dydaktycznej. Każdy materiał to „ogniwo”, logicznie
                    powiązany w długi „łańcuch”. Każde „ogniwo” zawiera z sobie cechy materiału poprzednio wprowadzonego oraz
                    dodatkowa nowa cecha. Informacje, kompetencje, umiejętności opanowane podczas pracy z materiałem dziecko
                    następnie przenosi na otoczenie. Przenoszenie cech w obrębie materiału i przenoszenie umiejętności na
                    otaczające dziecko środowisko, to właśnie <strong>zasada transferu</strong>.</p>
            </div>
            <div class="description col-12 col-md-6 my-1 my-md-2">
                <h4 class="pb-3">Własne działanie i powtarzanie</h4>
                <p>W nabywaniu nowych umiejętności ważne jest intensywne zwrócenie się dziecka ku określonej dziedzinie
                    ludzkich działań, a wraz z tym fenomen powtarzania. Założeniem jest, że dziecko rozwija się zgodnie z
                    programem wyznaczonym własnymi zainteresowaniami, potrzebami, możliwościami intelektualnymi, fizycznymi,
                    itp. Jeżeli ma potrzebę powtarzania czynności - akceptujemy to.</p>
            </div>
            <div class="description col-12 col-md-6 my-1 my-md-2">
                <h4 class="pb-3">Zasada samokontrolii</h4>
                <p>Dzieci mogą , samodzielnie stwierdzić, czy daną pracę wykonały dobrze czy źle, w którym miejscu nastąpiła
                    pomyłka i jak ten błąd naprawić.
                    Nauczyciel wskazuje dziecku jak korzystać z materiału dydaktycznego, wprowadza i respektuje zasadę swobody
                    wyboru, rodzaju, czasu, miejsca i formy pracy, zasadę stopniowania i izolowania trudności, porządku,
                    transferu, własnego działania i powtarzania, samokontroli i ograniczenia.
                </p>
            </div>
        </div>
    </div>
    <hr class="d-none d-lg-block">

    <!-- aktualnośći slides-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <h3 class="text-center pt-3">Nadchodzące wydarzenia</h3>
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
                <?php $active_class = (0 === $homepageEvents->current_post) ? ' active' : '';  ?>

                <div class="carousel-item<?php echo esc_attr($active_class); ?>">
                    <img class="img-slide col-12 col-md-5 d-block d-sm-none d-md-inline-block mt-md-4 mt-lg-3 mt-xl-0 mb-3 mb-lg-0 align-top" src="<?php the_post_thumbnail_url('eventsPictureLand'); ?>" alt="First slide">
                    <a href="<?php the_permalink() ?>" class="event">
                        <div class="d-block col-12 col-md-6 d-md-inline-block mb-5 mt-sm-3 mb-md-5 text-center">
                            <h4 class="mt-md-3 mt-lg-5"><?php the_title() ?></h4>
                            <h3><?php
                                $eventDate = new DateTime(get_field('event_date'));
                                echo  $eventDate->format('d.m.Y') . 'r';
                                ?>
                            </h3>
                            <?php if (has_excerpt()) {
                                the_excerpt();
                            } else {
                                echo wp_trim_words(get_the_content(), 20);
                            }  ?>
                        </div>
                    </a>
                </div>
            <?php }

            wp_reset_postdata(); ?>

        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
    <hr class="d-none d-lg-block">

    <!--dla rodziców-->
    <div class="container-we container-fluid mt-5" id="list-example">
        <h2 class="title text-center  ">Lektura dla rodziców </h2>
        <p class="text-center pb-2 pb-md-5">Z naszego bloga<p>
                <div class="row justify-content-center">
                    <div class=" col-md-4 d-none d-md-block  mt-5">
                        <nav id="myScrollspy">
                            <ul class="nav nav-pills flex-row flex-md-column">
                                <?php
                                $homepagePosts = new WP_Query(array(
                                    'posts_per_page' => 4,

                                ));

                                while ($homepagePosts->have_posts()) {
                                    $homepagePosts->the_post(); ?>
                                    <li class="nav-item"> <a class="list-group-item list-group-item-action list-item" href="#<?php echo get_the_ID(); ?>"><?php the_title();  ?></a></li>

                                <?php } ?>

                            </ul>
                        </nav>
                    </div>
                    <div class="col-12 col-md-7 scrollSpy " data-spy="scroll" data-target="#myScrollspy" style="height:60vh; overflow-y: scroll;padding:5px; border: 1px solid gray;" data-offset="10">
                        <?php while ($homepagePosts->have_posts()) {
                            $homepagePosts->the_post();
                        ?>
                            <div id="<?php echo get_the_ID(); ?>" class="list-item">
                                <h4><?php the_title(); ?></h4>
                                <div class="pl-2">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        <?php  } ?>

                    </div>
                </div>
                <div class="col text-center mt-3"><a href="<?php echo site_url('/blog'); ?>">
                        <button type="button" class="btn btn-primary btn-lg btn-hover btn-default">Przejdź do Bloga</button>
                    </a>
                </div>
    </div>
    <hr class="d-none d-lg-block">
</main>


<?

get_footer();
?>