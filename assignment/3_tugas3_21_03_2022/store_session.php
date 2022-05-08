<?php

session_start();

if(isset($_POST['save'])){

    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['alamat'] = $_POST['alamat'];

    header("Location: fetch_session.php");
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="" method="post">
        <label for="">Nama &nbsp; : </label>
        <input type="text" name="nama"><br><br>
        <label for="">Alamat : </label>
        <input type="text" name="alamat"><br><br>
        <input type="submit" name="save" value="Simpan">
    </form>
</body>
</html>