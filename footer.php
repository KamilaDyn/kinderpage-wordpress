<footer id="footer">

    <div class="footerinfo col-12 d-sm-flex justify-content-around pt-5">
        <div class="address col-10 col-sm-4 col-lg-3 mx-auto  ">
            <h4 class="mb-3 pl-3">Adres</h4>
            <h5 class="pb-3">ul. Wyszyńskiego 6,<br> 63-33 Warszawa</h5>
            <ul>
                <li class="contact-details">
                    <a href="#">Wyślij maila: przedszkole@gmail.com</a>
                </li>
                <li class="contact-details">
                    <a href="#">Zadzwoń kom: +48 123-123-123</a>
                </li>
                <li class="contact-details">
                    <a href="#">tel/fax: 77 452 35 45</a>
                </li>
            </ul>
        </div>
        <div class="useful-link col-10 col-sm-4 col-lg-3 mx-auto ">
            <h4>Przydatne linki</h4>
            <?php wp_nav_menu(array(
                'theme_location' => 'footerLocationOne',
            )); ?>
        </div>
        <div class="social-media col-10 col-sm-4 col-lg-3 mx-auto">
            <h4>My w Mediach</h4>
            <ul>
                <li> <a href="https://instagram.com" target="_blank">Obserwuj Instagram: <i class="fab fa-instagram pl-2 "></i> </a></li>
                <li> <a href="https://facebook.com" target="_blank">Facebook: <i class="fab fa-facebook-f pl-2  "></i> </a></li>
                <li> <a href="#">My w telewizji: <i class="fab fa-file pl-3 "></i> </a></li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <p class="text-right mr-5 pt-3"> &copy; Kamila</p>
    </div>
    <div class="search-overlay">
        <div class="search-overlay__top">
            <div class="container">
                <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
                <input type="text" name="search" class="search-term" placeholder="Szukaj...." id="search-term" autofocus focus autocomplete="off">
                <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
            </div>
        </div>
        <div id="search-overlay__results"></div>
    </div>

</footer>

<?php wp_footer() ?>
</body>

</html>