<?php
session_start();
include '../../koneksi.php';


$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = sha1($_POST['password']);
$role = $_POST['role'];

mysqli_query($koneksi, "update user set nama='$name', email='$email',password='$password', role='$role' where id='$id'");
header('Location: ../../views/v_admin/pengguna.php');
