
jQuery(document).ready(function($){   
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
            $('html,body').stop().animate({ scrollTop: $('#about').offset().top }, 1000);
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
    })

    const roomsContainer = $('.rooms__container ')

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
    })
    roomsContainer.on('mousewheel', '.owl-stage', function (e) {
        if (e.deltaY > 0) {
            roomsContainer.trigger('next.owl');
        } else {
            roomsContainer.trigger('prev.owl');
        }
        e.preventDefault();
    });

    const owl = $('.modal__body-slider')

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
    });
    // Go to the next item
    $('.modal__nav-next').on('click', function () {
        owl.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('.modal__nav-prev').on('click', function () {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl.trigger('prev.owl.carousel', [300]);
    })

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
        modalData['start'] = start.format('DD-MM-YYYY')
        modalData['end'] = end.format('DD-MM-YYYY')
    });

    $('input[name="daterange"]').click();

});
"use strict"

document.addEventListener('DOMContentLoaded', () => {
    const headerMenuBtn = document.querySelector('.header__menu-btn'),
        sidebarMenu = document.querySelector('#sidebar-menu'),
        closeMenuBtn = document.querySelector('.close-menu-btn'),
        requestBtns = [...document.querySelectorAll('[data-target="booking"')],
        modal = document.querySelector('#modal'),
        modalSidebarItem = [...modal.querySelectorAll('.modal__sidebar-room')],
        modalClose = document.querySelector('.modal__close'),
        sideBarChkbox = [...document.querySelectorAll('.checkbox-group')],
        modalPeopleInputs = [...modal.querySelectorAll('.modal__body-people-item')]

        const openModal = (el) => {
            const modal = document.querySelector('#modal'),
                modalBodys = [...modal.querySelectorAll('.modal__body')]
                if(el.dataset.id){
                    modalBodys.forEach(item => {
                        if(el.dataset.id == item.id){
                            item.classList.add('active')
                        } else {
                            item.classList.remove('active')
                        }
                    })
                } else {
                    modalBodys.forEach(item => item.classList.remove('active'))
                    modalBodys[0].classList.add('active')
                }
                
                modal.style.display = 'flex'
                document.body.style.overflowY = 'hidden'
                handleModal(1)
        }

    try {
        requestBtns.forEach(item => {
            item.addEventListener('click', e => {
                e.preventDefault()
                openModal(e.target)
            })
        })

        modalSidebarItem.forEach(item => {
            item.addEventListener('click', e => {
                openModal(e.currentTarget)
            modalSidebarItem.forEach(item => item.classList.remove('active'))
                item.classList.add('active')
            })
        })

        modalClose.addEventListener('click', e => {
            e.preventDefault()
            modal.style.display = ''
            document.body.style.overflowY = ''
            handleModal(1)
        })

        modalPeopleInputs.forEach(item => {
            const input = item.querySelector('.people-input'),
                plus = item.querySelector('.people-plus'),
                minus = item.querySelector('.people-minus')

            plus.addEventListener('click', e => {
                input.value < 10 ? input.value++ : input.value = 10
            })

            minus.addEventListener('click', e => {
                console.log(input.value)
                if (input.name == "peoples") {
                    input.value > 1 ? input.value-- : 0
                } else {
                    input.value > 0 ? input.value-- : 0
                }
            })
        })

        sideBarChkbox.forEach(item => {
            item.addEventListener('change', e => {
                showCheckedImg(e.target.name, document.querySelector('#sidebar-menu'))
                showUncheckedImg(e.target.name, document.querySelector('#sidebar-menu'))
            })
        })

        
    } catch (e) { }


    const showCheckedImg = (id, modal) => {
        const parent = modal.querySelector(`label[for="${id}"]`),
            img = parent.querySelector('img.checked')
        img.classList.contains('show') ? img.classList.remove('show') : img.classList.add('show')
        img.hidden = !img.hidden
    }

    const showUncheckedImg = (id, modal) => {
        const parent = modal.querySelector(`label[for="${id}"]`),
            img = parent.querySelector('img.unchecked')
        img.classList.contains('show') ? img.classList.remove('show') : img.classList.add('show')
        img.hidden = !img.hidden
    }

    const handleModal = (id) => {
      
      const modalBody = modal.querySelector('.modal__body.active'),
            modalInputs = [...modalBody.querySelectorAll('input[type="checkbox"]')],
            modalNextBtns = [...modalBody.querySelectorAll('.modal__btn-next')],
           
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
            }

        let step = 1

        const modalPeopleInputs = [...modal.querySelectorAll('.modal__body-people-item')]
            modalPeopleInputs.forEach(item => {
                item.querySelector('input').value = modalData[item.querySelector('input').name]
            })
           
        modalInputs.forEach(item => {
            item.addEventListener('change', e => {
                showCheckedImg(e.target.name, modal)
                showUncheckedImg(e.target.name, modal)
                modalData[e.target.name] = e.target.checked
            })
        })

        modalNextBtns.forEach(item => {
            item.addEventListener('click', e => {
                const id = e.target.dataset.step
                if (item.classList.contains('step-2')) {
                    modalPeopleInputs.forEach(item => {
                        modalData[item.querySelector('input[type="number"]').name] = item.querySelector('input').value
                    })
                    modalData['range'] = document.querySelector('.drp-selected').innerHTML
                }
                const modalBodys = [...modal.querySelectorAll('.modal__body')]
                modalBodys.map(item => {
                    item.dataset.step == id ? item.classList.add('active') : item.classList.remove('active')
                })
                console.log(modalData)
            })
        })

        modalSendRequestBtn.addEventListener('click', e => {
            e.preventDefault()
            const form = modal.querySelector('form'),
                inputs = [...form.querySelectorAll('input')]

                inputs.forEach(item => {
                    if(item.type == "text" || item.type == "tel" || item.type == "email"){
                        modalData[item.name] = item.value
                    } 

                    if(item.type == "checkbox"){
                        modalData[item.name] = item.checked
                    }                
                })

            const textarea = form.querySelector('textarea')
            modalData[textarea.name] = textarea.value

                console.log(modalData)
        })      


    }


    try {
        headerMenuBtn.addEventListener('click', e => {
            sidebarMenu.classList.add('show')
        })

        const menuItems = [...sidebarMenu.querySelectorAll('.menu-item ')]

        menuItems.forEach(item => {
            item.addEventListener('click', e => {
                sidebarMenu.classList.remove('show')
            })
        })

        closeMenuBtn.addEventListener('click', e => {
            sidebarMenu.classList.remove('show')
        })

        document.addEventListener('scroll', () => {
            let scrollTop = window.scrollY
            if (scrollTop >= 100) {
                headerMenuBtn.classList.add('scroll');
            } else {
                headerMenuBtn.classList.remove('scroll');
            }
        })
    } catch (e) { }
})

