//Sortable js
import Sortable from "sortablejs";
export default function () {
    let attachmentContainer = document.getElementById('sortableAttachment');
    if (attachmentContainer !== null) {
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

    const sectionContainer = document.getElementById('sortableSection');
    console.log(sectionContainer)
    if (sectionContainer !== null && !window.matchMedia('(max-width:768px').matches) {
        new Sortable(sectionContainer, {
            animation: 150,
            ghostClass: 'blue-background-class',
            draggable: '.sortable',
            onStart: function (event) {

            },
            onEnd: function (event) {
                let draggableItem = event.target.querySelectorAll('.sortable');
                let i = 0;

                // First set correct sorting
                draggableItem.forEach(item => {
                    item.dataset.sorting = i++;
                })
                i = 0;
                // then send sorting to server
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
