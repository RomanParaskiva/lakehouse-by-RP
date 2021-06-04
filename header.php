<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>



  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<? echo get_template_directory_uri(); ?>/assets/css/flexmasonry.css">
  <link rel="stylesheet" type="text/css" href="<? echo get_template_directory_uri(); ?>/assets/css/daterangepicker.css" />
  <link rel="stylesheet" href="<? echo get_template_directory_uri(); ?>/style.css" />
    <script>
        let WPJS ={}
        WPJS.siteUrl = '<? echo get_template_directory_uri(); ?>'
    </script>
</head>

<body>
  <header>
    <div class="header__menu-btn">
      <img loading="lazy" src="<? echo get_template_directory_uri(); ?>/assets/img/menu-btn.svg" width="30" height="30" />
    </div>
    <div id="sidebar-menu">
      <ul>
        <li>
          <div class="close-menu-btn"><img src="<? echo get_template_directory_uri(); ?>/assets/img/close-btn.png" loading="lazy" width="25" height="25"></div>
        </li>
        <li class="menu-link phone"><a href="tel:+358458886058">+358 45 888 6058</a></li>
        <li class="menu-link"><a href="#about">О нас</a></li>
        <li class="menu-link"><a href="#rooms">Номера</a></li>
        <li class="menu-link"><a href="#services">Услуги</a></li>
        <li class="menu-link"><a href="#group">Для групп</a></li>
        <li class="menu-link"><a href="#gallery">Фотогалерея</a></li>
        <li class="menu-link"><a href="#contacts">Контакты</a></li>
        <li class="checkbox-group">
          <div>
            <p>Язык:</p>

            <label for="ru">
              <img class="unchecked" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt="" hidden> 
              <img class="checked show"
                src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="" >
              Русский

              <input type="checkbox" name="ru" id="ru" checked>
            </label>

            <label for="en">
              <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> 
              <img class="checked"
                src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="" hidden>
              English

              <input type="checkbox" name="en" id="en">
            </label>

            <label for="su">
              <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> 
              <img class="checked"
                src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="" hidden>
              Suomi

              <input type="checkbox" name="su" id="su">
            </label>

            <label for="china">
              <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> 
              <img class="checked"
                src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="" hidden>
              China
              <input type="checkbox" name="china" id="china">
            </label>
          </div>
        </li>
      </ul>
    </div>
  </header>