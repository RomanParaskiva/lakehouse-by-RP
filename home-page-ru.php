<?php /* Template Name: Главная - RU */ ?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />

  <? wp_head();
  $page_id = get_the_ID();
  ?>
</head>

<body>
  <header>
    <div class="header__menu-btn">
      <img loading="lazy" src="<? echo get_template_directory_uri(); ?>/assets/img/menu-btn.svg" width="30" height="30" />
    </div>
    <div id="sidebar-menu">
      <div class="close-menu-btn"><img src="<? echo get_template_directory_uri(); ?>/assets/img/close-btn.png" loading="lazy" width="25" height="25"></div>
      <div class="menu-link phone"><a href="tel:<? echo $GLOBALS['site_variables']['phone_digits']; ?>"><? echo $GLOBALS['site_variables']['phone']; ?></a></div>
      <? wp_nav_menu([
        'theme_location'  => 'header_menu',
        'menu'            => 'Русское меню',
        'container' => false,

      ]); ?>
      <div class="checkbox-group">
        <p>Язык:</p>

        <label for="ru">
          <img class="unchecked" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt="" hidden>
          <img class="checked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
          Русский

          <input type="checkbox" name="ru" id="ru" checked>
        </label>

        <label for="en">
          <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt="">
          <img class="checked" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="" hidden>
          English

          <input type="checkbox" name="en" id="en">
        </label>

        <label for="su">
          <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt="">
          <img class="checked" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="" hidden>
          Suomi

          <input type="checkbox" name="su" id="su">
        </label>

        <label for="china">
          <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt="">
          <img class="checked" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="" hidden>
          China
          <input type="checkbox" name="china" id="china">
        </label>
      </div>
    </div>
  </header>

  <main>
    <section class="hero">
      <a href="#about" class="arrow-down"></a>
      <div class="hero__slider">
        <div class="hero__slider-wrapper owl-carousel">

          <?php $slider = carbon_get_post_meta($page_id, 'hero_slider');
          foreach ($slider as $slide) :
          ?>
            <div class="hero__slider-item">
              <div class="hero__overlay"></div>
              <img loading="lazy" src="<? echo $slide['photo']; ?>" alt="" />
              <div class="hero__content">
                <div class="hero__content-wrapper">
                  <div class="hero__logo">
                    <?php echo wp_get_attachment_image(carbon_get_theme_option('site_logo')); ?>
                  </div>
                  <h1><? echo $slide['title']; ?></h1>
                </div>
              </div>
              <div class="booking-request__wrapper">
                <a data-target="booking" href="#" class="booking-request"><? echo carbon_get_post_meta($page_id, 'button_text'); ?></a>
              </div>
            </div>
          <? endforeach; ?>
        </div>
      </div>
    </section>

    <section class="about" id="about">
      <div class="about__bckg-img">
        <img src="<? echo get_template_directory_uri(); ?>/assets/img/about-background.png" alt="">
      </div>
      <div class="content-wrapper">
        <h2><?php echo carbon_get_post_meta($page_id, 'about_title'); ?></h2>
        <?php echo carbon_get_post_meta($page_id, 'about_text'); ?>

        <h3><?php echo carbon_get_post_meta($page_id, 'about_subtitle'); ?></h3>
        <?php echo carbon_get_post_meta($page_id, 'about_checkmark'); ?>

        <?php echo carbon_get_post_meta($page_id, 'about_subtext'); ?>

      </div>
    </section>

    <section class="news" id="news">
      <div class="content-wrapper">
        <h2><?php echo carbon_get_post_meta($page_id, 'news_title'); ?></h2>
        <div class="news__slider-wrapper owl-carousel owl-theme">

        <? $news_slider = carbon_get_post_meta($page_id, 'news_slider');
            foreach($news_slider as $slide_img_id ) :
              $slide_src = wp_get_attachment_image_url( $slide_img_id, 'full');
        ?>
          <div class="news__item">
            <img loading="lazy" height="200" src="<? echo $slide_src?>">
          </div>

          <? endforeach; ?>
        </div>
      </div>
    </section>

    <section class="rooms" id="rooms">
      <div class="content-wrapper">
        <h2><?php echo carbon_get_post_meta($page_id, 'rooms_title'); ?></h2>

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

        <?php echo carbon_get_post_meta($page_id, 'rooms_description'); ?>
      </div>
    </section>

    <section id="services" class="services">
      <div class="content-wrapper">
        <h2><? echo carbon_get_post_meta($page_id, 'services_title');?></h2>

        <div class="services__items-wrapper">
        <? echo carbon_get_post_meta($page_id, 'services_items');?>
        </div>
        <h2><? echo carbon_get_post_meta($page_id, 'services_paid_title');?></h2>
        <div class="services__items-wrapper paid">

        <? echo carbon_get_post_meta($page_id, 'services_paid_items');?>

        </div>
      </div>
    </section>

    <section class="group" id="group">
      <img class="group__bg-img-1" src="<? echo get_template_directory_uri(); ?>/assets/img/group-bg-1.png">
      <img class="group__bg-img-2" src="<? echo get_template_directory_uri(); ?>/assets/img/group-bg-2.png">
      <img class="group__bg-img-3" src="<? echo get_template_directory_uri(); ?>/assets/img/group-bg-3.png">
      <div class="content-wrapper">
        <h2> <? echo carbon_get_post_meta($page_id, 'group_title');?></h2>
        <h3> <? echo carbon_get_post_meta($page_id, 'group_subtitle');?></h3>
        <div class="group__content">
        <? echo carbon_get_post_meta($page_id, 'group_items');?>
        </div>
      </div>
    </section>

    <section class="gallery" id="gallery">
      <h2><? echo carbon_get_post_meta($page_id, 'gallery_title');?></h2>
      <div class="gallery__container">
      <? $gallery = carbon_get_post_meta($page_id, 'gallery');
            foreach($gallery as $img_id ) :
              $img_src = wp_get_attachment_image_url( $img_id, 'full');
        ?>
        <a class="grid-item" data-fslightbox href="<? echo $img_src;?>">
          <figure><img class="gallery__item" src="<? echo $img_src;?>" alt=""></figure>
        </a>
        <? endforeach; ?>
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
        <h2><? echo carbon_get_post_meta($page_id, 'contacts_title');?></h2>
        <div class="contacts__wrapper">
          <div class="left">
            <div class="contacts__main">
              <h3><? echo carbon_get_post_meta($page_id, 'contacts_subtitle');?></h3>
              <span>Наш адрес: <? echo $GLOBALS['site_variables']['site_adress']; ?></span>
              <span>Е-Mail: <a href="mailto:<? echo $GLOBALS['site_variables']['site_email']; ?>"><? echo $GLOBALS['site_variables']['site_email']; ?></a></span>
              <span>Телефоны: <a class="phone-link" href="tel:<? echo $GLOBALS['site_variables']['phone_digits']; ?>"><? echo $GLOBALS['site_variables']['phone']; ?></a></span>
            </div>
            <div class="contacts__social">
              <h4>Мы в социальных сетях:</h4>
              <div class="social__wrapper">
                <a href="<? echo $GLOBALS['site_variables']['vk_link']  ?: '#'; ?>">
                  <img width="60" src="<? echo get_template_directory_uri(); ?>/assets/img/vk-com 1.png" alt="">
                </a>
                <a href="<? echo $GLOBALS['site_variables']['in_link']  ?: '#'; ?>">
                  <img width="50" src="<? echo get_template_directory_uri(); ?>/assets/img/instagram-4 1.png" alt="">
                </a>
                <a href="<? echo $GLOBALS['site_variables']['fb_link'] ?: '#'; ?>">
                  <img width="50" src="<? echo get_template_directory_uri(); ?>/assets/img/facebook-2 1.png" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="right">
            <h3>Карта</h3>
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4569.4820769450125!2d27.948675380725998!3d61.21440504573968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46908fb09c82ea3f%3A0x9337606d743d48dc!2sLakehouse%20Saimaa%20B%26B!5e0!3m2!1sru!2sru!4v1620663471967!5m2!1sru!2sru" width="100%" height="100%" style="border: 2px solid #65B1EF;filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
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
                <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">

                <span><span class="paid-service-name">Завтрак</span> - <span class="paid-service-price">8
                    евро</span></span>
              </label>
              <label for="extraBed">
                <input type="checkbox" name="extraBed" id="extraBed">
                <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
                <span><span class="paid-service-name">Дополнительное спальное место</span> - <span class="paid-service-price">15 евро</span></span>
              </label>
              <label for="babyCrib">
                <input type="checkbox" name="babyCrib" id="babyCrib">
                <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
                <span><span class="paid-service-name">Детская кроватка</span> - <span class="paid-service-price">бесплатно</span></span>
              </label>
              <label for="gasHearth">
                <input type="checkbox" name="gasHearth" id="gasHearth">
                <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
                <span><span class="paid-service-name">Газовый очаг</span> - <span class="paid-service-price">3 евро /
                    час </span></span>
              </label>
              <label for="charcoal ">
                <input type="checkbox" name="charcoal " id="charcoal ">
                <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
                <span><span class="paid-service-name">Угли для гриля</span> - <span class="paid-service-price">5 евро /
                    мешок</span></span>
              </label>
              <label for="grill">
                <input type="checkbox" name="grill" id="grill">
                <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
                <span><span class="paid-service-name">Гриль (разовый)</span> - <span class="paid-service-price">5 евро /
                    комплект</span></span>
              </label>
              <label for="sauna">
                <input type="checkbox" name="sauna" id="sauna">
                <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
                <span><span class="paid-service-name">Сауна</span> - <span class="paid-service-price">15 евро /
                    час</span></span>
              </label>
              <label for="electricStove">
                <input type="checkbox" name="electricStove" id="electricStove">
                <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
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
              <span class="people-text">Количество человек:</span> <span class="people-minus">-</span> <input class="people-input" type="number" name="peoples" id="peoples" value="2" readonly> <span class="people-plus">+</span>
            </div>
            <div class="modal__body-people-item">
              <span class="people-text">Количество детей:</span> <span class="people-minus">-</span> <input class="people-input" type="number" name="childs" id="childs" value="0" readonly> <span class="people-plus">+</span>
            </div>
            <div class="modal__body-people-item">
              <span class="people-text">Количество животных:</span> <span class="people-minus">-</span> <input class="people-input" type="number" name="animals" id="animals" value="0" readonly> <span class="people-plus">+</span>
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
              <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
              <span>SMS</span>
            </label>
            <label class="chk-label" for="phoneCheck">
              <input type="checkbox" name="phoneCheck" id="phoneCheck">
              <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
              <span>Телефон</span>
            </label>
            <label class="chk-label" for="emailCheck">
              <input type="checkbox" name="emailCheck" id="emailCheck">
              <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
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
  <? wp_footer(); ?>
</body>

</html>