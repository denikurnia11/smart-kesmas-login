<?php
session_start();
include '../../koneksi.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = sha1($_POST['password']);
$role = $_POST['role'];

$sql = "INSERT INTO user VALUES ('','$name','$email','$password','$role')";

if (mysqli_query($koneksi, $sql)) {
    // $_SESSION['addPengguna'] = true;
    header('Location: ../../views/v_admin/pengguna.php');
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
}
