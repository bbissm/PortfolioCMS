export default function() {
    const links = document.querySelectorAll('a[href^="#"]');
    //Helper functions
    const scrollToEl = (hash) => {
        const element = document.querySelector(hash);
        const to = element.getBoundingClientRect().top + window.scrollY + 180
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
//scroll to container after link click
    links.forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault();
            scrollToEl(link.getAttribute('href'));
        })
    });

//scroll to container after page reload
    window.addEventListener('load',function (e) {

        if (window.matchMedia('(max-width:768px').matches) {
            document.getElementById('sortableSection').id = '';
        }
        if (location.hash) scrollToEl(location.hash);
    })
    const sections = document.querySelectorAll('section.animation');
    const navigation = document.getElementById('nav');

    document.addEventListener('scroll', function (e) {

        // display toTopButton after scroll
        const toTopButton = document.querySelector('.toTopContainer');
        if (window.scrollY > 0) {
            toTopButton.classList.remove('is-hidden');
            navigation.classList.add('is-scrolled');
        }else{
            navigation.classList.remove('is-scrolled');
            toTopButton.classList.add('is-hidden');
        }
        let observer = new IntersectionObserver (function (entries, observer) {
            entries.forEach(function(entry) {
                let container = entry.target;

                container.classList.remove('current');
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
}
