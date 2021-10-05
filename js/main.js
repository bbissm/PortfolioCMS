const elements = document.querySelectorAll('section.section');
const links = document.querySelectorAll('a[href^="#"]');
const html = document.getElementsByTagName('html')[0];
const progressBars = document.querySelectorAll('.progress');

scrollToEl = (to) => {
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

// scrolling inside container to be displayed with animation
isScrolledIntoView = (el) => {
    let rect = el.getBoundingClientRect();
    let elemTop = rect.top;
    let elemBottom = rect.bottom;
    // Only completely visible elements return true:
    // let isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
    // Partially visible elements return true:
    let isVisible = elemTop < window.innerHeight && elemBottom >= 0;
    return isVisible;
}

openPopup = (el) => {
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
closePopup = (el) => {
    const flip = el.closest('.modal').previousElementSibling;
    const modal = el.closest('.modal');
    modal.classList.remove('is-active');
    flip.classList.remove('is-active');
    html.classList.remove('is-clipped');
}

switchProject = (el, to) => {
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

initProgressBar = () => {
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

//scroll to container after link click
links.forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();
        let element = document.querySelector(link.getAttribute('href'));
        scrollToEl(element.getBoundingClientRect().top + window.scrollY - 150);
    })
});

document.addEventListener('scroll', function (e) {
    // display toTopButton after scroll
    const toTopButton = document.querySelector('.toTopContainer');
    if (window.scrollY > 0) {
        toTopButton.classList.remove('is-hidden');
    }else{
        toTopButton.classList.add('is-hidden');
    }


    elements.forEach(el => {
        if (el.classList.contains('current') === false) {
            if (isScrolledIntoView(el) == true) {
                el.classList.add('current');
            }
        }
        if (isScrolledIntoView(el) == false) {
            el.classList.remove('current');
        }
    })
})