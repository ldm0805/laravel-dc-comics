import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])
//recupero i pulsanti con la classe
const deleteButtons = document.querySelectorAll('.confirm-delete-button[type="submit"]');

deleteButtons.forEach((button) => {
    button.addEventListender('click', function (event) {
        event.preventDefault(); //evitiamo che venga cancellato subito il record dal database
        //recupero il nome della pasta dal dataatribbute titolo
        const comicTitle = button.getAttribute('data-title');
        //recupero la modale creata attraverso l'id
        const modal = document.getElementById('delete-comic-modal');
        //creo una nuova modale con i metodi di bootstrap a partire da quella realizzata nel file modal_delete
        const bootstrapModal = new bootstrap.Modal(modal);
        //mostro la modale
        bootstrapModal.show();

        //mostrare titolo pastanel segnaposto
        const modalContent = modal.querySelector('modal-item-title');
        modalContent.textContent = comicTitle;
        //recupero il pulsante di cancellazione del record
        const deleteButton = modal.querySelector('confirm-delete');
        //metto in ascolto il pulsante per intercettare il click
        deleteButton.addEventListener('click', () => {
            button.parentElement.submit();
        })

    })
})