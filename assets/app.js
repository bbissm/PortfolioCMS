/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.scss in this case)
import './styles/app.scss';

import Swiper, { SwiperOptions, Keyboard, Pagination, Virtual, Navigation, Autoplay, Manipulation } from 'swiper';

import Sortable from 'sortablejs';
import {hide} from "bulma-extensions/bulma-carousel/src/js/utils/css";

const sections = document.querySelectorAll('section.section');
const links = document.querySelectorAll('a[href^="#"]');
const html = document.getElementsByTagName('html')[0];
const progressBars = document.querySelectorAll('.progress');
const attachments = document.querySelectorAll('.attachment');
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


if (document.querySelector('.has-swiper') !== null) {
    document.querySelectorAll('.has-swiper').forEach(hasSwiper => {
        const container = hasSwiper.querySelector('.swiper');
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
if (attachments) {
    const form = document.getElementsByTagName('form')[0]
    if (form) {
        const formName = form.getAttribute('name');
        // Async attachment
        attachments.forEach(attachment => {
            // click on overlay while hovering
            attachment.nextElementSibling.addEventListener('click', function (e) {
                if (confirm('Are you sure?')) {
                    let id = attachment.dataset.id;
                    fetch(`${formName}/attachment/delete/${id}`, {
                        method: 'POST'
                    }).then(response => window.location.reload())
                }
            })
        })
    }
}


//Sortable js
let attachmentContainer = document.getElementById('sortableAttachment');
if (attachmentContainer) {
    new Sortable(attachmentContainer, {
        animation: 150,
        ghostClass: 'blue-background-class',
        dataIdAttr: 'data-id',
        draggable: '.draggable',
        onStart: function (event) {

        },
        onEnd: function (event) {

            let draggableItem = event.target.querySelectorAll('.draggable');
            let i = 0;
            draggableItem.forEach(item => {
                item.dataset.sorting = i++;
            })
            i = 0;
            draggableItem.forEach(item => {
                i++;
                let sorting = item.dataset.sorting;
                let id = item.dataset.id;
                fetch(`/attachment/${sorting}/sort/${id}`, {
                    method: 'POST',
                }).then(response => {})
                if (draggableItem.length - 1 === i){
                    attachmentContainer.insertAdjacentHTML('beforebegin','<p class="notification mb-5 mt-5">Sortierung gespeichert!</p>');
                    setTimeout( function () {
                        attachmentContainer.previousElementSibling.classList.add('fade-out');
                    },1000)
                    setTimeout( function () {
                        attachmentContainer.previousElementSibling.remove();
                    },2000)
                }
            })


        }
    })
}


let sectionContainer = document.getElementById('sortableSection');
if (sectionContainer) {
    new Sortable(sectionContainer, {
        animation: 150,
        ghostClass: 'blue-background-class',
        draggable: '.sortable',
        onStart: function (event) {

        },
        onEnd: function (event) {
            let draggableItem = event.target.querySelectorAll('.sortable');
            let i = 0;
            draggableItem.forEach(item => {
                item.dataset.sorting = i++;
            })
            i = 0;
            draggableItem.forEach(item => {
                i++;
                let sorting = item.dataset.sorting;
                let id = item.dataset.id;
                fetch(`/section/${id}/sort/${sorting}`, {
                    method: 'POST',
                }).then(response => {})
            })
        }
    })

}
