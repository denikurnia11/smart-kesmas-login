<?php

include '../koneksi.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = sha1($_POST['password']);

$sql = "INSERT INTO user VALUES ('','$name','$email','$password')";

if (mysqli_query($koneksi, $sql)) {
    echo "<h1>Email $email berhasil terdaftar</h1>
          <a href='../views/auth/login.php'>Kembali Login</h1>
       ";
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
}
