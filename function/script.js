$(document).ready(function() {

    $(".registration-form").submit(function(e) {
        e.preventDefault(); // Prohibit standard form submission
        var name = $("#name").val();
        var surname = $("#surname").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var confirmPassword = $("#confirm-password").val();

        // Validation on the client side
        if (email.indexOf('@') === -1) {
            $("#message").html("Email must contain @");
            return;
        }
        if (password !== confirmPassword) {
            $("#message").html("The passwords don't match");
            return;
        }

        // Sending data to the server using AJAX
        $.ajax({
            type: "POST",
            url: "action.php", // File for processing on the server
            data: {
                name: name,
                surname: surname,
                email: email,
                password: password
            },
            success: function(response) {
                if (response === "success") {
                    $(".registration-form").hide();
                    $("#message").html("Registration is successful!");
                } else {
                    $("#message").html("Server error: " + response);
                }
            }
        });
    });
});
