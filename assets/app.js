/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.scss in this case)
import './scss/app.scss';

import Sortable from 'sortablejs';
import {hide} from "bulma-extensions/bulma-carousel/src/js/utils/css";
import SwiperSlide from './scripts/swiper';
import Modal from './scripts/modal';
import Functions from './scripts/functions';
import Attachment from './scripts/attachments';
import initSortable from './scripts/sortable';


SwiperSlide();
Modal();
Functions();
Attachment();
initSortable();


document.querySelectorAll('.add_item_link').forEach(btn => btn.addEventListener("click", function(e) {
    addFormToCollection(e);
}));


const addTagFormDeleteLink = (contentFormDiv) => {
    const removeFormButton = document.createElement('button')
    removeFormButton.classList.add('button')
    removeFormButton.classList.add('mb-6')
    removeFormButton.classList.add('is-danger')
    removeFormButton.innerText = 'Delete this content'

    contentFormDiv.append(removeFormButton);

    removeFormButton.addEventListener('click', (e) => {
        e.preventDefault()
        // remove the li for the content form
        contentFormDiv.remove();
    });
}

const contents = document.querySelectorAll('.contentSection')
contents.forEach((content) => {
    addTagFormDeleteLink(content)
})

const addFormToCollection = (e) => {
    const collectionHolder = document.querySelector('.' + e.target.dataset.collectionHolderClass);
    const item = document.createElement('div');
    console.log(collectionHolder)
    item.innerHTML = collectionHolder.dataset.prototype.replace(/__name__/g,collectionHolder.dataset.index);
    console.log(item)
    collectionHolder.appendChild(item);

    collectionHolder.dataset.index++;

    addTagFormDeleteLink(item);
};

