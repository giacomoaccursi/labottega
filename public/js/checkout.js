

function validate_form() {
    'use strict'
    window.addEventListener('load', function () {
        var forms = document.getElementsByClassName('needs-validation')
        Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    }, false)
}

$(document).ready(function () {
    validate_form();
    $("form#checkout-form").submit(function (e) {
        e.preventDefault();
        const nome = $("#nome").val();
        const cognome = $("#cognome").val();
        const indirizzo = $("#indirizzo").val();
        const citta = $("#città").val();
        const stato = $("#stato").val();
        const cap = $("#cap").val();
    });
});