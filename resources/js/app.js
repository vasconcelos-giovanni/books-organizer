import './bootstrap';

//* -------------------------------------------------------------------------- */
//*                              Book View: create                             */
//* -------------------------------------------------------------------------- */

const bookForm = document.getElementById('book-form');
const saveButton = document.getElementById('save-btn');

window.addEventListener('load', function () {
    console.log('{{ route(\'books.index\') }}');
    saveButton.addEventListener(
        'click',
        function () {
            bookForm.submit();
        }
    );
});
