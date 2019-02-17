
<?php get_header(); ?>
    <main><!-- Banner -->
      <div class="banner">
        <div class="container">
          <div class="banner__container">
            <div class="banner__head"><span class="grey">вскрытие замков</span><span class="green"> скидка 40%</span></div>
            <ul class="banner__services services">
              <li class="banner__service"><i class="service-icon icon-door">            </i><a class="services__link" href="#">вскрытие&nbsp;замков</a></li>
              <li class="banner__service"><i class="service-icon icon-car">            </i><a class="services__link" href="#">вскрытие&nbsp;автомобилей</a></li>
              <li class="banner__service"><i class="service-icon icon-padlock">            </i><a class="services__link" href="#">замена&nbsp;замков</a></li>
              <li class="banner__service"><i class="service-icon icon-safe">            </i><a class="services__link" href="#">вскрытие&nbsp;сейфов</a></li>
              <li class="banner__service"><i class="service-icon icon-wrench">            </i><a class="services__link" href="#">ремонт&nbsp;замков</a></li>
              <li class="banner__service"><i class="service-icon icon-wrench_door"></i><a class="services__link" href="#">ремонт&nbsp;дверей</a></li>
            </ul>
            <div class="banner__form form">
              <div class="form__head">Заполните форму и вызовите мастера</div>
              <div class="form__main">
                <div class="form__input form__input-phone">             
                  <input class="input input-phone" type="tel" name="phone" placeholder="Ваш телефон"><i class="input-icon icon-phone">               </i>
                  <button class="send-phone" id="call_banner">вызвать срочно</button>
                </div>
              </div>
            </div>
            <div class="form__input form__input-phone unvisible"> <a href="#sendForm">                   
                <button class="send-phone" id="call_banner_mobile">вызвать срочно</button></a></div>
          </div>
        </div>
      </div><!-- End Banner -->
      <div class="text">
        <div class="container text__container">
          <p class="text__text">Если вы потеряли ключи, вы можете заменить замок, произвести ремонт дверь (квартиры, офисы, сейфы и т.д.). В большинстве своем работы не срочные, но требовательны к качеству выполнения, наличия у мастера при себе большого ассортимента замков и дверной фурнитуры, а так же <span class="green">высокого уровня</span> доверия к мастеру и в целом к организации.</p>
        </div>
      </div><!-- Prices -->
      <div class="prices">
        <div class="container prices__container">
          <div class="head"><span class="grey">Наши</span><span class="green"> цены</span></div>
          <div class="sub-head">Закажите услугу и получите <span class="green-mobile"> скидку 40%</span></div>
          <div class="prices__wrap">
            <div class="price-block"><i class="price-block__icon icon-door"></i>
              <div class="price-block__head">Вскрытие</div>
              <div class="price-block__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div><a class="price-block__link green" href="#">Узнать больше</a>
            </div>
            <div class="price-block"><i class="price-block__icon icon-padlock"></i>
              <div class="price-block__head">Замена</div>
              <div class="price-block__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div><a class="price-block__link green" href="#">Узнать больше</a>
            </div>
            <div class="price-block"><i class="price-block__icon icon-wrench"></i>
              <div class="price-block__head">Ремонт</div>
              <div class="price-block__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div><a class="price-block__link green" href="#">Узнать больше</a>
            </div>
          </div>
        </div>
      </div><!-- End Prices -->
<!-- Discont -->
      <div class="discont lazy" id="sendForm" data-src="../img/bg_keys-in-door.png">
        <div class="container discont__container">
          <div class="discont__form form">
            <div class="form__head green">Закажите услугу<span class="green-mobile"> со скидкой 40%</span></div>
            <div class="form__sub-head">С нами надежно и выгодно</div>
            <div class="form__main">
              <div class="form__input form__input-user">
                <input class="input input-user" type="text" name="user" placeholder="Ваше имя"><i class="input-icon icon-user"></i>
              </div>
              <div class="form__input form__input-phone"> 
                <input class="input input-phone" type="tel" name="phone" placeholder="Ваш телефон"><i class="input-icon icon-phone">               </i>
                <button class="send-phone">Вызвать мастера</button>
              </div>
              <div class="form__check">
                <label class="label-check">
                  <input class="check" type="checkbox" name="agree" checked><span class="label-check__text">Согласен на обработку персональных данных</span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Discont -->
