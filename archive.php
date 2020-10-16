<?php

get_header();
?>
<?php

get_header();
?>




<section class="main">
    <div class="bookmark container-fluid">
        <h1 class="text-center"><?php if (is_category()) {
                                ?> kategoria: <?   single_cat_title();
                                };
                                if (is_author()) {
                                   ?> autor: <? the_author();
                                }; ?></h1>
    </div>
    <!--oferta-->
    <div class="about-us row justify-content-around ">
        <div class="about-conatiner col-10 col-md-7 col-lg-8 text-justify ">
            <p>
                Pragniemy z wykorzystaniem pedagogiki Marii Montessori dać szansę dziecku na rozwój swojej osoby według
                stworzonych przez siebie indywidualnych planów rozwojowych. W planach tych zapisane są jego możliwości,
                kompetencje i umiejętności, umożliwiające mu naukę samodzielną i efektywniejszą.</p>
            <p> <strong>W podstawowej ofercie naszego przedszkola znajduje się ciekawy program zajęć dodatkowych dla
                    wszystkich
                    dzieci niezależnie od grupy wiekowej:</strong></p>
            <ul>
                <li class="oferts-list"><i class="fas fa-arrow-circle-right"></i> język angielski</li>
                <li class="oferts-list"><i class="fas fa-arrow-circle-right"></i> zajęcia rytmiczne</li>
                <li class="oferts-list"><i class="fas fa-arrow-circle-right"></i> zajęcia logopedyczne</li>
                <li class="oferts-list"><i class="fas fa-arrow-circle-right"></i> botanika dla dzieci</li>
                <li class="oferts-list"><i class="fas fa-arrow-circle-right"></i> zajęcia z psychologiem</li>
                <li class="oferts-list"><i class="fas fa-arrow-circle-right"></i> arteterapia</li>
                <li class="oferts-list"><i class="fas fa-arrow-circle-right"></i> zajęcia indywidualne wspomagające rozwój
                    dziecka</li>
                <li class="oferts-list"><i class="fas fa-arrow-circle-right"></i> muzykoterapia</li>
                <li class="oferts-list"><i class="fas fa-arrow-circle-right"></i> wyjścia na basen</li>
            </ul>
            <h4>Opłaty za przedszkole za rok 2018-2019</h4>
            <ul>
                <li class="oferts-list"><i class="fas fa-arrow-circle-right"></i> czesne podstawowe: 500ł</li>
                <li class="oferts-list"><i class="fas fa-arrow-circle-right"></i> stawka wyżywienia 7zł/dzień (4posiłki)</li>
                <li class="oferts-list"><i class="fas fa-arrow-circle-right"></i> opieka nad dzieckiem po godzinie 17:00,
                    wynosi 15 zł za godzinę wraz z posiłkiem</li>
            </ul>
        </div>
        <div class="up-date-kid col-12 col-md-4 col-lg-3">
            <div class="col-12">
                <h4>Aktualności</h4>
                <ul class="px-2">
                    <li class="up-date-link"> <a href="../Aktualności/aktualnosci.html#workshop-1">WARSZTATY - Metoda
                            Montessori w domu <br>22.III.
                            2019r. godz. 10:00-13:00</a>
                    </li>
                    <li class="up-date-link"> <a href="../Aktualności/aktualnosci.html#workshop-2">WARSZTATY artystyczne wokół
                            książek <br>25.V.2019r
                            godz: 11:00-12:30</a>
                    </li>
                    <li class="up-date-link"> <a href="../Aktualności/aktualnosci.html#workshop-2">Prelekcja - zazdrość o
                            młodsze rodzeństwo. <br>24.IV.2019
                            godz. 10:00-11:00</a>
                    </li>
                    <li class="up-date-link"><a href="../Aktualności/aktualnosci.html#insurance">Zadbaj o bezpieczeństwo
                            Twojego malucha</a></li>
                </ul>
            </div>
            <div class="col-12">
                <h4 style="color:#ee7919">Praca</h4>
                <p class="up-date-link"> <a href="../Aktualności/aktualnosci.html#work">Dołącz do naszego zespołu!!!</a></p>
            </div>
        </div>
    </div>

    <!--Adress-->
    <div class="container my-5 d-flex flex-column flex-md-row justify-content-center">
        <div class="col-12 col-md-6 ">
            <div class="adress text-center">
                <h4 class="mb-3" style="color:#e52121">Adres</h4>
                <h5 class="pb-3">ul. Wyszyńskiego 6, 63-33 <br> Warszawa</h5>
            </div>
            <div class="col-12 justify-content-center">
                <img class="col-12 h-100" src="../img/mapa.jpg" alt="map">
            </div>
        </div>

        <div id="contact" class="contact-list col-md-6 col-xl-5 mt-3 text-center ">
            <h4 class=" mb-3 mb-lg-5" style="color:#e52121">Kontakt:</h4>
            <ul>
                <li class="contact-details py-1 py-lg-2  md-h4">
                    <a href="#">Kontakt przez facebook: <i class="fab fa-facebook-f pl-3 "></i> </a>
                </li>
                <li class="contact-details py-1 py-lg-2 ">
                    <a href="#">Wyślij maila: przedszkole@gmail.com</a>
                </li>
                <li class="contact-details py-1 py-lg-2 ">
                    <a href="#">Zadzwoń kom: +48 123-123-123</a>
                </li>
                <li class="contact-details py-1 py-lg-2">
                    <a href="#">tel/fax: 77 452 35 45</a>
                </li>
            </ul>
        </div>
    </div>

</section>