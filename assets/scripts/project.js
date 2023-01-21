import projectModal from "../app";

class ProjectModal {
    constructor() {
        this.openPopupBtns = document.querySelectorAll('.open-popup');
        this.switchProjectBtns = document.querySelectorAll('.switch-project');
        this.closePopupBtns = document.querySelectorAll('.close-popup');
        this.progressBars = document.querySelectorAll('.progress');
        this.sections = document.querySelectorAll('section.sortable');
        this.projectContainer = document.getElementById('project');
        this.addEventListeners();
    }

    init() {
        this.addEventListeners();
        this.initProgressBar();
    }
    addEventListeners() {
        this.openPopupBtns.forEach((btn) => {
            btn.addEventListener('click', (event) => {
                const id = event.target.dataset.id;
                this.openPopup(event.target, id);
            });
        });

        this.switchProjectBtns.forEach((btn) => {
            btn.addEventListener('click', (event) => {
                const id = event.target.dataset.id;
                const index = event.target.dataset.index;
                const direction = event.target.dataset.direction;
                this.switchProject(event.target, id, index, direction);
            });
        });
        this.closePopupBtns.forEach((btn) => {
            btn.addEventListener('click', (event) => {
                const id = event.target.dataset.id;
                this.closePopup(id);
            });
        });
    }

    openPopup(el, id) {
        const flip = el.closest('.flip');
        const modal = this.projectContainer.querySelector(`.modal_${id}`);
        modal.classList.add('is-active');

        //Quickhack only show arrows if theres a container next or prev
        this.projectContainer.querySelectorAll('.arrow-next:not(.prev)').forEach(next => {
            if (next.closest('.modal').nextElementSibling === null) {
                next.classList.add('is-hidden');
            }
        });
        this.projectContainer.querySelectorAll('.arrow-next.prev').forEach(prev => {
            if (prev.closest('.modal').previousElementSibling.classList.contains('modal') === false) {
                prev.classList.add('is-hidden');
            }
        });
        //Quickhack end

        this.initProgressBar();

        modal.querySelector('.modal-card').style.animation = 'expand 0.3s ease';
        flip.classList.add('is-active');
        window.html.classList.add('is-clipped');
        this.sections.forEach(section => section.classList.remove('sortable'));
    }

    closePopup(id) {
        const modal = this.projectContainer.querySelector(`.modal_${id}`);
        const flip = this.projectContainer.querySelector(`.project_${id} .flip`);
        modal.classList.remove('is-active');
        flip.classList.remove('is-active');
        window.html.classList.remove('is-clipped');
        this.sections.forEach(section => section.classList.add('sortable'));
    }

    switchProject(el, id, index, direction) {
        const swiper = this.projectContainer.querySelector('.swiper').swiper;
        const projects = this.projectContainer.querySelectorAll('.projectEntry');
        const modals = this.projectContainer.querySelectorAll('.modal');
        console.log(id)
        console.log(this.projectContainer.querySelector(`.project_${id}`));
        let project = this.projectContainer.querySelector(`.project_${id}`);
        let flip = project.querySelector('.flip');

        let nextProject = projects.item(+index + 1);
        let prevProject = projects.item(+index - 1);
        let modal = this.projectContainer.querySelector(`.modal_${id}`);
        let nextModal = modals.item(+index + 1);
        let prevModal = modals.item(+index - 1);
        let modalcard = modal.querySelector('.modal-card');
        modalcard.style.animation = 'unset';
        this.initProgressBar();

        if (direction === 'next') {
            swiper.slideNext();
            modal.classList.remove('is-active');
            flip.classList.remove('is-active');
            nextModal.classList.add('is-active');
            nextProject.querySelector('.flip').classList.add('is-active');
        } else if (direction === 'prev') {
            swiper.slidePrev();
            modal.classList.remove('is-active');
            flip.classList.remove('is-active');
            prevModal.classList.add('is-active');
            prevProject.querySelector('.flip').classList.add('is-active');
        }
    }

    initProgressBar() {
        this.progressBars.forEach(progress => {
            progress.setAttribute('value', 0);
            const value = +progress.getAttribute('data-value');
            const duration = +progress.getAttribute('data-duration');

            const progressAnimation = setInterval(() => {
                let currentValue = +progress.getAttribute('value');
                if (currentValue >= value) {
                    clearInterval(progressAnimation);
                    return;
                }
                progress.setAttribute('value', currentValue + 1);
            }, duration / value);
        });
    }
}

export default ProjectModal;












