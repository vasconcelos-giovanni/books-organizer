import './bootstrap';

//* -------------------------------------------------------------------------- */
//*                              Book View: create                             */
//* -------------------------------------------------------------------------- */

const bookForm = document.getElementById('book-form');
const saveButton = document.getElementById('save-btn');
const cancelButton = document.getElementById('cancel-btn');

window.addEventListener('load', function () {
    console.log('Loaded');
    saveButton.addEventListener(
        'click',
        function () {
            bookForm.submit();
        }
    );
    cancelButton.addEventListener(
        'onclick',
        () => {
            window.location.href = '{{ route(\'books.index\') }}';
        }
    );
});
