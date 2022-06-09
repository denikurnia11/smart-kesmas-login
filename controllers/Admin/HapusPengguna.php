<?php
session_start();
include '../../koneksi.php';

$id = $_GET['id'];
$hapus = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM user where id ='$id'"));
mysqli_query($koneksi, "delete from user where id='$id'");
// $_SESSION['hapusPengguna'] = true;
$_SESSION['jmlPengguna'] = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user"));
header('Location: ../../views/v_admin/pengguna.php');
