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
            <img src="<?php echo get_theme_file_uri('/assets/img/buildings.webp') ?>" alt="Grandes predios vistos da rua">
            <h3>Explore o luxo superior do nosso empreendimento imobiliário exclusivo.</h3>
        </div>
    </section>
</div>

<div class="wrapper">
    <section class="numbers">
        <img src="<?php echo get_theme_file_uri('/assets/img/buildings2.webp') ?>" alt="Predios visto do céu">
        <div class="numbers__container">
            <div class="numbers__content">
                <span>01</span>
                <p>Imperdiet proin fermentum leo vel orci porta non. Tincidunt vitae semper quis lectus nulla at.</p>
            </div>
            <div class="numbers__content">
                <span>02</span>
                <p>Imperdiet proin fermentum leo vel orci porta non. Tincidunt vitae semper quis lectus nulla at.</p>
            </div>
            <div class="numbers__content">
                <span>03</span>
                <p>Imperdiet proin fermentum leo vel orci porta non. Tincidunt vitae semper quis lectus nulla at.</p>
            </div>
            <div class="numbers__content">
                <span>04</span>
                <p>Imperdiet proin fermentum leo vel orci porta non. Tincidunt vitae semper quis lectus nulla at.</p>
            </div>
            <div class="numbers__content">
                <span>05</span>
                <p>Imperdiet proin fermentum leo vel orci porta non. Tincidunt vitae semper quis lectus nulla at.</p>
            </div>
            <div class="numbers__content">
                <span>06</span>
                <p>Imperdiet proin fermentum leo vel orci porta non. Tincidunt vitae semper quis lectus nulla at.</p>
            </div>

        </div>
    </section>

    <section class="info">
        <div class="info__paper">
            <img src="<?php echo get_theme_file_uri('/assets/img/livingroom.webp') ?>" alt="Predios visto do céu">
            <p>E muito mais que você pode descobrir em nosso folheto gratuito</p>
        </div>
    </section>
</div>

<div class="wrapper">
    <div class="special__container">
        <section class="special">
            <h2>Diga ao seu leitor o que torna seu produto/propriedade especial</h2>
            <p>Quis vel eros donec ac odio. Cras tincidunt lobortis feugiat vivamus at augue eget arcu dictum. Arcu cursus euismod quis viverra nibh cras</p>

            <div class="special__img">
                <span>Imperdiet proin fermentum leo vel orci porta non. Tincidunt vitae semper quis lectus nulla at.</span>
                <img src="<?php echo get_theme_file_uri('/assets/img/apartment.webp') ?>" alt="Vista de um apartamento do seu interior">
            </div>
        </section>

        <section class="residencial">
            <div class="residencial__content">
                <h2>Sua Residência/Produto Inclui…</h2>
                <span>Imperdiet proin fermentum leo vel orci porta non. Tincidunt vitae semper quis lectus nulla at.</span>
                <span>Imperdiet proin fermentum leo vel orci porta non. Tincidunt vitae semper quis lectus nulla at.</span>
                <span>Imperdiet proin fermentum leo vel orci porta non. Tincidunt vitae semper quis lectus nulla at.</span>
                <span>Imperdiet proin fermentum leo vel orci porta non. Tincidunt vitae semper quis lectus nulla at.</span>
            </div>
            <div class="residencial__image">
                <img src="<?php echo get_theme_file_uri('/assets/img/kitchen.webp') ?>" alt="Vista de um apartamento do seu interior na cozinha">
                <a class="button__secondary" href="#">Baixe Brochure agora</a>
            </div>
        </section>
    </div>
</div>


<div class="wrapper">
    <section class="expirience">
        <div class="expirience__content">
            <img src="<?php echo get_theme_file_uri('/assets/img/kitchen2.webp') ?>" alt="Vista de um apartamento do seu interior na cozinha">
            <div>
                <p>Proin libero nunc consequat interdum varius sit amet mattis vulputate. Dui sapien eget mi proin sed libero enim sed. Et ultrices neque ornare aenean. A arcu cursus vitae congue mauris rhoncus aenean vel elit. Accumsan sit amet nulla facilisi. </p>
                <p>Imperdiet proin fermentum leo vel orci porta non. Tincidunt vitae semper quis lectus nulla at. Neque vitae tempus quam pellentesque nec. Dignissim sodales ut eu sem integer vitae justo eget.</p>
                <a class="button__primary" href="#">Baixe Brochure agora</a>
            </div>

        </div>

        <div class="expirience__content column__two">
            
            <div>
                <h2>Como você também pode experimentar</h2>
                <p>Quis vel eros donec ac odio. Cras tincidunt lobortis feugiat vivamus at augue eget arcu dictum. Arcu cursus euismod quis viverra nibh cras</p>
                <a class="button__primary" href="#">Baixe Brochure agora</a>
            </div>
            <img src="<?php echo get_theme_file_uri('/assets/img/kitchen2.webp') ?>" alt="Vista de um apartamento do seu interior na cozinha">

        </div>
    </section>
</div>




<?php get_footer() ?>