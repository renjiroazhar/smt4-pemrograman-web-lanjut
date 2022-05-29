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
                <h1>Harga Kripto Luna Hancur, Tersebar Isu 8 Investor Bunuh Diri</h1>
                <p><i>Jumat, 13 Mei 2022 18:59 WIB</i></p>
                <br>
                <br>
                <center>
                    <img 
                        src="<?= base_url(); ?>/assets/img/2_trader-kripto-bisa-cuan-kalo-nongkrong-di-cafe-ini-4_169.jpeg"
                        alt="Harga Kripto Luna Hancur, Tersebar Isu 8 Investor Bunuh Diri"
                    >
                </center>
                <br>
                <br>
                <center>
                    <div style="width: 950px; text-align: justify;">
                        <p>
                            Jakarta - Pasar Cryptocurrency dilanda badai kehancuran, termasuk harga mata uang kripto Terra (Luna) 
                            yang turun drastis hingga lebih dari 99%. Delapan orang investor pun dikabarkan bunuh diri karenanya.
                            Akan tetapi, setelah hasil investigasi yang mendalam, ternyata berita itu tidak berdasar alias hoax. 
                            Informasinya pun sudah sempat viral di media sosial, dan salah satu akun Twitter di Pakistan menjadi 
                            sumber pertama yang menyebarkannya, dilansir detikINET dari The Reporter Time, Jumat (13/5/2022).
                        </p>
                        <p>
                            Akun tersebut menjelaskan bahwa Luna anjlok menjadi USD 0,15 atau sekitar Rp 2 ribu, dari USD 120 atau 
                            sekitar Rp 1,7 juta hanya dalam waktu satu hari. Lalu juga menyertakan sebuah gambar yang menyisipkan 
                            keterangan ada delapan orang investor dilaporkan bunuh diri karena penurunan itu. Kenyataannya, kejadian 
                            menghebohkan ini tidak nyata. Hanya saja, memang ada beberapa orang yang mengklaim, bahwa para investor 
                            sudah kehilangan seluruh tabungan hidup mereka gegara membeli Luna. Sedikit informasi, goyangnya pasar 
                            Crypstocurrency memang sudah diperingatkan oleh para analis. Diperkirakan hal ini akan menimbulkan efek 
                            domino terhadap mata uang digital lainnya.
                        </p>
                        <p>
                            Luna sendiri menjadi sebuah kasus khusus untuk saat ini. Ia menjadi salah satu token kripto yang diperjualbelikan 
                            dengan menggunakan sistem blockchain, yang adalah merupakan sistem penyimpanan (bank data) digital dan terhubung 
                            dengan kriptografi. Namun sayangnya, belakangan ini Luna trending karena nasib sial harus menimpanya. Selama lima 
                            hari terakhir, Luna harus kehilangan value dengan total senilai USD 25 miliar atau sekitar Rp 365 triliun. 
                            Hal ini semakin membuat para analis khawatir. Mereka takut, efeknya berdampak pada mata uang digital lain. 
                            Bahkan saat ini, nilai Bitcoin jauh menurun menjadi hanya di kisaran USD 29 ribu atau sekitar Rp 424 juta, 
                            turun 18% selama lima hari terakhir, beriringan dengan Luna.
                        </p>
                        <p style="text-align: left;">Sumber : https://inet.detik.com/cyberlife/d-6076484/harga-kripto-luna-hancur-tersebar-isu-8-investor-bunuh-diri?_ga=2.88640477.758277799.1652614357-1253624658.1640045585</p>
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