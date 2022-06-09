<?php
session_start();
include '../koneksi.php';

$email = $_POST['email'];
$password = sha1($_POST['password']);

$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['isLoggedIn'] = true;
    header('Location: ../views/home.php');
} else {
    echo "<h2>Username atau Password Salah!</h2>";
}
