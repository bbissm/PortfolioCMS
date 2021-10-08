/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.scss in this case)
import './styles/app.scss';

import Swiper, { SwiperOptions, Keyboard, Pagination, Virtual, Navigation, Autoplay, Manipulation } from 'swiper';

// start the Stimulus application
import bulmaAccordion from 'bulma-accordion/dist/js/bulma-accordion';

//let accordions = document.querySelectorAll('.accordions');
var accordions = bulmaAccordion.attach();
const grid = document.getElementById('skeletonGrid')
const entries = document.querySelectorAll('.entry');
const skeletonColumns = document.querySelectorAll('.skeletonColumn')
const sections = document.querySelectorAll('section.section');
const links = document.querySelectorAll('a[href^="#"]');
const html = document.getElementsByTagName('html')[0];
const progressBars = document.querySelectorAll('.progress');

// Global functions
window.openPopup = (el) => {
    const flip = el.closest('.flip');
    const modal = el.closest('.flip').nextElementSibling;

    //Quickhack only show arrows if theres a container next or prev
    document.querySelectorAll('.arrow-next:not(.prev)').forEach(next => {
        if (next.closest('.project').nextElementSibling === null) {
            next.classList.add('is-hidden');
        }
    })
    document.querySelectorAll('.arrow-next.prev').forEach(next => {
        if (next.closest('.project').previousElementSibling === null) {
            next.classList.add('is-hidden');
        }
    })
    //Quickhack end

    initProgressBar(); //Progressbar animation

    modal.classList.add('is-active'); // Opens modal
    modal.querySelector('.modal-card').style.animation = 'expand 0.3s ease'; //add animation to first open
    flip.classList.add('is-active'); // the project flip container in background should be still open
    html.classList.add('is-clipped'); // no background interaction while modal open
}

window.closePopup = (el) => {
    const flip = el.closest('.modal').previousElementSibling;
    const modal = el.closest('.modal');
    modal.classList.remove('is-active');
    flip.classList.remove('is-active');
    html.classList.remove('is-clipped');
}

window.switchProject = (el, to) => {
    let project = el.closest('.project');
    let nextProject = project.nextElementSibling;
    let prevProject = project.previousElementSibling;
    let modal = el.closest('.modal');
    let modalcard = el.closest('.modal-card');
    let flip = modal.previousElementSibling;
    modalcard.style.animation = 'unset';
    initProgressBar();

    if (to == 'next') {
        modal.classList.remove('is-active');
        flip.classList.remove('is-active');
        nextProject.querySelector('.modal').classList.add('is-active');
        nextProject.querySelector('.modal').previousElementSibling.classList.add('is-active');
    }else if(to == 'prev'){
        modal.classList.remove('is-active');
        flip.classList.remove('is-active');
        prevProject.querySelector('.modal').classList.add('is-active');
        prevProject.querySelector('.modal').previousElementSibling.classList.add('is-active');
    }
}

//Helper functions
const scrollToEl = (hash) => {
    const element = document.querySelector(hash);
    const to = element.getBoundingClientRect().top + window.scrollY - 69
    const start = window.scrollY || window.pageYOffset
    const time = Date.now()
    let speed = to > 0 ? 1 : 5; // if scroll to top
    let duration = Math.abs(start - to) / speed;
    const easeOutQuart = t => t*(2-t);

    (function step() {
        let dx = Math.min(1, (Date.now() - time) / duration)
        let pos = start + (to - start) * easeOutQuart(dx)

        window.scrollTo(0, pos)

        if (dx < 1) {
            window.requestAnimationFrame(step)
        }
    })()
};

const initProgressBar = () => {
    // First set progress to 0 for the animation to start from 0
    progressBars.forEach(progress => {
        progress.setAttribute('value', '0');
    })
    setTimeout(function() {
        progressBars.forEach(progress => {
            progress.setAttribute('value', progress.dataset.value);
        })
    }, 200);
}

// Helper listeners

//scroll to container after link click
links.forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();
        scrollToEl(link.getAttribute('href'));
    })
});

//scroll to container after page reload
window.addEventListener('load',function (e) {
    if (location.hash) scrollToEl(location.hash);

})

document.addEventListener('scroll', function (e) {
    // display toTopButton after scroll
    const toTopButton = document.querySelector('.toTopContainer');
    if (window.scrollY > 0) {
        toTopButton.classList.remove('is-hidden');
    }else{
        toTopButton.classList.add('is-hidden');
    }

    let observer = new IntersectionObserver (function (entries, observer) {
        entries.forEach(function(entry) {
            let container = entry.target;
            if (entry.isIntersecting) {
                container.classList.add('current');
                observer.unobserve(container);
            }
        });
    });
    sections.forEach(function (el){
        observer.observe(el)
    })
})


if (document.querySelector('.swiper') !== null) {
    document.querySelectorAll('.swiper').forEach(container => {
        // initialize swiper
        new Swiper('.swiper', /** @type {SwiperOptions} */  {
            modules: [Pagination, Keyboard, Virtual, Navigation, Autoplay, Manipulation],
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