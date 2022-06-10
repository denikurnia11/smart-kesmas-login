<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Kesmas-Kartu Antrian Vaksinasi</title>
    <link rel="stylesheet" href="../../../assets/css/kartu.css">
    <script src="../../../assets/js/kartu.js" defer></script>
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
                    <li><a href="../../home.php">Home</a></li>
                    <li><a href="../halaman2.php">Information</a></li>
                    <li><a href="../halaman antrian/antrian.html">Queuard</a></li>
                    <li><a href="../../../controllers/Logout.php" class="logout">Logout</a></li>
                </ul>
            </div>

        </div>
    </nav>

    <div>
        <div class="content">
            <header>Nomor Antrian Anda</header>
            <header><?= $_SESSION['noAntrean']; ?></header>
            <form>
                <div class="field">
                    <label for="">Nama</label>
                    <label for="">: <?= $_SESSION['nama']; ?></label>
                </div>

                <div class="field space">
                    <label for="">NIK</label>
                    <label for="">: <?= $_SESSION['nik']; ?></label>
                </div>

                <div class="field space">
                    <label for="">Hari dan tanggal</label>
                    <label for="">: <?= $_SESSION['ttl']; ?></label>
                </div>

                <div class="field space">
                    <label for="">Jam</label>
                    <label for="">: 09.00 WITA</label>
                </div>

                <div class="field space">
                    <label for="">Vaksinasi ke</label>
                    <label for="">: <?= $_SESSION['vaksin_ke']; ?></label>
                </div>

                <div class="field space">
                    <label for="">Jenis Vaksinasi</label>
                    <label for="">: Sinovac</label>
                </div>

                <div class="failed">
                    <button type="submit">Cetak kartu</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>