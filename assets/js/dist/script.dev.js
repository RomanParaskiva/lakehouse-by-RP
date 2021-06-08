"use strict";

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance"); }

function _iterableToArray(iter) { if (Symbol.iterator in Object(iter) || Object.prototype.toString.call(iter) === "[object Arguments]") return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = new Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } }

jQuery(document).ready(function ($) {
  $('.hero__slider-wrapper').owlCarousel({
    nav: true,
    lazyLoad: true,
    items: 1,
    loop: true,
    smartSpeed: 200,
    animateOut: 'fadeOut',
    mouseDrag: true,
    touchDrag: false,
    pullDrag: true
  });
  $(function () {
    $('.arrow-down').on('click', function (e) {
      $('html,body').stop().animate({
        scrollTop: $('#about').offset().top
      }, 1000);
      e.preventDefault();
    });
  });

  function setDots() {
    $(".news__slider-wrapper .owl-dots").removeClass('disabled');
  }

  $('.news__slider-wrapper').owlCarousel({
    loop: true,
    items: 1,
    onInitialized: setDots,
    onChanged: setDots,
    dots: true
  });
  var roomsContainer = $('.rooms__container ');
  roomsContainer.owlCarousel({
    loop: true,
    margin: 10,
    dots: true,
    onInitialized: setDots,
    onChanged: setDots,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      960: {
        items: 3
      },
      1200: {
        items: 3
      }
    }
  });
  roomsContainer.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY > 0) {
      roomsContainer.trigger('next.owl');
    } else {
      roomsContainer.trigger('prev.owl');
    }

    e.preventDefault();
  });
  var owl = $('.modal__body-slider');
  owl.owlCarousel({
    loop: true,
    items: 1,
    dots: true,
    nav: false,
    navText: ["", ""],
    lazyLoad: true,
    smartSpeed: 200,
    animateOut: 'fadeOut',
    mouseDrag: true,
    touchDrag: true,
    pullDrag: true
  }); // Go to the next item

  $('.modal__nav-next').on('click', function () {
    owl.trigger('next.owl.carousel');
  }); // Go to the previous item

  $('.modal__nav-prev').on('click', function () {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
  });
  $('input[name="daterange"]').daterangepicker({
    locale: {
      format: 'DD-MM-YY',
      "firstDay": 1
    },
    "startDate": moment(),
    "endDate": moment().add(7, 'day'),
    "minDate": moment(),
    "maxDate": moment().add(3, 'month'),
    "parentEl": ".date-input__wrapper",
    "drops": "auto",
    "alwaysShowCalendars": true,
    "autoUpdateInput": true,
    "autoApply": true,
    "opens": "center"
  }, function (start, end) {
    modalData['start'] = start.format('DD-MM-YYYY');
    modalData['end'] = end.format('DD-MM-YYYY');
  });
  $('input[name="daterange"]').click();
});
"use strict";

