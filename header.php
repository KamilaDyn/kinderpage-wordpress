<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <header>
        <?php if (!is_user_logged_in()) { ?>
            <div>
                <span class="text-danger text-right pl-3">to jest wersja testowa strony: zaloguj się jako subskrybent: login: subskrybent ->hasło: 123subs</span>
            </div>
        <?php } ?>
        <div class="d-sm-flex  justify-content-between px-3 bg-info ">
            <h5><a class="nav-link text-white " href="tel:+48123123123">+48 123-123-123</a></h5>
            <div class="login-buttons d-flex justify-content-center align-items-center mb-3 mb-sm-0 ">
                <?php if (is_user_logged_in()) { ?>
                    <a class="btn logout bg-success text-white mx-1" href="<?php echo wp_logout_url(); ?>">wyloguj się</a>
                <?php } else {
                ?>
                    <a href="<?php echo wp_login_url(); ?>" class="btn login bg-danger text-white mx-1">zaloguj się</a>

                    <a class="btn signup bg-success text-white mx-1" href="<?php echo wp_registration_url(); ?>">zarejestruj się</a>
                <?php   }
                ?>
                <button id="search" class="search js-search-trigger site-header__search-trigger  "><i class="fa fa-search text-white" aria-hidden="true"></i></button>
            </div>
        </div>
        <nav id="mainNavbar" class="navbar navbar-expand-lg  navbar-light bg-light ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav pl-3">
                    <li class="nav-item active ">
                        <a class="nav-link" href="<?php echo site_url() ?> ">Strona główna <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a <?php if (get_post_type() == 'event') echo 'style="color: #e52121"'; ?> class="nav-link" href="<?php echo site_url('/events') ?>">Aktualności</a>
                    </li>
                    <li class="nav-item">
                        <a <?php if (get_post_type() == 'post') echo 'style="color: #e52121"'; ?>class="nav-link" href="<?php echo site_url('/blog') ?>">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                            O przedszkolu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" <?php if (get_post_type() == 'o-przedszkolu') echo 'style="color: #e52121"' ?> href="<?php echo site_url('/o-przedszkolu') ?>">O przedszkolu</a>
                            <a class="dropdown-item" <?php if (get_post_type() == 'oferta') echo 'style="color: #e52121"' ?> href="<?php echo site_url('/o-przedszkolu/oferta') ?>">Oferta</a>
                            <a class="dropdown-item" <?php if (get_post_type() == 'kadra') echo 'style="color: #e52121"' ?> href="<?php echo site_url('o-przedszkolu/kadra'); ?>">Kadra</a>
                            <a class="dropdown-item" href="<?php echo site_url('o-przedszkolu/grupy'); ?>">Grupy</a>
                            <a class="dropdown-item" href="<?php echo site_url('o-przedszkolu/urodziny') ?>">Urodziny </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" <?php if (get_post_type() == 'kontakt') echo 'style="color: #e52121"' ?> href="<?php echo site_url('/kontakt') ?>">Kontakt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:#ee7919" href="<?php echo site_url('/rekrutacja') ?>">Rekrutacja</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>