<?php
session_start();
include '../koneksi.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = sha1($_POST['password']);

$sql = "INSERT INTO user VALUES ('','$name','$email','$password','user')";

if (mysqli_query($koneksi, $sql)) {
    $_SESSION['regis'] = true;
    header('Location: ../views/home.php');
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
}
