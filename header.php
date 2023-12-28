<!DOCTYPE html>
<html lang=" <?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header>
        <div class="wrapper">
            <nav>
                <!-- <?php wp_nav_menu(array('theme_location' => 'main_menu', 'depth' => 1)); ?> -->
            </nav>
            <div class="logo">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                ?>
                    <a href="<?php echo home_url('/') ?>"><span><?php bloginfo('name') ?></span></a>
                <?php
                }
                ?>
            </div>
        </div>
    </header>

    <main>