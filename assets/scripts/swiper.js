import Swiper, { SwiperOptions, Keyboard, Pagination, Virtual, Navigation, Autoplay, Manipulation } from 'swiper';
export default function() {
    let swiperContainers = document.querySelectorAll('.has-swiper');
    if (swiperContainers.length > 0) {
        swiperContainers.forEach(swiperContainer => {
            let swiper = swiperContainer.querySelector('.swiper');
            if (swiper !== null) {
                let imgSwiper = new Swiper('.swiper', /** @type {SwiperOptions} */  {
                    modules: [Pagination, Keyboard, Virtual, Navigation, Autoplay],
                    initialSlide: 0,
                    slidesPerView: 1,
                    centeredSlides: true,
                    observer: true,
                    observeParents: true,
                    grabCursor: true,
                    loop: true,
                    keyboard: {
                        enabled: true,
                    },
                    navigation: {
                        nextEl: swiper.querySelector('.swiper-button-next'),
                        prevEl: swiper.querySelector('.swiper-button-prev'),
                    },
                    pagination: {
                        el: swiper.querySelector('.swiper-pagination'),
                        type: 'bullets',
                        clickable: true,
                    },
                    autoplay: {
                        delay: 3000,
                        pauseOnMouseEnter: true,
                    },
                    breakpoints: {
                        768: {
                            autoplay: {
                                delay: 6000,
                                pauseOnMouseEnter: true,
                            },
                        }
                    }
                });
            }
        })
    }
    new Swiper('.project-swiper', {
        modules: [Pagination, Keyboard, Virtual, Navigation, Autoplay, Manipulation],
        spaceBetween: 10,
        allowTouchMove: false,

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
                autoplay: {
                    delay: 6000,
                    pauseOnMouseEnter: true,
                }
            },
            // when window width is >= 640px
            1804: {
                centeredSlides: true,
                initialSlide: 0,
                slidesPerView: 3
            }
        }
    });
}
