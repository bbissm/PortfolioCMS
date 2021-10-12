import Swiper, { SwiperOptions, Keyboard, Pagination, Virtual, Navigation, Autoplay, Manipulation } from 'swiper';
export default function() {
    if (document.querySelector('.swiper') !== null) {
        document.querySelectorAll('.swiper').forEach(container => {
            // initialize swiper
            let imgSwiper = new Swiper('.swiper', /** @type {SwiperOptions} */  {
                modules: [Pagination, Keyboard, Virtual, Navigation, Autoplay],
                initialSlide: 0,
                slidesPerView: 1,
                centeredSlides: true,
                observer: true,
                observeParents: true,
                grabCursor: true,
                loop: true,
                autoplay: {
                    delay: 6000,
                    pauseOnMouseEnter: true,
                },
                keyboard: {
                    enabled: true,
                },
                navigation: {
                    nextEl: container.parentNode.querySelector('.swiper-button-next'),
                    prevEl: container.parentNode.querySelector('.swiper-button-prev'),
                },
                pagination: {
                    el: container.parentNode.querySelector('.swiper-pagination'),
                    type: 'bullets',
                    clickable: true,
                },
            });
        })
    }

    new Swiper('.project-swiper', {
        modules: [Pagination, Keyboard, Virtual, Navigation, Autoplay, Manipulation],
        spaceBetween: 10,
        allowTouchMove: false,
        autoplay: {
            delay: 6000,
            pauseOnMouseEnter: true,
        },
        /*keyboard: {
            enabled: true,
        },*/
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
            },
            // when window width is >= 480px
            768: {
                slidesPerView: 2,
            },
            // when window width is >= 640px
            1804: {
                centeredSlides: true,
                initialSlide: 0,
                slidesPerView: 3,
            }
        }
    });
}
