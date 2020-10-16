<!doctype html>
<html lang="pl">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>

    <title>Przedszkole</title>
</head>

<body style="font-family: 'Lato', sans-serif;">
    <header>

        <nav id="mainNavbar" class="navbar navbar-expand-lg navbar-expand-md navbar-light bg-light  ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse flex-column flex-xl-row" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active ">
                        <a class="nav-link" href="<?php echo site_url() ?> ">Strona główna <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Aktualności/aktualnosci.html">Aktualności</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('/blog') ?>">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            O przedszkolu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="o-przedszkolu/o-przedszkolu.html">O przedszkolu</a>
                            <a class="dropdown-item" href="<?php echo site_url('/oferta') ?>">Oferta</a>
                            <a class="dropdown-item" href="o-przedszkolu/kadra.html">Kadra</a>
                            <a class="dropdown-item" href="o-przedszkolu/grupy.html">Grupy</a>
                            <a class="dropdown-item" href="o-przedszkolu/urodziny.html">Urodziny </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontakt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:#ee7919" href="rekrutacja/rekrutacja.html">Rekrutacja</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-0 h4 text-right">
                    <li class="nav-item">
                        <a class="nav-link " style="color:#e52121" href="tel:+48123123123">+48 123-123-123</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>