<!-- Video -->
      <div class="video">
        <div class="container video__container">
          <div class="head">Видео</div>
          <div class="main">
            <div class="plyr__video-embed" id="player">
              <iframe src="https://youtu.be/QpKZAFxZvVo"></iframe>
            </div>
          </div>
        </div>
      </div><!-- End Video -->
<!-- Locks -->
      <div class="slider locks">
        <div class="container slider__container">
          <div class="head"><span class="grey">мы работаем</span><span class="green">  с замками</span></div>
          <div class="slider__wrap">
            <div class="slide"><a class="slide__link" href="#"><img class="slide__img" data-lazy="../img/locks/lock_mottura.png">
                <div class="slide__head">Mottura</div>
                <div class="slide__text">Время замены 20 минут</div></a></div>
            <div class="slide"><a class="slide__link" href="#"><img class="slide__img" data-lazy="../img/locks/lock_cisa.png">
                <div class="slide__head">Cisa</div>
                <div class="slide__text">Время замены 20 минут</div></a></div>
            <div class="slide"><a class="slide__link" href="#"><img class="slide__img" data-lazy="../img/locks/lock_guardian.png">
                <div class="slide__head">Guardian</div>
                <div class="slide__text">Время замены 20 минут</div></a></div>
            <div class="slide"><a class="slide__link" href="#"><img class="slide__img" data-lazy="../img/locks/lock_mottura.png">
                <div class="slide__head">Mottura</div>
                <div class="slide__text">Время замены 20 минут</div></a></div>
            <div class="slide"><a class="slide__link" href="#"><img class="slide__img" data-lazy="../img/locks/lock_cisa.png">
                <div class="slide__head">Cisa</div>
                <div class="slide__text">Время замены 20 минут</div></a></div>
            <div class="slide"><a class="slide__link" href="#"><img class="slide__img" data-lazy="../img/locks/lock_guardian.png">
                <div class="slide__head">Guardian</div>
                <div class="slide__text">Время замены 20 минут</div></a></div>
          </div>
        </div>
      </div><!-- End Locks -->
<!-- Cars -->
      <div class="slider cars">
        <div class="container slider__container">
          <div class="head"><span class="grey">мы работаем</span><span class="green">  с автомобилями</span></div>
          <div class="slider__wrap">
            <div class="slide"><a class="slide__link" href="#"><img class="slide__img" data-lazy="../img/cars/car_hyundai.png">
                <div class="slide__head"> <span class="nostrong">Hyundai </span>Cerato</div>
                <div class="slide__text">Время вскрытия 11 минут</div></a></div>
            <div class="slide"><a class="slide__link" href="#"><img class="slide__img" data-lazy="../img/cars/car_bmw.png">
                <div class="slide__head"> <span class="nostrong">BMW </span>Series</div>
                <div class="slide__text">Время вскрытия 15 минут</div></a></div>
            <div class="slide"><a class="slide__link" href="#"><img class="slide__img" data-lazy="../img/cars/car_mercedes.png">
                <div class="slide__head"> <span class="nostrong">Mercedes </span>Benz</div>
                <div class="slide__text">Время вскрытия 17 минут</div></a></div>
            <div class="slide"><a class="slide__link" href="#"><img class="slide__img" data-lazy="../img/cars/car_hyundai.png">
                <div class="slide__head"> <span class="nostrong">Hyundai </span>Cerato</div>
                <div class="slide__text">Время вскрытия 11 минут</div></a></div>
            <div class="slide"><a class="slide__link" href="#"><img class="slide__img" data-lazy="../img/cars/car_bmw.png">
                <div class="slide__head"> <span class="nostrong">BMW </span>Series</div>
                <div class="slide__text">Время вскрытия 15 минут</div></a></div>
            <div class="slide"><a class="slide__link" href="#"><img class="slide__img" data-lazy="../img/cars/car_mercedes.png">
                <div class="slide__head"> <span class="nostrong">Mercedes </span>Benz</div>
                <div class="slide__text">Время вскрытия 17 минут</div></a></div>
          </div>
        </div>
      </div><!-- End Car -->
