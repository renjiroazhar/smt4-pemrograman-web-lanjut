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
                <h1><?= $row['title'] ?></h1>
                <p><i><?= $row['created_at'] ?></i></p>
                <br>
                <br>
                <center>
                    <img 
                        src="<?= base_url(); ?>/assets/img/<?= $row['image'] ?>"
                        alt="<?= $row['title'] ?>"
                    >
                </center>
                <br>
                <br>
                <center>
                    <div style="width: 950px; text-align: justify;">
                        <p>
                            Jakarta - Salah satu maskapai penerbangan terbesar di Uni Emirat Arab (UEA), Emirates 
                            Airline berencana untuk menambahkan bitcoin sebagai salah satu opsi pembayaran. 
                            Dikutip dari bitcoin.com, maskapai rencananya akan merekrut tim untuk mencari tahu 
                            apa yang dibutuhkan oleh para konsumennya. Chief Operating Officer (COO) Emirates 
                            Adel Ahmed Al-Redha mengungkapkan selain bitcoin, Emirates juga akan menambahkan 
                            koleksi non-fungible token (NFT) pada laman websitenya.
                        </p>
                        <p>
                            Kabar ini mengemuka ketika beberapa minggu lalu Emirates menyatakan ketertarikannya pada 
                            NFT dan metaverse. Memang, Emirates berupaya untuk menyelaraskan visi dengan UEA untuk 
                            mengembangkan ekonomi digital. Dikutip dari Arab New, Al Redha menjelaskan NFT dan metaverse 
                            ini memiliki jalur yang tidak sama. Menurut dia dengan metaverse orang bisa mengubah seluruh 
                            proses yang biasa dijalani seperti operasional, pelatihan, penjualan sampai pengalaman yang 
                            interaktif. Namun hingga berita ini ditayangkan, Emirates belum membeberkan kapan pembayaran 
                            menggunakan bitcoin bisa dilakukan. Sebelumnya diberitakan jika wilayah Timur Tengah 
                            merupakan salah satu tempat yang bisa menjadi 'surga' transaksi kripto.
                        </p>
                        <p style="text-align: left;">Sumber : https://finance.detik.com/berita-ekonomi-bisnis/d-6077956/emirates-bakal-terima-bitcoin-buat-jadi-alat-bayar?_ga=2.16753520.758277799.1652614357-1253624658.1640045585</p>
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