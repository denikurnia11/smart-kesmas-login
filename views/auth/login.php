<?php
session_start();
// Cek Login
if (isset($_SESSION['isLoggedIn'])) {
    header('location:../home.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Kesmas-Login</title>
    <link rel="stylesheet" href="../../assets/css/login.css">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
    <script src="../../assets/js/login.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@700&family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>
    <div>
        <!-- form login -->
        <div class="content">
            <header>Login</header>
            <?php
            if (isset($_SESSION['salah'])) {
                echo '<div class="message">
                        <p>Email atau Password Salah!</p>
                    </div>';
            }
            if (isset($_SESSION['regis'])) {
                echo '<div class="message-regis">
                        <p>Registrasi Berhasil!</p>
                    </div>';
            }
            ?>
            <form action="../../controllers/CekLogin.php" method="post" name="form">
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="email" required placeholder="Email  Address" name="email">
                </div>

                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" class="pass-key" required placeholder="Password" name="password">
                    <span class="show">
                        <i class="fa-solid fa-eye"></i>
                        <!-- <i class="fa-solid fa-eye-slash"></i> -->
                    </span>
                </div>

                <div class="pass">
                    <a href="#">Forgot Password?</a>
                </div>

                <div class="checkbox">
                    <input type="checkbox" id="rememberme">
                    <label for="rememberme">Remember Me</label>
                </div>

                <div class="failed">
                    <!-- <input type="submit" value="LOGIN"> -->
                    <button type="submit">LOGIN</button>
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

            <div class="signup">Don't have account?
                <a href="signup.php">Sign Up</a>
            </div>
        </div>
    </div>


    <?php
    // Hapus session
    unset($_SESSION['salah']);
    unset($_SESSION['regis']);
    ?>
</body>

</html>