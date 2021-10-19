export default function() {
    document.querySelectorAll('.add_item_link').forEach(btn => btn.addEventListener("click", function(e) {
        addFormToCollection(e);
    }));
    const addContentFormDeleteLink = (contentFormDiv) => {
        const removeFormButton = document.createElement('button')
        removeFormButton.classList.add('button')
        removeFormButton.classList.add('mb-5')
        removeFormButton.classList.add('is-danger')
        removeFormButton.innerText = 'Delete this content'
        contentFormDiv.append(removeFormButton);
        removeFormButton.addEventListener('click', (e) => {
            e.preventDefault()
            // remove the li for the content form
            contentFormDiv.remove();
        });
    }
    let index = 1;
    document.querySelectorAll('.contentSection').forEach(content => {
        addContentFormDeleteLink(content);
        content.querySelector('h3').insertAdjacentHTML('afterbegin', index+++'. ');
    })
    const addFormToCollection = (e) => {
        const collectionHolder = document.querySelector('.' + e.target.dataset.collectionHolderClass);
        let item = collectionHolder.dataset.prototype.replace(/__name__/g,collectionHolder.dataset.index);
        collectionHolder.insertAdjacentHTML('beforeend', item);
        const addedItem = collectionHolder.querySelector('.contentSection:last-child');
        collectionHolder.dataset.index++;
        let index = document.querySelectorAll('.contentSection').length;
        addedItem.querySelector('h3').insertAdjacentHTML('afterbegin', index+'. ');
        addContentFormDeleteLink(addedItem);
    };
}
