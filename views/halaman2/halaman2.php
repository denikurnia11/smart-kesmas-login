<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Kesmas-Informasi Covid-19 dan Vaksinasi</title>
    <link rel="stylesheet" href="../../assets/css/halaman2.css">
    <script src="../../assets/js/halaman2.js" defer></script>
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
                    <li><a href="../Home.html">Home</a></li>
                    <li><a href="halaman2.html">Information</a></li>
                    <li><a href="../halaman 3/halaman3.html">Queuard</a></li>
                    <li><a href="../../controllers/Logout.php" class="logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="countener">
        <section>
            <div class="konten">
                <div class="info">
                    <div class="informasi1">
                        <img class="gambar1" src="img/gambar 1.png" alt="image">
                        <a href="#">Covid-19</a>
                        <p class="paragraf">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit libero saepe esse architecto non illo quo minus quam. Enim
                            cum dolor delectus quaerat explicabo sed excepturi error odit est mollitia.
                        </p>
                    </div>

                    <div class="informasi">
                        <img class="gambar2" src="img/gambar 2.png" alt="image">
                        <div class="khusus">
                            <a href="#">Gejala Covid-19</a>
                            <p class="paragraf">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ex corrupti esse. Quis sunt quidem provident nemo labore
                                voluptates. Nulla iure in sapiente debitis fuga saepe tempora aut inventore nihil.
                            </p>
                        </div>
                    </div>

                    <div class="informasi">
                        <img class="gambar3" src="img/gambar 3.jpg" alt="image">
                        <div class="khusus">
                            <a href="#">Cara Pencegahan Covid-19</a>
                            <p class="paragraf">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus modi doloribus ab itaque praesentium consequatur
                                dolore tempore autem enim eligendi veniam ratione neque, cupiditate esse dicta quidem eos quam blanditiis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="konten">
                <div class="info">
                    <div class="Vaksin">
                        <h2>Informasi Vaksinasi</h2>
                        <p class="paragraf">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam commodi fugiat accusamus sit saepe impedit dolore voluptas qui,
                            assumenda fugit maxime consequatur explicabo excepturi neque! Veniam sed non nobis a?<br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, modi eum eligendi praesentium consectetur minima qui soluta
                            quidem sed aspernatur quod ipsum adipisci eveniet quia placeat dolore optio eaque in! <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam id quis impedit cumque quo. Beatae facilis officia iste animi!
                            Ipsam, neque impedit voluptas expedita sed blanditiis quam assumenda provident reprehenderit?
                        </p>
                    </div>
                </div>
            </div>

            <div class="konten">
                <div class="conten">
                    <header>Pendaftaran Vaksinasi</header>
                    <form action="../../controllers/AddVaksinasi.php" method="post" name="form">
                        <div class="fiel">
                            <input type="text" required placeholder="Nama" name="nama">
                        </div>

                        <div class="fiel">
                            <input type="tel" required placeholder="NIK" name="nik">
                        </div>

                        <div class="fiel">
                            <input type="text" required placeholder="Alamat Domisili" name="alamat">
                        </div>

                        <div class="fiel">
                            <input type="text" required placeholder="Tempat, tanggal lahir" name="ttl">
                        </div>

                        <div class="fiel">
                            <input type="number" min="1" max="3" required placeholder="Vaksinasi ke-" name="vaksin_ke">
                        </div>

                        <div class="failed">
                            <button type="submit">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>
    <!-- copyright -->
    <div id="copyright">
        <div class="countener2">
            &copy;2022. <b>Smart Kesmas.</b> All Right Reserved
        </div>
    </div>


</body>

</html>