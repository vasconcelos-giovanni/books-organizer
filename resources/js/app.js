import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

//* -------------------------------------------------------------------------- */
//*                              Book View: create                             */
//* -------------------------------------------------------------------------- */

const bookForm = document.getElementById('book-form');
const deleteBooksForm = document.getElementById('delete-books-form');
const saveButton = document.getElementById('save-btn');
const massDeleteButton = document.getElementById('mass-delete-btn');

window.addEventListener('load', function () {
    console.log('Hello');
    if (saveButton) {
        saveButton.addEventListener(
            'click',
            function () {
                bookForm.submit();
            }
        );
    }
    if (massDeleteButton) {
        massDeleteButton.addEventListener(
            'click',
            function () {
                deleteBooksForm.submit();
            }
        );
    }
});

