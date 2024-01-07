<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class();  ?>>

    <!-- Header /Start -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand header-logo" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_theme_mod('uum_logo'); ?>" alt="Logo" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <!-- <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;"> -->
                    <div class="ms-auto my-2 my-lg-0 header-menu-wrap">
                        <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_class' => 'navbar-nav  navbar-nav-scroll header-menu-class')) ?>
                    </div>

                </div>
            </div>
        </nav>
    </header>
    <!-- Header /End -->