<?php

include_once 'config.php';

$id = $_GET['id'];
$get = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM video WHERE id = '$id'"));

if (isset($_POST['edit'])) {
    $title = $_POST['title'];
    $vid_id = $_POST['vid_id'];

    $edit = mysqli_query($connect, "UPDATE video SET title = '$title', vid_id = '$vid_id' WHERE id = '$id'");

    if ($edit) {
        echo "<script>alert('Success');</script>";
        header("Location: index.php");
    } else {
        echo "<script>alert('Failed')</script>";
    }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD MySQL</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        };
    </style>
</head>
<body>
    <label for=""><b>Edit Video</b></label>
    <br><br>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $get['id']; ?>">
        <label for="">Title &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: </label>
        <input type="text" name="title" value="<?= $get['title']; ?>"><br><br>
        <label for="">Video ID &nbsp; : </label>
        <input type="text" name="vid_id" value="<?= $get['vid_id']; ?>"><br><br>
        <input type="submit" name="edit" value="Edit">
        <a href="index.php">
            <input type="button" value="Cancel">
        </a>
    </form>
</body>
</html>