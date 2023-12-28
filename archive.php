<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div id="container">
    <div id="content" role="main">

        <?php if (have_posts()) : ?>

            <h1 class="page-title">
                <?php
                if (is_category()) {
                    single_cat_title();
                } elseif (is_tag()) {
                    single_tag_title();
                } elseif (is_author()) {
                    printf(esc_html__('Author: %s', 'real-state'), '<span class="vcard">' . get_the_author() . '</span>');
                } elseif (is_day()) {
                    printf(esc_html__('Day: %s', 'real-state'), '<span>' . get_the_date() . '</span>');
                } elseif (is_month()) {
                    printf(esc_html__('Month: %s', 'real-state'), '<span>' . get_the_date(_x('F Y', 'monthly archives date format', 'real-state')) . '</span>');
                } elseif (is_year()) {
                    printf(esc_html__('Year: %s', 'real-state'), '<span>' . get_the_date(_x('Y', 'yearly archives date format', 'real-state')) . '</span>');
                } else {
                    esc_html_e('Archives', 'real-state');
                }
                ?>
            </h1>
            <?php

            // Start the Loop.
            while (have_posts()) :
                the_post();
            ?>
                <?php
                ?>
                <article>
                    <span>Faça algo</span>
                </article>
            <?php
            endwhile;

            // Previous/next page navigation.
            the_posts_navigation();

        else :
            ?>
            <span>Nada a exibir</span>
        <?php

        endif;
        ?>

    </div><!-- #content -->
</div><!-- #container -->

<?php get_footer(); ?>