<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - The Crypto Report</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/res/layout.css">
    <style>
        * {
            box-sizing: border-box;
        }

        span {
            display: inline-block;
        }
    </style>
</head>
    <body>
        <div class="header">
            <h1>About - The Crypto Report</h1>
        </div>
        <div id="topnav" class="topnav">
            <a href="<?= base_url(); ?>">Home</a>
            <a href="<?= base_url('blog'); ?>">Blog</a>
            <a href="#">About</a>
        </div>
        <div class="content">
            <center>
                <h1>Profil Penulis</h1>
                <span>
                    <img 
                        src="<?= base_url(); ?>/assets/img/4. profile-avatar.jpg"
                        alt="Penulis"
                        width="65px"
                        style="margin-bottom: auto;"
                    >
                </span>
                <span style="width: 400px;">
                    <p style="text-align: justify;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis eaque sed quasi accusantium dolor? Totam perspiciatis quos incidunt facilis, impedit ea sapiente sit aperiam dignissimos beatae fugiat ratione sunt vitae?
                    </p>
                </span>
            </center>
        </div>
        <div class="footer" style="position: fixed;  bottom: 0;">
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