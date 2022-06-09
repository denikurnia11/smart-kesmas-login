<?php
session_start();
// Cek Login
if ($_SESSION['isLoggedIn'] == false) {
    header('location:auth/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Kesmas</title>
    <link rel="stylesheet" href="../assets/css/home.css">
    <script src="../assets/js/script.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@700&family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>
    <!-- navigasi -->
    <nav>
        <!-- logo -->

        <div class="countener">
            <div class="logo">
                <a href="#">
                    <table>
                        <tr>
                            <td class="smart"> Smart</td>
                            <td class="kesmas"> KESMAS</td>
                        </tr>
                    </table>
                </a>
            </div>
            <!-- menu -->
            <a href="#" class="tombol-menu">
                <span class="garis"></span>
                <span class="garis"></span>
                <span class="garis"></span>
            </a>
            <div class="menu">
                <ul>
                    <li><a href="Home.html">Home</a></li>
                    <li><a href="halaman 2/halaman2.html">Information</a></li>
                    <li><a href="halaman 3/halaman3.html">Queuard</a></li>
                    <li><a href="../controllers/Logout.php" class="logout">Logout</a></li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- Isi halaman -->
    <div class="countener">
        <!-- konten 1 -->
        <section>
            <img src="../assets/img/gambar 1.png" alt="image">
            <div class="konten">
                <h2> Informasi Covid-19 dan Vaksinasi</h2>
                <p> Dapatkan berbagai informasi covid-19, penyebab, gejala, cara penjegahan serta informasi
                    persyaratan vaksinasi, anda juga dapat melakukan pendaftaran vaksinasi melalu website ini.
                </p>
                <p><a href="halaman 2/halaman2.html" class="tombol-biru"> Read More </a></p>
            </div>
        </section>

        <!-- konten 2 -->
        <section>
            <div class="konten">
                <h2> Pelayanan Administrasi Puskesmas </h2>
                <p> Pendaftaran nomor antrian pasien melalui website ini dengan
                    mudah
                </p>
                <p><a href="halaman 3/halaman3.html" class="tombol-biru"> Click here </a></p>
            </div>
            <img src="../assets/img/gambar 2.png" alt="image">
        </section>

        <!-- footer -->
        <div id="about">
            <div class="countener">
                <div class="footer">
                    <div class="footer-section1">
                        <h3>About</h3>
                        <p class="paragraf"> Misi kami memberikan masyarakat pelayanan
                            terbaik dari kami dan memberikan kemudahan kepada masyarakat.
                            <br>
                            <br>
                            Kami percaya dengan adanya website Smart Kesmas, dapat memberi
                            kemudahan kepada masyarakat dalam melakukan administrasi ketika
                            melakukan pengobatan dipuskesmas. Dengan adanya website Smart kesmas
                            pasien dapat melakukan pendaftaran nomor antrian dimana pun terlebih dahulu
                            sebelum ke puskesmas sehinggah tidak perlu menunggu terlalu lama.
                            Website Smart Kesmas juga menyediakan fitur informasi yang dapat
                            di akses oleh semua orang.
                        </p>
                    </div>

                    <div class="footer-section">
                        <h3>Alamat</h3>
                        <p class="paragraf"> Jalan Poros Makassar-Palopo, Desa Bakti,
                            Kec. Ponrang Selatan, kab. Luwu, Prov. Sulawesi Selatan
                        </p>
                    </div>

                    <div class="footer-section">
                        <h3>Sosial</h3>
                        <table class="paragraf1">
                            <tr>
                                <td>Instagram </td>
                                <td>:@puskesBakti</td>
                            </tr>
                            <tr>
                                <td>Facebook </td>
                                <td>:baktupuskesta</td>
                            </tr>
                            <tr>
                                <td>website </td>
                                <td><a href="#"> :Smart Kesmas </a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- copyright -->
        <div id="copyright">
            <div class="countener">
                &copy;2022. <b>Smart Kesmas.</b> All Right Reserved
            </div>
        </div>
    </div>
</body>

</html>