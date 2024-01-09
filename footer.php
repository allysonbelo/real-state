</main>

<footer class="footer">
    <div class="wrapper">
        <div class="footer__container">
            <div>
                <img src="<?php echo get_theme_file_uri('./assets/img/footer-image.png') ?>" alt="Vista das escadas internas de um apartamento duplex">
            </div>
            <div class="content">
                <h2>Dê uma espiada nesta incrível propriedade</h2>
                <p>Proin libero nunc consequat interdum varius sit amet mattis vulputate. Dui sapien eget mi proin sed libero enim sed. Et ultrices neque ornare aenean.</p>
                <p>Imperdiet proin fermentum leo vel orci porta non. Tincidunt vitae semper quis lectus nulla at. Neque vitae tempus quam pellentesque nec.</p>

                <form>
                    <input type="text" placeholder="Nome *">
                    <input type="email" placeholder="Email *">
                    <input type="tel" placeholder="Número de Telefone *">
                    <select>
                        <option>Interessado em</option>
                        <option>Visitação</option>
                        <option>Valores</option>
                        <option>Localização</option>
                        <option>Financiamento</option>
                    </select>
                    <a class="button__primary" href="#">Enviar Solicitação</a>
                </form>
            </div>
        </div>

        <div class="copy">
            <span>Copyright ©<?php echo get_the_date('Y'); ?> All rights reserved | This template is made with by <a href="https://allysonbelo.com" target="_blank"> Allyson Belo Cavalcante</a></span>
        </div>
    </div>
</footer>

<?php wp_footer() ?>
</body>

</html>