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
import Project from './scripts/project';
import Modal from './scripts/modal';
import Functions from './scripts/functions';
import Attachment from './scripts/attachments';
import initSortable from './scripts/sortable';
import collectionHelper from './scripts/formHelper';


//helpers variables
window.html = document.getElementsByTagName('html')[0];

collectionHelper();
Attachment();
initSortable();
SwiperSlide();
Project();
Modal();
Functions();
