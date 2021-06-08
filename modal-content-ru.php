<div class="modal__wrapper" id="modal">
  <div class="modal">
    <a href="#" class="modal__close">
      <img src="<? echo get_template_directory_uri(); ?>/assets/img/modal-close.svg" alt="">
    </a>

    <div class="modal__sidebar">

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
          $room_gallery_ids_string = [];
          foreach ($room_gallery_ids as $value) {
            array_push($room_gallery_ids_string, $value);
          }
      ?>

          <div class="modal__sidebar-room" data-id="<? echo $room_id;?>">
            <div class="modal__sidebar-header">
              <? the_title(); ?>
            </div>
            <!-- <div class="modal__sidebar-image"> -->
            <img src="<? echo wp_get_attachment_image_url($room_gallery_ids_string[0]); ?>" alt="<? the_title(); ?>">
            <!-- </div> -->
          </div>

        <? endwhile; ?>
    </div>

    <? while ($rooms_query->have_posts()) : $rooms_query->the_post();
          $room_id = get_the_ID();
          $room_gallery_ids = carbon_get_post_meta($room_id, 'room_gallery');
          $room_gallery_ids_string = [];
          
    ?>
      <div class="modal__body active" id="<?echo $room_id;?>" data-step="1">

        <div class="modal__body-header">
          <? the_title(); ?>
        </div>


        <div class="modal__body-slider owl-carousel owl-theme">
          <?
          foreach ($room_gallery_ids as $value) :?>
          <a data-fslightbox href="<? echo wp_get_attachment_image_url($value); ?>">
          <figure><img src="<? echo wp_get_attachment_image_url($value); ?>" alt="" height="300"></figure>
        </a>
          <? endforeach; ?>
        </div>


        <div class="modal__body-description-container">
          <h4>Описание номера:</h4>
          <span class="modal__body-desc">
          <? echo carbon_get_post_meta($room_id, 'room_description'); ?>
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
          <? echo carbon_get_post_meta($room_id, 'room_price'); ?> € / сутки
          </span>
        </div>

        <div class="modal__body-services paid">
          <h4>Дополнительные услуги:</h4>
          <div class="modal__paid-wrapper">
            <label for="breakfast">
              <input type="checkbox" name="breakfast" id="breakfast">
              <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">

              <span><span class="paid-service-name">Завтрак</span> - <span class="paid-service-price">8
                  €</span></span>
            </label>
            <label for="extraBed">
              <input type="checkbox" name="extraBed" id="extraBed">
              <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
              <span><span class="paid-service-name">Дополнительное спальное место</span> - <span class="paid-service-price">15 €</span></span>
            </label>
            <label for="babyCrib">
              <input type="checkbox" name="babyCrib" id="babyCrib">
              <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
              <span><span class="paid-service-name">Детская кроватка</span> - <span class="paid-service-price">бесплатно</span></span>
            </label>
            <label for="gasHearth">
              <input type="checkbox" name="gasHearth" id="gasHearth">
              <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
              <span><span class="paid-service-name">Газовый очаг</span> - <span class="paid-service-price">3 € /
                  час </span></span>
            </label>
            <label for="charcoal ">
              <input type="checkbox" name="charcoal " id="charcoal ">
              <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
              <span><span class="paid-service-name">Угли для гриля</span> - <span class="paid-service-price">5 € /
                  мешок</span></span>
            </label>
            <label for="grill">
              <input type="checkbox" name="grill" id="grill">
              <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
              <span><span class="paid-service-name">Гриль (разовый)</span> - <span class="paid-service-price">5 € /
                  комплект</span></span>
            </label>
            <label for="sauna">
              <input type="checkbox" name="sauna" id="sauna">
              <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
              <span><span class="paid-service-name">Сауна</span> - <span class="paid-service-price">15 € /
                  час</span></span>
            </label>
            <label for="electricStove">
              <input type="checkbox" name="electricStove" id="electricStove">
              <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt=""> <img class="checked" hidden src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
              <span><span class="paid-service-name">Электрическая плита</span> - <span class="paid-service-price">3
                  € / час</span></span>
            </label>
          </div>
        </div>

        <button data-step="2" title="далее" class="modal__btn-next">далее</button>
      </div>
    <? endwhile; ?>

  <? wp_reset_postdata();

      endif; ?>


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
        <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt="">
        <img class="checked" hidden src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
        <span>SMS</span>
      </label>
      <label class="chk-label" for="phoneCheck">
        <input type="checkbox" name="phoneCheck" id="phoneCheck">
        <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt="">
        <img class="checked" hidden src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
        <span>Телефон</span>
      </label>
      <label class="chk-label" for="emailCheck">
        <input type="checkbox" name="emailCheck" id="emailCheck">
        <img class="unchecked show" src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt="">
        <img class="checked" hidden src="<? echo get_template_directory_uri(); ?>/assets/img/checkbox-checked.svg" alt="">
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