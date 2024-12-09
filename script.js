$(document).ready(function () {
    $('#registrationForm').on('submit', function (event) {
        event.preventDefault(); // Prevent default form submission

        const formData = $(this).serialize(); // Serialize the form data
        window.location.href = 'complete.html?' + formData; // Redirect to the Complete page
    });
});
