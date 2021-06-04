<? get_header(); ?>

  <main>
    <section class="hero">
      <a href="#about" class="arrow-down"></a>
      <div class="hero__slider">
        <div class="hero__slider-wrapper owl-carousel">
          <div class="hero__slider-item">
            <div class="hero__overlay"></div>
            <img loading="lazy" src="<? echo get_template_directory_uri(); ?>/assets/img/hero-1.jpg" alt="" />
            <div class="hero__content">
              <div class="hero__content-wrapper">
                <div class="hero__logo">
                  <img loading="lazy" src="<? echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo" />
                </div>
                <h1>Дом у озера</h1>
              </div>
            </div>
            <div class="booking-request__wrapper">
              <a data-target="booking" href="#" class="booking-request">Заявка на бронирование</a>
            </div>
          </div>
          <div class="hero__slider-item">
            <div class="hero__overlay"></div>
            <img loading="lazy" src="<? echo get_template_directory_uri(); ?>/assets/img/hero-3.jpg" alt="" />
            <div class="hero__content">
              <div class="hero__content-wrapper">
                <div class="hero__logo">
                  <img loading="lazy" src="<? echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo" />
                </div>
                <h1>Дом у озера</h1>
              </div>
            </div>

            <div class="booking-request__wrapper">
              <a href="#" data-target="booking" class="booking-request">Заявка на бронирование</a>
            </div>

          </div>
          <div class="hero__slider-item">
            <div class="hero__overlay"></div>
            <img loading="lazy" src="<? echo get_template_directory_uri(); ?>/assets/img/hero-6.jpg" alt="" />
            <div class="hero__content">
              <div class="hero__content-wrapper">
                <div class="hero__logo">
                  <img loading="lazy" src="<? echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo" />
                </div>
                <h1>Дом у озера</h1>
              </div>
            </div>

            <div class="booking-request__wrapper">
              <a href="#" data-target="booking" class="booking-request">Заявка на бронирование</a>
            </div>
          </div>
          <div class="hero__slider-item">
            <div class="hero__overlay"></div>
            <img loading="lazy" src="<? echo get_template_directory_uri(); ?>/assets/img/hero-7.jpg" alt="" />
            <div class="hero__content">
              <div class="hero__content-wrapper">
                <div class="hero__logo">
                  <img loading="lazy" src="<? echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo" />
                </div>
                <h1>Дом у озера</h1>
              </div>
            </div>

            <div class="booking-request__wrapper">
              <a href="#" data-target="booking" class="booking-request">Заявка на бронирование</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="about" id="about">
      <div class="about__bckg-img">
          <img src="<? echo get_template_directory_uri(); ?>/assets/img/about-background.png" alt="">
      </div>
      <div class="content-wrapper">
        <h2>LakeHouse-Saimaa Центр активного отдыха</h2>
        <p>
          Основным направлением нашей деятельности является организация
          активного отдыха в Финляндии в условиях чистой экологии, в приятной
          и здоровой сельской среде Южной Карелии.
        </p>
        <p>
          Центр расположен на живописном берегу озера Саймаа в юго-восточной
          части Финляндии в районе Тайпалсаари, в 25 км от города
          Лаппеенранта.
        </p>
        <p>Вы можете забронировать отдельные номера или весь отель.</p>

        <h3>У нас:</h3>
        <span class="checkmark-text">
          <img loading="lazy" src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 1.svg">
          Можно с комфортом разместиться семейной паре, семье с детьми или компании друзей вдали от шумного города и
          оживленных трасс
        </span>
        <span class="checkmark-text">
          <img loading="lazy" src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 1.svg">
          Достаточно места, чтобы разместить спортивную или туристическую группу до 45 человек
        </span>
        <span class="checkmark-text">
          <img loading="lazy" src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 1.svg">
          Есть опыт размещения и организации отдыха и занятий детских групп, мастерклассов
          по танцам, семинаров, корпоративных мероприятий
        </span>

        <span class="about__subtext">*Для постоянных гостей действует гибкая система скидок.</span>
        <span class="about__subtext">*При размещении групп возможны договорные условия оплаты и дополнительные
          услуги.</span>
      </div>
    </section>

    <section class="news" id="news">
      <div class="content-wrapper">
        <h2>Новости и акции</h2>
        <div class="news__slider-wrapper owl-carousel owl-theme">
          <div class="news__item">
            <img loading="lazy" height="200" src="<? echo get_template_directory_uri(); ?>/assets/img/Баннер реклама.png">
          </div>
        </div>
      </div>
    </section>

    <section class="rooms" id="rooms">
      <div class="content-wrapper">
        <h2>Номера</h2>

        <div class="rooms__container-wrapper">
          <div class="rooms__container owl-carousel">
            <div class="room-card">
              <p class="room-card__title">Двухместный номер</p>
              <div class="room-card__img-wrapper">
                <img class="room-card__img" src="<? echo get_template_directory_uri(); ?>/assets/img/app-1-188x126 1.png" alt="room-1">
              </div>
              <span class="room-card__description">Стоимость: <span class="room-card__price">180 евро</span></span>
              <span class="room-card__description">Кол-во человек: <span class="room-card__persons">2</span></span>
              <a data-target="booking" class="room-cars__request-btn" href="#">заявка на бронирование</a>
            </div>
            <div class="room-card">
              <p class="room-card__title">Двухместный номер</p>
              <div class="room-card__img-wrapper">
                <img class="room-card__img" src="<? echo get_template_directory_uri(); ?>/assets/img/app-1-188x126 1.png" alt="room-1">
              </div>
              <span class="room-card__description">Стоимость: <span class="room-card__price">180 евро</span></span>
              <span class="room-card__description">Кол-во человек: <span class="room-card__persons">2</span></span>
              <a data-target="booking" class="room-cars__request-btn" href="#">заявка на бронирование</a>
            </div>

            <div class="room-card">
              <p class="room-card__title">Двухместный номер</p>
              <div class="room-card__img-wrapper">
                <img class="room-card__img" src="<? echo get_template_directory_uri(); ?>/assets/img/app-1-188x126 1.png" alt="room-1">
              </div>
              <span class="room-card__description">Стоимость: <span class="room-card__price">180 евро</span></span>
              <span class="room-card__description">Кол-во человек: <span class="room-card__persons">2</span></span>
              <a data-target="booking" class="room-cars__request-btn" href="#">заявка на бронирование</a>
            </div>
            <div class="room-card">
              <p class="room-card__title">Двухместный номер</p>
              <div class="room-card__img-wrapper">
                <img class="room-card__img" src="<? echo get_template_directory_uri(); ?>/assets/img/app-1-188x126 1.png" alt="room-1">
              </div>
              <span class="room-card__description">Стоимость: <span class="room-card__price">180 евро</span></span>
              <span class="room-card__description">Кол-во человек: <span class="room-card__persons">2</span></span>
              <a data-target="booking" class="room-cars__request-btn" href="#">заявка на бронирование</a>
            </div>
            <div class="room-card">
              <p class="room-card__title">Двухместный номер</p>
              <div class="room-card__img-wrapper">
                <img class="room-card__img" src="<? echo get_template_directory_uri(); ?>/assets/img/app-1-188x126 1.png" alt="room-1">
              </div>
              <span class="room-card__description">Стоимость: <span class="room-card__price">180 евро</span></span>
              <span class="room-card__description">Кол-во человек: <span class="room-card__persons">2</span></span>
              <a data-target="booking" class="room-cars__request-btn" href="#">заявка на бронирование</a>
            </div>
          </div>
        </div>

        <p>Номера гостиницы расположены в основном корпусе. 14 уютных номеров и двухкомнатные апартаменты позволяют
          разместить до 50 человек. В каждом номере отдельный туалет с душем. Большая часть окон выходит на озеро Сайма.
        </p>
        <p class="rooms__black-text">Гостиничные сутки - с 14:00 текущего дня до 12:00 последующего дня.</p>
        <p>Меню завтрака: сыр, йогурт, хлеб, печенье, кофе, чай, сок, джем, "каша-минутка", молоко, фрукты</p>
      </div>
    </section>

    <section id="services" class="services">
      <div class="content-wrapper">
        <h2>Для удобства и комфорта гостей мы предлагаем:</h2>

        <div class="services__items-wrapper">

          <div class="services__blc left">
            <div class="service__item">
              <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 23.svg" width="30" alt="">
              <span>Пляж;</span>
            </div>
            <div class="service__item">
              <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 23.svg" width="30" alt="">
              <span>Беседка для курящих;</span>
            </div>
            <div class="service__item">
              <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 23.svg" width="30" alt="">
              <span>Место для разделки рыбы;</span>
            </div>
            <div class="service__item">
              <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 23.svg" width="30" alt="">
              <span>Стоянка для автомобилей, видеонаблюдение;</span>
            </div>
            <div class="service__item">
              <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 23.svg" width="30" alt="">
              <span>Навесы для барбекю, гриль домик: решетки, шампура;</span>
            </div>
            <div class="service__item">
              <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 23.svg" width="30" alt="">
              <span>Детская площадка и активный досуг: бадминтон, настольный теннис, баскетбольное кольцо, мячи, палки
                для скандинавской ходьбы, коньки и лыжи;</span>
            </div>
          </div>

          <div class="services__blc right">
            <div class="service__item">
              <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 23.svg" width="30" alt="">
              <span>Сауна;</span>
            </div>
            <div class="service__item">
              <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 23.svg" width="30" alt="">
              <span>Коптильня для рыбы;</span>
            </div>
            <div class="service__item">
              <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 23.svg" width="30" alt="">
              <span>WiFi и доступ в Internet на всей территории;</span>
            </div>
            <div class="service__item">
              <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 23.svg" width="30" alt="">
              <span>Моторный катер-катамаран, весельная лодка, удочки;</span>
            </div>
            <div class="service__item">
              <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 23.svg" width="30" alt="">
              <span>Помещение для отдыха на втором этаже: библиотека, настольные игры, минибильярд, DVD;</span>
            </div>
            <div class="service__item">
              <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 23.svg" width="30" alt="">
              <span>Кафе: холодильники, один для упакованных завтраков, второй для личных продуктов, микроволновая печь,
                чайник, кофеварка, одноразовая посуда;</span>
            </div>
          </div>

        </div>
        <h2>Платные услуги:</h2>
        <div class="services__items-wrapper paid">

          <div class="services__blc left">
            <div class="service__item">
              <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 1.svg" width="30" alt="">
              <ul>
                <li><span>Катер (прокат) - 25 евро / час</span></li>
                <li><span>50 евро / 2 часа</span></li>
                <li><span>70 евро / 12 часов</span></li>
                <li><span>100 евро / сутки</span></li>
              </ul>
            </div>
            <div class="service__item">
              <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 1.svg" width="30" alt="">
              <span>Электрическая плита - 3 евро / час </span>
            </div>
          </div>

          <div class="service__blc right">
            <div class="service__item">
              <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 1.svg" width="30" alt="">
              <span>Угли для гриля - 5 евро / мешок</span>
            </div>
            <div class="service__item">
              <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 1.svg" width="30" alt="">
              <span>Гриль (разовый) - 5 евро / комплект</span>
            </div>
            <div class="service__item">
              <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 1.svg" width="30" alt="">
              <span>Сауна - 15 евро / час</span>
            </div>
            <div class="service__item">
              <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 1.svg" width="30" alt="">
              <span>Газовый очаг - 3 евро / час</span>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="group" id="group">
      <img class="group__bg-img-1" src="<? echo get_template_directory_uri(); ?>/assets/img/group-bg-1.png">
      <img class="group__bg-img-2" src="<? echo get_template_directory_uri(); ?>/assets/img/group-bg-2.png">
      <img class="group__bg-img-3" src="<? echo get_template_directory_uri(); ?>/assets/img/group-bg-3.png">
      <div class="content-wrapper">
        <h2>Для групп</h2>
        <h3>Наши предложения для группового туризма:</h3>
        <div class="group__content">
          <div class="group__content-item">
            <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 1.svg" alt="" width="30">
            <span>Велосипедные прогулки и походы по окрестностям;</span>
          </div>
          <div class="group__content-item">
            <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 1.svg" alt="" width="30">
            <span>Организация и проведение музыкальных фестивалей;</span>
          </div>
          <div class="group__content-item">
            <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 1.svg" alt="" width="30">
            <span>Танцевальные занятия и проведение мастерклассов;</span>
          </div>
          <div class="group__content-item">
            <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 1.svg" alt="" width="30">
            <span>Проведение праздников (свадьбы, дни рождения и т.п.).</span>
          </div>
          <div class="group__content-item">
            <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 1.svg" alt="" width="30">
            <span>Проведение спортивно тренировочных сборов, включая возможности близкорасположенных спортивных
              сооружений;</span>
          </div>
          <div class="group__content-item">
            <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 1.svg" alt="" width="30">
            <span>Cезонные лагеря для школьников с различными видами тематической активности;</span>
          </div>
          <div class="group__content-item">
            <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 1.svg" alt="" width="30">
            <span>Корпоративный отдый совмещенный с обучением или треннингом сотрудников;</span>
          </div>
        </div>
      </div>
    </section>

    <section class="gallery" id="gallery">
      <h2>Фотогалерея</h2>
      <div class="gallery__container">
        </figure>
        <a class="grid-item" data-fslightbox href="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg">
          <figure><img class="gallery__item" src="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg" alt=""></figure>
        </a>
        <figure><a class="grid-item" data-fslightbox href="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg"> <img class="gallery__item"
              src="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg" alt=""></a></figure>
        <figure><a class="grid-item" data-fslightbox href="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg"><img class="gallery__item"
              src="<? echo get_template_directory_uri(); ?>/assets/img/hero-3.jpg" alt=""></a></figure>
        <figure><a class="grid-item" data-fslightbox href="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg"> <img class="gallery__item"
              src="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg" alt=""></a></figure>
        <figure><a class="grid-item" data-fslightbox href="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg"> <img class="gallery__item"
              src="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg" alt=""></a></figure>
        <figure><a class="grid-item" data-fslightbox href="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg"> <img class="gallery__item"
              src="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg" alt=""></a></figure>
        <!-- <a class="grid-item" data-fslightbox href="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg"> <img class="gallery__item" src="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg"
            alt=""></a>
        <a class="grid-item" data-fslightbox href="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg"> <img class="gallery__item" src="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg"
            alt=""></a>
        <a class="grid-item" data-fslightbox href="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg"> <img class="gallery__item" src="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg" alt=""></a>
        <a class="grid-item" data-fslightbox href="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg"> <img class="gallery__item" src="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg" alt=""></a>
        <a class="grid-item" data-fslightbox href="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg"> <img class="gallery__item" src="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg" alt=""></a>
        <a class="grid-item" data-fslightbox href="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg"> <img class="gallery__item" src="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg" alt=""></a>
        <a class="grid-item" data-fslightbox href="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg"> <img class="gallery__item" src="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg" alt=""></a>
        <a class="grid-item" data-fslightbox href="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg"> <img class="gallery__item" src="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg" alt=""></a>
        <a class="grid-item" data-fslightbox href="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg"> <img class="gallery__item" src="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg" alt=""></a>
        <a class="grid-item" data-fslightbox href="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg"> <img class="gallery__item" src="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg" alt=""></a>
        <a class="grid-item" data-fslightbox href="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg"> <img class="gallery__item" src="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg" alt=""></a>
        <a class="grid-item" data-fslightbox href="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg"> <img class="gallery__item" src="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg" alt=""></a>
        <a class="grid-item" data-fslightbox href="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg"> <img class="gallery__item" src="<? echo get_template_directory_uri(); ?>/assets/img/hero-5.jpg" alt=""></a> -->
        <div class="adv grid-item">
          <span>Блок с рекламой!</span>
        </div>
      </div>
    </section>

    <section class="contacts" id="contacts">
      <div class="contacts-bg">
        <img src="<? echo get_template_directory_uri(); ?>/assets/img/contacts-bg.png" loading="lazy" alt="">
      </div>
      <div class="content-wrapper">
        <h2>Контакты</h2>
        <div class="contacts__wrapper">
          <div class="left">
            <div class="contacts__main">
              <h3>Как добраться?</h3>
              <span>Наш адрес: Leväsentie 14A, Taipalsaari, Suomi</span>
              <span>Е-Mail: <a href="mail:lakehouse.saimaa@gmail.com">lakehouse.saimaa@gmail.com</a></span>
              <span>Телефоны: <a class="phone-link" href="tel:+358458886058">+358 45 888 6058</a></span>
            </div>
            <div class="contacts__social">
              <h4>Мы в социальных сетях:</h4>
              <div class="social__wrapper">
                <a href="#">
                  <img src="<? echo get_template_directory_uri(); ?>/assets/img/vk-com 1.png" alt="">
                </a>
                <a href="#">
                  <img src="<? echo get_template_directory_uri(); ?>/assets/img/instagram-4 1.png" alt="">
                </a>
                <a href="#">
                  <img src="<? echo get_template_directory_uri(); ?>/assets/img/facebook-2 1.png" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="right">
            <h3>Карта</h3>
            <div id="map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4569.4820769450125!2d27.948675380725998!3d61.21440504573968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46908fb09c82ea3f%3A0x9337606d743d48dc!2sLakehouse%20Saimaa%20B%26B!5e0!3m2!1sru!2sru!4v1620663471967!5m2!1sru!2sru"
                width="100%" height="100%" style="border: 2px solid #65B1EF;filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
              border-radius: 10px;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="modal__wrapper" id="modal">
      <div class="modal">
        <a href="#" class="modal__close">
          <img src="<? echo get_template_directory_uri(); ?>/assets/img/modal-close.svg" alt="">
        </a>


        <div class="modal__sidebar">
          <div class="modal__sidebar-room active">
            <div class="modal__sidebar-header">
              Двухместный номер
            </div>
            <div class="modal__sidebar-image">
              <img src="<? echo get_template_directory_uri(); ?>/assets/img/app-1-188x126 1.png">
            </div>
          </div>
          <div class="modal__sidebar-room">
            <div class="modal__sidebar-header">
              Двухместный номер
            </div>
            <div class="modal__sidebar-image">
              <img src="<? echo get_template_directory_uri(); ?>/assets/img/app-1-188x126 1.png">
            </div>
          </div>
          <div class="modal__sidebar-room">
            <div class="modal__sidebar-header">
              Двухместный номер
            </div>
            <div class="modal__sidebar-image">
              <img src="<? echo get_template_directory_uri(); ?>/assets/img/app-1-188x126 1.png">
            </div>
          </div>
          <div class="modal__sidebar-room">
            <div class="modal__sidebar-header">
              Двухместный номер
            </div>
            <div class="modal__sidebar-image">
              <img src="<? echo get_template_directory_uri(); ?>/assets/img/app-1-188x126 1.png">
            </div>
          </div>
          <div class="modal__sidebar-room">
            <div class="modal__sidebar-header">
              Двухместный номер
            </div>
            <div class="modal__sidebar-image">
              <img src="<? echo get_template_directory_uri(); ?>/assets/img/app-1-188x126 1.png">
            </div>
          </div>
        </div>

        <div class="modal__body active" data-step="1">

          <div class="modal__body-header" data-room-header="Трёхместный номер">
            Трёхместный номер
          </div>


          <div class="modal__body-slider owl-carousel owl-theme">
            <img src="<? echo get_template_directory_uri(); ?>/assets/img/app-1-188x126 1.png" alt="" height="300">
            <img src="<? echo get_template_directory_uri(); ?>/assets/img/app-1-188x126 1.png" alt="" height="300">
            <img src="<? echo get_template_directory_uri(); ?>/assets/img/app-1-188x126 1.png" alt="" height="300">
            <img src="<? echo get_template_directory_uri(); ?>/assets/img/app-1-188x126 1.png" alt="" height="300">
          </div>


          <div class="modal__body-description-container">
            <h4>Описание номера:</h4>
            <span class="modal__body-desc">
              Трехместный номер (предназначен для проживания 3-4-х человек). Два номера.
            </span>
            <div class="modal__body-services">
              <div class="modal__services-item">
                <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 23.svg" alt="">
                <span>Постельное белье</span>
              </div>
              <div class="modal__services-item">
                <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 23.svg" alt="">
                <span>Кухня</span>
              </div>
              <div class="modal__services-item">
                <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 23.svg" alt="">
                <span>Полотенца</span>
              </div>
              <div class="modal__services-item">
                <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 23.svg" alt="">
                <span>Телевизор</span>
              </div>
              <div class="modal__services-item">
                <img src="<? echo get_template_directory_uri(); ?>/assets/img/checkmark 23.svg" alt="">
                <span>Душ</span>
              </div>
            </div>
          </div>

          <div class="modal__price-wrapper">
            Стоимость:
            <span class="modal__body-price">
              110 евро/ сутки
            </span>
          </div>

          <div class="modal__body-services paid">
            <h4>Дополнительные услуги:</h4>
            <div class="modal__paid-wrapper">
              <label for="breakfast">
                <input type="checkbox" name="breakfast" id="breakfast">
                <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden
                  src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">

                <span><span class="paid-service-name">Завтрак</span> - <span class="paid-service-price">8
                    евро</span></span>
              </label>
              <label for="extraBed">
                <input type="checkbox" name="extraBed" id="extraBed">
                <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden
                  src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
                <span><span class="paid-service-name">Дополнительное спальное место</span> - <span
                    class="paid-service-price">15 евро</span></span>
              </label>
              <label for="babyCrib">
                <input type="checkbox" name="babyCrib" id="babyCrib">
                <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden
                  src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
                <span><span class="paid-service-name">Детская кроватка</span> - <span
                    class="paid-service-price">бесплатно</span></span>
              </label>
              <label for="gasHearth">
                <input type="checkbox" name="gasHearth" id="gasHearth">
                <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden
                  src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
                <span><span class="paid-service-name">Газовый очаг</span> - <span class="paid-service-price">3 евро /
                    час </span></span>
              </label>
              <label for="charcoal ">
                <input type="checkbox" name="charcoal " id="charcoal ">
                <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden
                  src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
                <span><span class="paid-service-name">Угли для гриля</span> - <span class="paid-service-price">5 евро /
                    мешок</span></span>
              </label>
              <label for="grill">
                <input type="checkbox" name="grill" id="grill">
                <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden
                  src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
                <span><span class="paid-service-name">Гриль (разовый)</span> - <span class="paid-service-price">5 евро /
                    комплект</span></span>
              </label>
              <label for="sauna">
                <input type="checkbox" name="sauna" id="sauna">
                <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden
                  src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
                <span><span class="paid-service-name">Сауна</span> - <span class="paid-service-price">15 евро /
                    час</span></span>
              </label>
              <label for="electricStove">
                <input type="checkbox" name="electricStove" id="electricStove">
                <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden
                  src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
                <span><span class="paid-service-name">Электрическая плита</span> - <span class="paid-service-price">3
                    евро / час</span></span>
              </label>
            </div>
          </div>

          <button data-step="2" title="далее" class="modal__btn-next">далее</button>
        </div>

        <div class="modal__body hide" data-step="2">
          <div class="modal__body-header">
            Выберите дату и количество человек:
          </div>

          <div class="date-input__wrapper">
            <span>Выберите дату или диапазон дат для заявки на бронирование :</span>
            <br>
            <input type="text" name="daterange" value="" />
          </div>

          <div class="modal__body-people">
            <div class="modal__body-people-item">
              <span class="people-text">Количество человек:</span> <span class="people-minus">-</span> <input
                class="people-input" type="number" name="peoples" id="peoples" value="2" readonly> <span
                class="people-plus">+</span>
            </div>
            <div class="modal__body-people-item">
              <span class="people-text">Количество детей:</span> <span class="people-minus">-</span> <input
                class="people-input" type="number" name="childs" id="childs" value="0" readonly> <span
                class="people-plus">+</span>
            </div>
            <div class="modal__body-people-item">
              <span class="people-text">Количество животных:</span> <span class="people-minus">-</span> <input
                class="people-input" type="number" name="animals" id="animals" value="0" readonly> <span
                class="people-plus">+</span>
            </div>
          </div>
          <button data-step="3" title="далее" class="modal__btn-next step-2">далее</button>
        </div>


        <div class="modal__body hide" data-step="3">
          <div class="modal__body-header">
            Заполните Ваши данные:
          </div>

          <form>
            <div class="modal__inputs-wrapper">
              <div><label for="lastName">Фамилия </label> <input type="text" name="lastName" required></div>
              <div><label for="firstName">Имя </label> <input type="text" name="firstName" required></div>
              <div><label for="phone">Телефон </label> <input type="tel" name="phone"></div>
              <div><label for="email">E-mail </label> <input type="email" name="email" required></div>
            </div>
            <h3>Выберите удобный вариант связи:</h3>
            <label class="chk-label" for="smsCheck">
              <input type="checkbox" name="smsCheck" id="smsCheck">
              <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden
                src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
              <span>SMS</span>
            </label>
            <label class="chk-label" for="phoneCheck">
              <input type="checkbox" name="phoneCheck" id="phoneCheck">
              <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden
                src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
              <span>Телефон</span>
            </label>
            <label class="chk-label" for="emailCheck">
              <input type="checkbox" name="emailCheck" id="emailCheck">
              <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden
                src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
              <span>E-mail</span>
            </label>

            <h3>Комментарий к бронированию:</h3>
            <textarea width="100%" name="comment" id="comment" rows="10" resize="none "></textarea>
            <span>* Заявка не является подтверждением бронирования, для подтверждения с Вами свяжется менеджер.</span>

            <button title="далее" type="submit" class="modal__send-request-btn">Заявка на бронирование</button>
          </form>


         
        </div>
      </div>
    </div>
  </main>

  <footer></footer>

  <script src="<? echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
  <script src="<? echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
  <script src="<? echo get_template_directory_uri(); ?>/assets/js/fslightbox.js"></script>
  <script defer src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
  <script src="<? echo get_template_directory_uri(); ?>/assets/js/moment.min.js"></script>
  <script src="<? echo get_template_directory_uri(); ?>/assets/js/daterangepicker.js"></script>
  <script src="<? echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
</body>

</html>