<?php

class UserModel
{
    public function save($name, $email, $password, $role)
    {
        include '../koneksi.php';
        $sql = "INSERT INTO user VALUES ('','$name','$email','$password','$role')";
        $save = mysqli_query($koneksi, $sql);
        return $save;
    }

    public function getJmlData()
    {
        include '../koneksi.php';
        return mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user"));
    }
}
