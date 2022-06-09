<?php
session_start();
include '../koneksi.php';

$email = $_POST['email'];
$password = sha1($_POST['password']);

$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['isLoggedIn'] = true;
    if ($result->fetch_array()['role'] == 'admin') {
        $_SESSION['role'] = 'admin';
        header('Location: ../views/v_admin/admin.php');
    } else {
        $_SESSION['role'] = 'user';
        header('Location: ../views/home.php');
    }
} else {
    $_SESSION['salah'] = true;
    header('Location: ../views/home.php');
}
