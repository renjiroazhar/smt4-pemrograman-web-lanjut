<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - The Crypto Report</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/res/layout.css">
    <style>
        * {
            box-sizing: border-box;
        }

        .card {
            background-color: #f1f1f1;
            padding: 10px;
            margin-bottom: 10px;
        }

        span {
            display: inline-block;
        }

        img {
            width: 310px;
            margin-bottom: -20px;
            margin-right: 20px;
        }

        .echo-data {
            margin: 25px 0 10px 0;
            background-color: #00ff00;
            width: 500px
        }
    </style>
</head>
    <body>
        <div class="header">
            <h1>Blog - The Crypto Report</h1>
        </div>
        <div id="topnav" class="topnav">
            <a href="<?= base_url(); ?>">Home</a>
            <a href="#">Blog</a>
            <a href="<?= base_url('about'); ?>">About</a>
        </div>
        <div class="content">
            <div class="card">
                <span>
                    <img 
                        src="<?= base_url(); ?>/assets/img/1_pesawat-emirates_169.jpeg"
                        alt="Emirates Bakal Terima Bitcoin buat Jadi Alat Bayar"
                    >
                </span>
                <span>
                    <p><i>Sabtu, 14 Mei 2022 18:30 WIB</i></p>
                    <h2>Emirates Bakal Terima Bitcoin buat Jadi Alat Bayar</h2>
                    <p>Jakarta - Salah satu maskapai penerbangan terbesar di Uni Emirat Arab (UEA), Emirates</p>
                    <p>Airline berencana untuk menambahkan bitcoin sebagai salah satu opsi pembayaran.</p>
                    <a href="<?= base_url('blog/article1'); ?>"><p>baca selengkapnya...</p></a>
                </span>
            </div>
            <div class="card">
                <span>
                    <img 
                        src="<?= base_url(); ?>/assets/img/2_trader-kripto-bisa-cuan-kalo-nongkrong-di-cafe-ini-4_169.jpeg"
                        alt="Harga Kripto Luna Hancur, Tersebar Isu 8 Investor Bunuh Diri"
                    >
                </span>
                <span>
                    <p><i>Jumat, 13 Mei 2022 18:59 WIB</i></p>
                    <h2>Harga Kripto Luna Hancur, Tersebar Isu 8 Investor Bunuh Diri</h2>
                    <p>Jakarta - Pasar Cryptocurrency dilanda badai kehancuran, termasuk harga mata uang kripto Terra (Luna)</p>
                    <p>yang turun drastis hingga lebih dari 99%.</p>
                    <a href="<?= base_url('blog/article2'); ?>"><p>baca selengkapnya...</p></a>
                </span>
            </div>
            <div class="card">
                <span>
                    <img 
                        src="<?= base_url(); ?>/assets/img/3_binance.png"
                        alt="Kapok! Binance Bakalan Ogah Jual Terra LUNA Lagi"
                    >
                </span>
                <span>
                    <p><i>Jumat, 13 Mei 2022 14:20 WIB</i></p>
                    <h2>Kapok! Binance Bakalan Ogah Jual Terra LUNA Lagi</h2>
                    <p>Jakarta - Salah satu platform jual beli aset kripto terbesar di dunia, Binance,</p>
                    <p>mengumumkan telah menangguhkan perdagangan token Terra (LUNA) dan TerraUSD (UST).</p>
                    <a href="<?= base_url('blog/article3'); ?>"><p>baca selengkapnya...</p></a>
                </span>
            </div>
        </div>
        <div class="content">
            <div class="card">
                <h3 style="text-align: center;">Berlangganan berita terbaru gratis!</h3>
                <table align="center">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                        <tr>
                            <td><label>Nama: </label></td>
                            <td><input type="text" name="fnama"></td>
                        </tr>
                        <tr>
                            <td><label>Email: </label></td>
                            <td><input type="email" name="femail"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Submit"></td>
                        </tr>
                    </form>
                </table>
                <center>
                    <div class="echo-data">
                        <?php 
                            if(isset($_POST ['fnama'])){
                                $nama = $_POST['fnama'];
                                $email =$_POST['femail'];

                                echo "<b>Nama: </b> $nama, <b>Email: </b> $email";
                            }
                        ?>
                    </div>
                </center>
            </div>
        </div>
        <div class="footer">
            <h3>Copyright &copy; <script>document.write(new Date().getFullYear())</script> by The Crypto Report. All Rights Reserved.</h3>
        </div>


        <script>
            window.onscroll = function() {myFunction()};

            var header = document.getElementById("topnav");
            var fixed = header.offsetTop;

            function myFunction() {
                if (window.pageYOffset > fixed) {
                    header.classList.add("fixed");
                } else {
                    header.classList.remove("fixed");
                }
            }
        </script>
    </body>
</html>