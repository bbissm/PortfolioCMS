/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.scss in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';
import bulmaAccordion from 'bulma-accordion/dist/js/bulma-accordion';

//let accordions = document.querySelectorAll('.accordions');

var accordions = bulmaAccordion.attach();

const grid = document.getElementById('skeletonGrid')
const entries = document.querySelectorAll('.entry');
const skeletonColumns = document.querySelectorAll('.skeletonColumn')




entries.forEach(entry => {
    entry.classList.remove('is-hidden');
    /*skeletonColumns.forEach(skeletonColumn => {
        skeletonColumn.querySelector('[data-title]').textContent = entry.querySelector('[data-title]').textContent
        skeletonColumn.querySelector('[data-body]').textContent = entry.querySelector('[data-body]').textContent
        console.log(entry.querySelector('[data-image]'));
        skeletonColumn.querySelector('[data-image]').textContent = entry.querySelector('[data-image]')
        grid.append(skeletonColumn)
    })*/
})

skeletonColumns.forEach(skeletonColumn => {
    skeletonColumn.classList.add('is-hidden');
})

window.addEventListener("DOMContentLoaded", () => {
});

