export default function () {
    const attachments = document.querySelectorAll('.attachment');
    if (attachments) {
        const form = document.getElementsByTagName('form')[0]
        if (form) {
            const formName = form.getAttribute('name');
            // Async attachment
            attachments.forEach(attachment => {
                // click on overlay while hovering
                attachment.nextElementSibling.addEventListener('click', function (e) {
                    if (confirm('Are you sure?')) {
                        let id = attachment.dataset.id;
                        fetch(`${formName}/attachment/delete/${id}`, {
                            method: 'POST'
                        }).then(response => window.location.reload())
                    }
                })
            })
        }
    }
}
