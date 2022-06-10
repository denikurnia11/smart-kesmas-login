<?php
session_start();
include '../koneksi.php';
require_once '../models/VaksinModel.php';
$VaksinModel = new VaksinModel();

$nama = $_POST['nama'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$ttl = $_POST['ttl'];
$vaksin_ke = $_POST['vaksin_ke'];


if ($VaksinModel->save($nama, $nik, $alamat, $ttl, $vaksin_ke)) {
    $_SESSION['nama'] = $nama;
    $_SESSION['nik'] = $nik;
    $_SESSION['alamat'] = $alamat;
    $_SESSION['ttl'] = $ttl;
    $_SESSION['vaksin_ke'] = $vaksin_ke;
    $_SESSION['noAntrean'] = $VaksinModel->getJmlData();
    return header('Location: ../views/halaman2/halamanKartu/kartu.php');
} else {
    return "Pendaftaran Gagal : " . mysqli_error($koneksi);
}