document.addEventListener('DOMContentLoaded', function () {
  var headerMenuBtn = document.querySelector('.header__menu-btn'),
      sidebarMenu = document.querySelector('#sidebar-menu'),
      closeMenuBtn = document.querySelector('.close-menu-btn'),
      requestBtns = _toConsumableArray(document.querySelectorAll('[data-target="booking"')),
      modal = document.querySelector('#modal'),
      modalSidebarItem = _toConsumableArray(modal.querySelectorAll('.modal__sidebar-room')),
      modalClose = document.querySelector('.modal__close'),
      sideBarChkbox = _toConsumableArray(document.querySelectorAll('.checkbox-group')),
      modalPeopleInputs = _toConsumableArray(modal.querySelectorAll('.modal__body-people-item'));

  var openModal = function openModal(el) {
    var modal = document.querySelector('#modal'),
        modalBodys = _toConsumableArray(modal.querySelectorAll('.modal__body'));

    if (el.dataset.id) {
      modalBodys.forEach(function (item) {
        if (el.dataset.id == item.id) {
          item.classList.add('active');
        } else {
          item.classList.remove('active');
        }
      });
    } else {
      modalBodys.forEach(function (item) {
        return item.classList.remove('active');
      });
      modalBodys[0].classList.add('active');
    }

    modal.style.display = 'flex';
    document.body.style.overflowY = 'hidden';
    handleModal(1);
  };

  try {
    requestBtns.forEach(function (item) {
      item.addEventListener('click', function (e) {
        e.preventDefault();
        openModal(e.target);
      });
    });
    modalSidebarItem.forEach(function (item) {
      item.addEventListener('click', function (e) {
        openModal(e.currentTarget);
        modalSidebarItem.forEach(function (item) {
          return item.classList.remove('active');
        });
        item.classList.add('active');
      });
    });
    modalClose.addEventListener('click', function (e) {
      e.preventDefault();
      modal.style.display = '';
      document.body.style.overflowY = '';
      handleModal(1);
    });
    modalPeopleInputs.forEach(function (item) {
      var input = item.querySelector('.people-input'),
          plus = item.querySelector('.people-plus'),
          minus = item.querySelector('.people-minus');
      plus.addEventListener('click', function (e) {
        input.value < 10 ? input.value++ : input.value = 10;
      });
      minus.addEventListener('click', function (e) {
        console.log(input.value);

        if (input.name == "peoples") {
          input.value > 1 ? input.value-- : 0;
        } else {
          input.value > 0 ? input.value-- : 0;
        }
      });
    });
    sideBarChkbox.forEach(function (item) {
      item.addEventListener('change', function (e) {
        showCheckedImg(e.target.name, document.querySelector('#sidebar-menu'));
        showUncheckedImg(e.target.name, document.querySelector('#sidebar-menu'));
      });
    });
  } catch (e) {}

  var showCheckedImg = function showCheckedImg(id, modal) {
    var parent = modal.querySelector("label[for=\"".concat(id, "\"]")),
        img = parent.querySelector('img.checked');
    img.classList.contains('show') ? img.classList.remove('show') : img.classList.add('show');
    img.hidden = !img.hidden;
  };

  var showUncheckedImg = function showUncheckedImg(id, modal) {
    var parent = modal.querySelector("label[for=\"".concat(id, "\"]")),
        img = parent.querySelector('img.unchecked');
    img.classList.contains('show') ? img.classList.remove('show') : img.classList.add('show');
    img.hidden = !img.hidden;
  };

  var handleModal = function handleModal(id) {
    var modalBody = modal.querySelector('.modal__body.active'),
        modalInputs = _toConsumableArray(modalBody.querySelectorAll('input[type="checkbox"]')),
        modalNextBtns = _toConsumableArray(modalBody.querySelectorAll('.modal__btn-next')),
        modalSendRequestBtn = modal.querySelector('.modal__send-request-btn'),
        modalData = {
      roomId: 1,
      grill: false,
      sauna: false,
      electricStove: false,
      charcoal: false,
      gasHearth: false,
      babyCrib: false,
      extraBed: false,
      breakfast: false,
      peoples: 2,
      childs: 0,
      animals: 0
    };

    var step = 1;

    var modalPeopleInputs = _toConsumableArray(modal.querySelectorAll('.modal__body-people-item'));

    modalPeopleInputs.forEach(function (item) {
      item.querySelector('input').value = modalData[item.querySelector('input').name];
    });
    modalInputs.forEach(function (item) {
      item.addEventListener('change', function (e) {
        showCheckedImg(e.target.name, modal);
        showUncheckedImg(e.target.name, modal);
        modalData[e.target.name] = e.target.checked;
      });
    });
    modalNextBtns.forEach(function (item) {
      item.addEventListener('click', function (e) {
        var id = e.target.dataset.step;

        if (item.classList.contains('step-2')) {
          modalPeopleInputs.forEach(function (item) {
            modalData[item.querySelector('input[type="number"]').name] = item.querySelector('input').value;
          });
          modalData['range'] = document.querySelector('.drp-selected').innerHTML;
        }

        var modalBodys = _toConsumableArray(modal.querySelectorAll('.modal__body'));

        modalBodys.map(function (item) {
          item.dataset.step == id ? item.classList.add('active') : item.classList.remove('active');
        });
        console.log(modalData);
      });
    });
    modalSendRequestBtn.addEventListener('click', function (e) {
      e.preventDefault();

      var form = modal.querySelector('form'),
          inputs = _toConsumableArray(form.querySelectorAll('input'));

      inputs.forEach(function (item) {
        if (item.type == "text" || item.type == "tel" || item.type == "email") {
          modalData[item.name] = item.value;
        }

        if (item.type == "checkbox") {
          modalData[item.name] = item.checked;
        }
      });
      var textarea = form.querySelector('textarea');
      modalData[textarea.name] = textarea.value;
      console.log(modalData);
    });
  };

  try {
    headerMenuBtn.addEventListener('click', function (e) {
      sidebarMenu.classList.add('show');
    });

    var menuItems = _toConsumableArray(sidebarMenu.querySelectorAll('.menu-item '));

    menuItems.forEach(function (item) {
      item.addEventListener('click', function (e) {
        sidebarMenu.classList.remove('show');
      });
    });
    closeMenuBtn.addEventListener('click', function (e) {
      sidebarMenu.classList.remove('show');
    });
    document.addEventListener('scroll', function () {
      var scrollTop = window.scrollY;

      if (scrollTop >= 100) {
        headerMenuBtn.classList.add('scroll');
      } else {
        headerMenuBtn.classList.remove('scroll');
      }
    });
  } catch (e) {}
});