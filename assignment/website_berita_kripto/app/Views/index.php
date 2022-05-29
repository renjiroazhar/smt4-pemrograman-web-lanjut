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
            <a href="#">Home</a>
            <a href="#">Blog</a>
            <a href="#">About</a>
        </div>
        <div class="content">
            <?php foreach ($articles as $article) : ?>
            <div class="card">
                <span>
                    <img 
                        src="<?= base_url(); ?>/assets/img/<?= $article['image'] ?>"
                        alt="<?= $article['title'] ?>"
                    >
                </span>
                <span>
                    <p>
                        <i>
                            <?php
                            $timestamp = $article['created_at'];
                            $convert = date('l, d F Y H:i', strtotime($timestamp));                    
                            echo $convert
                            ?>
                        </i>
                    </p>
                    <h2><?= $article['title'] ?></h2>
                    <p>Jakarta - lorem ipsum dolor sit amet</p>
                    <p>lorem ipsum dolor sit amet.</p>
                    <a href=""><p>baca selengkapnya...</p></a>
                </span>
            </div>
            <?php endforeach ?>
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