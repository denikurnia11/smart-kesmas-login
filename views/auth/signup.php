<?php
session_start();
// Cek Login
if (isset($_SESSION['isLoggedIn'])) {
    header('location:../home.php');
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Kesmas-Sign Up</title>
    <link rel="stylesheet" href="../../assets/css/sign up.css">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
    <script src="../../assets/js/sign up.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@700&family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>
    <div>
        <!-- form login -->
        <div class="content">
            <header>Sign Up</header>
            <form action="../../controllers/SignUp.php" method="post" name="form">

                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" required placeholder="Full Name" name="name">
                </div>

                <div class="field raider">
                    <span class="fa fa-user"></span>
                    <input type="email" required placeholder="Email  Address" name="email">
                </div>

                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" class="pass-key" required placeholder="Password" name="password">
                    <span class="show">
                        <i class="fa-solid fa-eye"></i>
                    </span>
                </div>

                <div class="failed">
                    <button type="submit">SIGN UP</button>
                </div>
            </form>

            <div class="login"> or connet with</div>
            <div class="links">
                <div class="google">
                    <a href="#">
                        <i class="fa-brands fa-google"><span>Google</span></i>
                    </a>
                </div>

                <div class="facebook">
                    <a href="#">
                        <i class="fab fa-facebook-f"><span>Facebook</span></i>
                    </a>
                </div>
            </div>

            <div class="signin">Already have an account?
                <a href="login.php">Sign In</a>
            </div>
        </div>
    </div>

</body>

</html>