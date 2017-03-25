<footer>
    <div class="footer__top">
        <div class="container">
            <div class="col-xs-12 col-sm-4 col-md-4 footer__link-container subscribe-us">
                <a class="footer__link" href="">
                    <img class="footer__link-img" src="<?php bloginfo('template_url'); ?>/images/shop-emails.svg">    
                    <span class="footer__link-text">Подписаться на новости</span>
                </a>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 footer__link-container check-order">
                <a class="footer__link" href="">
                    <img class="footer__link-img" src="<?php bloginfo('template_url'); ?>/images/check-order-status.svg">    
                    <span class="footer__link-text">Проверить состояние заказа</span>
                </a>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 footer__link-container show-place">
                <a class="footer__link" href="">
                    <img class="footer__link-img" src="<?php bloginfo('template_url'); ?>/images/purchase-location.svg">    
                    <span class="footer__link-text">Показать наш адрес на карте</span>
                </a>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 footer-expand">
                <span class="footer-expand__header">Информация</span>
                <?php wp_nav_menu( array( 'container_class' => 'navigation-menu__bottom', 'theme_location' => 'footer_menu1' ) ); ?>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 footer-expand">
                <span class="footer-expand__header">Помощь</span>
                <?php wp_nav_menu( array( 'container_class' => 'navigation-menu__bottom', 'theme_location' => 'footer_menu2' ) ); ?>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 footer-expand">
                <span class="footer-expand__header">Клиентам</span>
                <?php wp_nav_menu( array( 'container_class' => 'navigation-menu__bottom', 'theme_location' => 'footer_menu3' ) ); ?>
            </div>
            <img class="page-footer__red-brick" src="<?php bloginfo('template_url'); ?>/images/red-brick-footer.png">  
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="col-xs-12">
                <span>Все права защищены</span>    <a href="">Политика конфиденциальности</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
<?php get_footer( 'list' ); ?>

</body>
</html>