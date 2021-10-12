//Sortable js
import Sortable from "sortablejs";
export default function () {
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
}