<!-- Reviews -->
      <div class="reviews">
        <div class="container reviews__container">
          <div class="head"><span class="grey">Отзывы наших</span><span class="green"> клиентов</span></div>
          <div class="reviews__wrap">
            <div class="review"><img class="review__photo lazy" data-src="../img/avatars/avatar_1.png">
              <div class="review__name">Сергей Иванов</div>
              <div class="review__city">Москва</div>
              <div class="review__text">Вызывали мастера по вскрытию дверей. Работа была выполнена качественно и в срок. Будем обращаться и в дальнейшем.</div>
              <div class="review__date">21.12.2018</div>
            </div>
            <div class="review"><img class="review__photo lazy" data-src="../img/avatars/avatar_2.png">
              <div class="review__name">Светлана Петрова</div>
              <div class="review__city">Москва</div>
              <div class="review__text">Вызывали мастера по вскрытию дверей. Работа была выполнена качественно и в срок. Будем обращаться и в дальнейшем.</div>
              <div class="review__date">21.12.2018</div>
            </div>
            <div class="review"><img class="review__photo lazy" data-src="../img/avatars/avatar_3.png">
              <div class="review__name">Андрей Смирнов</div>
              <div class="review__city">Москва</div>
              <div class="review__text">Вызывали мастера по вскрытию дверей. Работа была выполнена качественно и в срок. Будем обращаться и в дальнейшем.</div>
              <div class="review__date">21.12.2018</div>
            </div>
          </div>
          <div class="more"><span class="more__reviews">Еще 25 отзывов</span><span class="more__feedback">Оставить отзыв</span></div>
        </div>
      </div><!-- End Reviews -->
<!-- Map -->
      <div class="offices">
        <div class="container offices__container">
          <div class="head offices__head"><span class="grey">Наши</span><span class="green"> офисы</span></div>
          <div class="offices__main">
            <input id="place1" type="radio" name="place">
            <label class="tab" for="place1" data-region="place1">Москва  </label>
            <input id="place3" type="radio" name="place">
            <label class="tab" for="place3" data-region="place3">Подмосковье</label>
            <input id="placeAll" type="radio" name="place" checked>
            <label class="tab" for="placeAll" data-region="placeAll">Все </label>
            <div class="offices__map">
              <div id="map"></div>
            </div>
            <div class="offices__wrap section_1 section">
              <div class="office__data" data-latlng="55.972948,37.291271" data-region="place1">
                <div class="office__name green"> 
                  <div class="name__point"> 
                    <div class="point__text">M</div>
                  </div>Марксистская
                </div>
                <div class="office__address">ул. Марксистская, д 147а офис 155</div>
                <div class="office__phone"><a href="tel:"> +7 495 888-88-88</a></div>
              </div>
              <div class="office__data" data-latlng="55.94948,37.2971271" data-region="place1">
                <div class="office__name green"> 
                  <div class="name__point"> 
                    <div class="point__text">Л</div>
                  </div>Ленинистская
                </div>
                <div class="office__address">ул. Ленинистская, д 155 офис 147ф</div>
                <div class="office__phone"><a href="tel:"> +7 495 555-55-55</a></div>
              </div>
              <div class="office__data" data-latlng="55.919948,37.2171271" data-region="place1">
                <div class="office__name green"> 
                  <div class="name__point"> 
                    <div class="point__text">Э</div>
                  </div>Энгельсистская
                </div>
                <div class="office__address">ул. Энгельсистская, д 7з офис 14</div>
                <div class="office__phone"><a href="tel:"> +7 495 333-33-33</a></div>
              </div>
              <div class="office__data" data-latlng="55.936948,37.2271271" data-region="place3">
                <div class="office__name green"> 
                  <div class="name__point">
                    <div class="point__text">M</div>
                  </div>Марксистская
                </div>
                <div class="office__address">Одинцово, <br>ул. Марксистская, д 147а офис 155</div>
                <div class="office__phone"><a href="tel:"> +7 495 888-88-88</a></div>
              </div>
              <div class="office__data" data-latlng="55.6331196,37.4338186" data-region="place3">
                <div class="office__name green"> 
                  <div class="name__point"> 
                    <div class="point__text">Л</div>
                  </div>Ленинистская
                </div>
                <div class="office__address">Королев, <br>ул. Ленинистская, д 155 офис 147ф</div>
                <div class="office__phone"><a href="tel:"> +7 495 555-55-55</a></div>
              </div>
              <div class="office__data" data-latlng="55.735152,37.436084" data-region="place3">
                <div class="office__name green"> 
                  <div class="name__point"> 
                    <div class="point__text">Э</div>
                  </div>Энгельсистская
                </div>
                <div class="office__address">Химки, <br>ул. Энгельсистская, д 7з офис 14</div>
                <div class="office__phone"><a href="tel:"> +7 495 333-33-33</a></div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Map -->
    </main>