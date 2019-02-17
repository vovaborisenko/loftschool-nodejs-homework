<!-- Footer -->
<footer class="footer">
      <div class="before lazy" data-src=" <?php echo get_template_directory_uri() ?>/img/bg_hand-key-door.png"></div>
      <div class="container footer__container">
        <div class="footer__top"><a class="footer__logo" href="<?php home_url( ) ?>" title="Главная страница | Служба замков"><img class="logo__img lazy" data-src=" <?php echo get_template_directory_uri() ?>/img/logo_footer.png" alt="Служба замков" title="Главная страница | Служба замков">
            <div class="logo__name">Служба замков</div></a>
          <div class="info__sub-text unvisible">Москва и Московская область</div>
          <?php 
          wp_nav_menu( array(
            'theme_location'  => 'footer',
            'menu'            => '', 
            'container'       => 'nav', 
            'container_class' => 'footer__menu', 
            'container_id'    => '',
            'menu_class'      => 'menu__items', 
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => '',
          ) );
          ?>
          <div class="footer__info"><a class="info__phone phone" href="tel:+74958888888"><span class="phone__code">8 495</span><span class="phone__number green"> 888-88-88</span></a>
            <div class="info__sub-text">Круглосуточно</div>
          </div>
        </div>
        <div class="footer__form form">
          <div class="form__head">Введите телефон и вызовите мастера</div>
          <div class="form__main">
            <div class="form__input form__input-phone"> 
            <?php echo do_shortcode( '[contact-form-7 id="50" title="phone+button"]' )?>            
              <!-- <input class="input input-phone" type="tel" name="phone" placeholder="Телефон"><i class="input-icon icon-phone">               </i>
              <button class="send-phone">вызвать срочно</button> -->
            </div>
          </div>
        </div>
        <div class="footer__copy-right">&copy; 2019-2022 &laquo;Служба замков&raquo;</div>
      </div>
    </footer><!-- End Footer -->
    
  <?php wp_footer(); ?>
  </body>
</html>