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
      <img loading="lazy" src="<? echo get_template_directory_uri(); ?>/assets/img/menu-btn.svg" width="30"
        height="30" />
    </div>
    <div id="sidebar-menu">
      <div class="close-menu-btn"><img src="<? echo get_template_directory_uri(); ?>/assets/img/close-btn.png"
          loading="lazy" width="25" height="25"></div>
      <div class="menu-link phone"><a href="tel:<? echo $GLOBALS['site_variables']['phone_digits']; ?>">
          <? echo $GLOBALS['site_variables']['phone']; ?>
        </a></div>
      <? wp_nav_menu([
        'theme_location'  => 'header_menu',
        'menu'            => 'Русское меню',
        'container' => false,

      ]); ?>
      <div class="checkbox-group">
        <p>Язык:</p>

        <label for="ru">
          <img class="unchecked" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt="" hidden>
          <img class="checked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg"
            alt="">
          Русский

          <input type="checkbox" name="ru" id="ru" checked>
        </label>

        <label for="en">
          <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt="">
          <img class="checked" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt=""
            hidden>
          English

          <input type="checkbox" name="en" id="en">
        </label>

        <label for="su">
          <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt="">
          <img class="checked" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt=""
            hidden>
          Suomi

          <input type="checkbox" name="su" id="su">
        </label>

        <label for="china">
          <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt="">
          <img class="checked" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt=""
            hidden>
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
                <h1>
                  <? echo $slide['title']; ?>
                </h1>
              </div>
            </div>
            <div class="booking-request__wrapper">
              <a data-target="booking" href="#" class="booking-request">
                <? echo carbon_get_post_meta($page_id, 'button_text'); ?>
              </a>
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
          foreach ($news_slider as $slide_img_id) :
            $slide_src = wp_get_attachment_image_url($slide_img_id, 'full');
          ?>
          <div class="news__item">
            <img loading="lazy" height="200" src="<? echo $slide_src ?>">
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
            <? $rooms = carbon_get_post_meta($page_id, 'rooms');
            $rooms_ids = wp_list_pluck($rooms, 'id');
            $args = [
              'post_type' => 'room',
              'post_in' => $rooms_ids
            ];
            $rooms_query = new WP_Query($args);

            if ($rooms_query->have_posts()) :

              while ($rooms_query->have_posts()) : $rooms_query->the_post();
              $room_id = get_the_ID();
              $room_gallery_ids = carbon_get_post_meta($room_id, 'room_gallery');
              foreach ($room_gallery_ids as $value) {
                $room_gallery_ids_string .= $value . ',';
              }
              ?>

            <div class="room-card" data-room-id="<? echo $room_id;?>">
              <p class="room-card__title">
                <? the_title(); ?>
              </p>
              <div class="room-card__img-wrapper">
                <img class="room-card__img"
                  src="<? echo get_template_directory_uri(); ?>/assets/img/app-1-188x126 1.png" alt="room-1">
              </div>
              <span class="room-card__description">Стоимость: <span class="room-card__price">
                  <? echo carbon_get_post_meta($room_id, 'room_price'); ?> €</span></span>
              <span class="room-card__description">Кол-во человек: 
              <span class="room-card__persons"><? echo carbon_get_post_meta($room_id, 'room_person'); ?></span></span>
              <a 
                data-target="booking"
                data-id="<?echo $room_id;?>" 
                class="room-card__request-btn" 
                href="#"
               >
                  заявка на бронирование
                </a>
            </div>

            <?php endwhile;

              wp_reset_postdata();

            endif; ?>
          </div>
        </div>

        <?php echo carbon_get_post_meta($page_id, 'rooms_description'); ?>
      </div>
    </section>

    <section id="services" class="services">
      <div class="content-wrapper">
        <h2>
          <? echo carbon_get_post_meta($page_id, 'services_title'); ?>
        </h2>

        <div class="services__items-wrapper">
          <? echo carbon_get_post_meta($page_id, 'services_items'); ?>
        </div>
        <h2>
          <? echo carbon_get_post_meta($page_id, 'services_paid_title'); ?>
        </h2>
        <div class="services__items-wrapper paid">

          <? echo carbon_get_post_meta($page_id, 'services_paid_items'); ?>

        </div>
      </div>
    </section>

    <section class="group" id="group">
      <img class="group__bg-img-1" src="<? echo get_template_directory_uri(); ?>/assets/img/group-bg-1.png">
      <img class="group__bg-img-2" src="<? echo get_template_directory_uri(); ?>/assets/img/group-bg-2.png">
      <img class="group__bg-img-3" src="<? echo get_template_directory_uri(); ?>/assets/img/group-bg-3.png">
      <div class="content-wrapper">
        <h2>
          <? echo carbon_get_post_meta($page_id, 'group_title'); ?>
        </h2>
        <h3>
          <? echo carbon_get_post_meta($page_id, 'group_subtitle'); ?>
        </h3>
        <div class="group__content">
          <? echo carbon_get_post_meta($page_id, 'group_items'); ?>
        </div>
      </div>
    </section>

    <section class="gallery" id="gallery">
      <h2>
        <? echo carbon_get_post_meta($page_id, 'gallery_title'); ?>
      </h2>
      <div class="gallery__container">
        <? $gallery = carbon_get_post_meta($page_id, 'gallery');
        foreach ($gallery as $img_id) :
          $img_src = wp_get_attachment_image_url($img_id, 'full');
        ?>
        <a class="grid-item" data-fslightbox href="<? echo $img_src; ?>">
          <figure><img class="gallery__item" src="<? echo $img_src; ?>" alt=""></figure>
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
        <h2>
          <? echo carbon_get_post_meta($page_id, 'contacts_title'); ?>
        </h2>
        <div class="contacts__wrapper">
          <div class="left">
            <div class="contacts__main">
              <h3>
                <? echo carbon_get_post_meta($page_id, 'contacts_subtitle'); ?>
              </h3>
              <span>Наш адрес:
                <? echo $GLOBALS['site_variables']['site_adress']; ?>
              </span>
              <span>Е-Mail: <a href="mailto:<? echo $GLOBALS['site_variables']['site_email']; ?>">
                  <? echo $GLOBALS['site_variables']['site_email']; ?>
                </a></span>
              <span>Телефоны: <a class="phone-link" href="tel:<? echo $GLOBALS['site_variables']['phone_digits']; ?>">
                  <? echo $GLOBALS['site_variables']['phone']; ?>
                </a></span>
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
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4569.4820769450125!2d27.948675380725998!3d61.21440504573968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46908fb09c82ea3f%3A0x9337606d743d48dc!2sLakehouse%20Saimaa%20B%26B!5e0!3m2!1sru!2sru!4v1620663471967!5m2!1sru!2sru"
                width="100%" height="100%" style="border: 2px solid #65B1EF;filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
              border-radius: 10px;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <? echo get_template_part( 'modal-content-ru' ) ?> 
  <footer></footer>
  <? wp_footer(); ?>
</body>

</html>