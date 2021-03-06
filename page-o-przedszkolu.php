<?php get_header();

?>
<main class="wrapper">
    <section>
        <header>
            <div class="bookmark container-fluid">
                <h1 class="text-center">Nasze przedszkole</h1>
            </div>
        </header>
    </section>

    <section class="about-us my-4 px-3">
        <div class="about-us row justify-content-around ">
            <div class="about-conatiner col-10 col-md-7 col-lg-8 text-justify pl-4 ">
                <h3 class="pb-3">O przedszkolu</h3>
                <p>
                    Przedszkole Niepubliczne „Kubusiowo” powstało 01.09.2018.r. Osobą prowadzącą „Kubusiowo”
                    jest mgr Anna
                    Kowalska Przedszkole ma bardzo dobre warunki lokalowe dla 50 przedszkolaków. Sale wyposażone są w zabawki
                    oraz
                    pomocne dydaktyczne odpowiednio dobrane według pedagogiki Marii Montessori oraz do wieku dziecka. Każda z
                    naszych sal posiada własną łazienkę. Przedszkole otoczone jest ogródkiem, który jest wyposażony w sprzęt do
                    zabaw oraz „dziecięcych” upraw roślinek..
                    Lokalizacja naszego przedszkola jest wymarzona dla każdego rodzica. Usytuowani jesteśmy w pobliżu starego
                    miast
                    Warszawy, wdostępnej odległości od najważniejszych miejsc w Warszawie/
                    Pracownicy przedszkola „Kubusiowo” współpracują ze środowiskiem rodzinnym i lokalnym. Życzliwa, ciepła, o
                    wysokim poziomie wykształcenia kadra stosuje kreatywne metody wychowania i nauczania, które sprzyjają
                    wspieraniu wszechstronnego rozwoju dziecka opartych na zasadach pedagogiki Montessori. </p>
                <ol>
                    <li>Zsada swobodnego wyboru</li>
                    <li>Swobodny wybór materiału</li>
                    <li>Swobodny wybór miejsca pracy</li>
                    <li>Swobodny wybór czasu pracy</li>
                    <li>Swobodny wybór formy pracy</li>
                    <li>Zasada porządku</li>
                    <li>Zasada ograniczenia</li>
                    <li>Zasada transferu</li>
                    <li>Własne działanie i powtarzanie</li>
                    <li>Zasada kontroli</li>
                </ol>
                <p>Wszystkie podejmowane działania są atmosferze bezpieczeństwa i radości wspomagamy rozwój poznawczy,
                    społeczny
                    i emocjonalny. Zapewniamy dzieciom opiekę i nauczanie, a jednocześnie chcemy wspierać rodziców w wychowywaniu
                    dzieci. Jesteśmy otwarci na życzenia i potrzeby dzieci i rodziców.</p>
                <h4 class="text-center ">Zapraszamy!!!</h4>
            </div>

            <div class="up-date-kid col-12 col-md-4 col-lg-3 my-3 ">
                <div class="col-12 my-3 my-lg-4 text-center">
                    <?php dynamic_sidebar('events-sidebar'); ?>
                </div>
            </div>
            <hr class="d-block d-lg-none">

    </section>
</main>
<?php get_footer();
