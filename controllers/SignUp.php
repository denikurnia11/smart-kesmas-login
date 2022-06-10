<?php
session_start();
include '../koneksi.php';
require_once '../models/UserModel.php';
$UserModel = new UserModel();

$name = $_POST['name'];
$email = $_POST['email'];
$password = sha1($_POST['password']);

if ($UserModel->save($name, $email, $password, 'user')) {
    $_SESSION['regis'] = true;
    header('Location: ../views/home.php');
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
}
