<?php
session_start();
include '../koneksi.php';

$email = $_POST['email'];
$password = sha1($_POST['password']);

$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($koneksi, $sql);
$data = $result->fetch_array();
if (mysqli_num_rows($result) > 0) {
    $_SESSION['isLoggedIn'] = true;
    if ($data['role'] == 'admin') {
        $_SESSION['role'] = 'admin';
        $_SESSION['name'] = $data['nama'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['jmlPengguna'] = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user"));
        header('Location: ../views/v_admin/admin.php');
    } else {
        $_SESSION['role'] = 'user';
        header('Location: ../views/home.php');
    }
} else {
    $_SESSION['salah'] = true;
    header('Location: ../views/home.php');
}
