$(document).ready(function () {
    $('#registrationForm').on('submit', function (event) {
        event.preventDefault(); // Prevent default form submission

        $.ajax({
            type: 'POST',
            url: 'submit.php',
            data: $(this).serialize(),
            success: function (response) {
                $('#result').html(response); // Display the response in the result div
                $('#registrationForm')[0].reset(); // Reset the form
            },
            error: function (xhr, status, error) {
                $('#result').html('<p>Error: ' + error + '</p>');
            }
        });
    });
});
