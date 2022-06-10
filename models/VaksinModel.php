<?php

class VaksinModel
{

    public function save($nama, $nik, $alamat, $ttl, $vaksin_ke)
    {
        include '../koneksi.php';
        $sql = "INSERT INTO vaksinasi VALUES ('','$nama','$nik','$alamat','$ttl', '$vaksin_ke')";
        $save = mysqli_query($koneksi, $sql);
        return $save;
    }

    public function getJmlData()
    {
        include '../koneksi.php';
        return mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM vaksinasi"));
    }
}
