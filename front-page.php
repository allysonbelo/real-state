<?php get_header() ?>

<section class="banner">
    <div class="banner__content">
        <h1><?php the_title(); ?></h1>
        <p><?php echo bloginfo('description'); ?></p>
        <a class="button" href="#">Baixe Brochure agora</a>
    </div>
</section>

<div class="wrapper">
    <section class="opportunity">
        <h2>Visualize esta incrível propriedade antes que a oportunidade desapareça</h2>
        <p>Quis vel eros donec ac odio. Cras tincidunt lobortis feugiat vivamus at augue eget arcu dictum. Arcu cursus euismod quis viverra nibh cras</p>
        <div class="opportunity__info">
            <span>Proin libero nunc consequat interdum varius sit amet mattis vulputate. Dui sapien eget mi proin sed libero enim sed. Et ultrices neque ornare aenean. A arcu cursus vitae congue mauris rhoncus aenean vel elit. Accumsan sit amet nulla facilisi. </span>
            <span>Imperdiet proin fermentum leo vel orci porta non. Tincidunt vitae semper quis lectus nulla at. Neque vitae tempus quam pellentesque nec. Dignissim sodales ut eu sem integer vitae justo eget.</span>
        </div>
        <div class="opportunity__benefits">
            <img src="<?php echo get_theme_file_uri('/assets/img/buildings.webp')?>" alt="Grandes predios vistos da rua">
            <h3>Destaque os benefícios do seu portfólio de propriedades</h3>
        </div>
</div>

</section>

<?php get_footer() ?>