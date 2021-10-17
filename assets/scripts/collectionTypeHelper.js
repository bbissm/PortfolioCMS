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

    const contents = document.querySelectorAll('.contentSection')
    contents.forEach((content) => {
        addContentFormDeleteLink(content)
    })

    const addFormToCollection = (e) => {
        const collectionHolder = document.querySelector('.' + e.target.dataset.collectionHolderClass);
        let item = collectionHolder.dataset.prototype.replace(/__name__/g,collectionHolder.dataset.index);
        collectionHolder.insertAdjacentHTML('beforeend', item);
        const addedItem = collectionHolder.querySelector('.contentSection:last-child');
        collectionHolder.dataset.index++;
        addContentFormDeleteLink(addedItem);
    };
}
