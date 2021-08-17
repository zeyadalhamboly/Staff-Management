<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Staff Management-Login</title>
</head>

<body>

    <div class="container bg-white shadow-lg rounded w-50 p-4 mt-5 ">
        <h6 class="text-center mb-3">Manager Login</h6>
        <form id="login-form" method="post">
            <div class="mb-3">
                <input type="text" class="form-control" name="login_username" placeholder="Username">
                <span class="input-error"></span>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="login_password" placeholder="Password">
                <span class="input-error"></span>
            </div>
            <button type="submit" class="btn btn-dark d-block w-100">Login</button>
        </form>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(function() {
            // Handle Login Form Function
            $("#login-form").submit(function(e) {
                e.preventDefault(); // Block page refresh On Submit

                let formUsername = $("#login-form input[name='login_username']"),
                    formPassword = $("#login-form input[name='login_password']"),
                    formSubmit = $("#login-form button[type='submit']");

                // Start Form Validation

                if (formUsername.val() == "") { // Username Validation
                    formUsername.addClass("have-error")
                    formUsername.next().text("Username Required");
                } else {
                    formUsername.removeClass("have-error")
                    formUsername.next().empty()
                }

                if (formPassword.val() == "") { // Password Validation
                    formPassword.addClass("have-error")
                    formPassword.next().text("Password Required");
                } else {
                    formPassword.removeClass("have-error")
                    formPassword.next().empty()
                }

                // If All Fields Valid Make Ajax Request
                if (formUsername.val() !== "" && formPassword.val() !== "") {
                    $.ajax({
                        type: "POST",
                        url: "actions.php?action=login",
                        data: $(this).serialize(),
                        success: function(response) {

                        }
                    });
                }
            })
        })
    </script>
</body>

</html>