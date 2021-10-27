export default function() {
    window.openModal = (el) => {
        document.getElementById(el).classList.add('is-flex');
        window.html.classList.add('is-clipped');
    }

    window.closeModal = (el) => {
        console.log(el)
        el.closest('.modal').classList.remove('is-flex');
        window.html.classList.remove('is-clipped');
    }
}