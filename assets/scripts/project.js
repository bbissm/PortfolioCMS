export default function () {
    const progressBars = document.querySelectorAll('.progress');
    const sections = document.querySelectorAll('section.sortable');
    const projectContainer = document.getElementById('project');
    if (projectContainer) {
        // Global functions
        window.openPopup = (el,id) => {
            const flip = el.closest('.flip');
            const modal = projectContainer.querySelector('.modal_'+id);
            modal.classList.add('is-active'); // Opens modal

            //Quickhack only show arrows if theres a container next or prev
            projectContainer.querySelectorAll('.arrow-next:not(.prev)').forEach(next => {
                if (next.closest('.modal').nextElementSibling === null) {
                    next.classList.add('is-hidden');
                }
            })
            projectContainer.querySelectorAll('.arrow-next.prev').forEach(prev => {
                if (prev.closest('.modal').previousElementSibling.classList.contains('modal') === false) {
                    prev.classList.add('is-hidden');
                }
            })
            //Quickhack end

            initProgressBar(); //Progressbar animation


            modal.querySelector('.modal-card').style.animation = 'expand 0.3s ease'; //add animation to first open
            flip.classList.add('is-active'); // the project flip container in background should be still open
            window.html.classList.add('is-clipped'); // no background interaction while modal open
            sections.forEach(section => section.classList.remove('sortable'));
        }

        window.closePopup = (id) => {
            const modal = projectContainer.querySelector('.modal_'+id);
            const flip = projectContainer.querySelector('.project_'+id+' .flip');
            modal.classList.remove('is-active');
            flip.classList.remove('is-active');
            window.html.classList.remove('is-clipped');
            sections.forEach(section => section.classList.add('sortable'));
        }

        window.switchProject = (el, modalId, nodeId, to) => {
            const swiper = projectContainer.querySelector('.swiper').swiper;
            const projects = projectContainer.querySelectorAll('.projectEntry');
            const modals = projectContainer.querySelectorAll('.modal');
            let project = projectContainer.querySelector('.project_'+modalId);
            let flip = project.querySelector('.flip');

            let nextProject = projects.item(nodeId+1);
            let prevProject = projects.item(nodeId-1);
            let modal = projectContainer.querySelector('.modal_'+modalId);
            let nextModal = modals.item(nodeId+1);
            let prevModal = modals.item(nodeId-1);
            let modalcard = modal.querySelector('.modal-card');
            modalcard.style.animation = 'unset';

            initProgressBar();

            if (to == 'next') {
                swiper.slideNext();
                modal.classList.remove('is-active');
                flip.classList.remove('is-active');
                nextModal.classList.add('is-active');
                nextProject.querySelector('.flip').classList.add('is-active');

            }else if(to == 'prev'){
                swiper.slidePrev();
                modal.classList.remove('is-active');
                flip.classList.remove('is-active');
                prevModal.classList.add('is-active');
                prevProject.querySelector('.flip').classList.add('is-active');
            }
        }

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
    }
}
