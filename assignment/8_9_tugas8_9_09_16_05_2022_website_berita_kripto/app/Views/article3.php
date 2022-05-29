<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article - The Crypto Report</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/res/layout.css">
    <style>
        * {
            box-sizing: border-box;
        }

        .card {
            background-color: #f1f1f1;
            padding: 10px;
            margin-bottom: 10px;
            text-align: center;
        }
        
        img {
            width: 800px;
        }
    </style>
</head>
    <body>
        <div class="header">
            <h1>Article - The Crypto Report</h1>
        </div>
        <div id="topnav" class="topnav">
            <a href="<?= base_url('blog'); ?>">- Back</a>
        </div>
        <div class="content">
            <div class="card">
                <h1>Kapok! Binance Bakalan Ogah Jual Terra LUNA Lagi</h1>
                <p><i>Jumat, 13 Mei 2022 14:20 WIB</i></p>
                <br>
                <br>
                <center>
                    <img 
                        src="<?= base_url(); ?>/assets/img/3_binance.png"
                        alt="Kapok! Binance Bakalan Ogah Jual Terra LUNA Lagi"
                    >
                </center>
                <br>
                <br>
                <center>
                    <div style="width: 950px; text-align: justify;">
                        <p>
                            Jakarta - Salah satu platform jual beli aset kripto terbesar di dunia, Binance, 
                            mengumumkan telah menangguhkan perdagangan token Terra (LUNA) dan TerraUSD (UST). 
                            Hal itu dilakukan menyusul penurunan harga token tersebut yang anjlok lebih dari 99%. 
                            Binance menyatakan pairing token LUNA/BUSD, LUNA/USDT, LUNA/BTC, LUNA/ETH, LUNA/UST 
                            dihapus dan dihentikan transaksinya pada 13 Mei 2022 hari ini. Binance juga mengatakan 
                            akan mengambil tindakan pencegahan kontraknya dengan kedua token tersebut. Binance 
                            berniat menghapus pasangan kripto itu, jika harganya berada di bawah US$ 0,005.
                        </p>
                        <p>
                            Penyebab turunnya harga Terra LUNA terjadi karena harga stablecoin UST yang sedang 
                            menyusut. UST sendiri merupakan stablecoin algoritmik yang menggunakan sistem pencetakan 
                            dan pembakaran token yang kompleks, untuk menyesuaikan pasokan dan menstabilkan harga. 
                            Token UST dibuat dengan membakar beberapa mata uang kripto yang terikat LUNA, untuk 
                            mempertahankan nilainya terhadap dolar, demikian dikutip dari laman Techcrunch, Jumat 
                            (13/5/2022). Terraform Labs juga mengatakan telah menghentikan blockchain Terra, dan 
                            saat ini pihaknya sedang bekerja untuk menyusun rencana untuk menyelamatkan aset kriptonya itu.
                        </p>
                        <p style="text-align: left;">Sumber: https://finance.detik.com/fintech/d-6076223/kapok-binance-bakalan-ogah-jual-terra-luna-lagi?_ga=2.88121437.758277799.1652614357-1253624658.1640045585</p>
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