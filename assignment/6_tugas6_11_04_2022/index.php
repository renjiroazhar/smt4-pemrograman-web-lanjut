<?php

include_once 'config.php';

if (isset($_POST['save'])) {
    $title = $_POST['title'];
    $vid_id = $_POST['vid_id'];

    $post = mysqli_query($connect, "INSERT INTO video (title, vid_id) VALUES ('$title', '$vid_id')");

    if ($post) {
        echo "<script>alert('Success');</script>";
        echo "<script>window.location.href = window.location.href;</script>";
    } else {
        echo "<script>alert('Failed')</script>";
    }
};

$get = mysqli_query($connect, "SELECT * FROM video");

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
    <label for=""><b>Input Video</b></label>
    <br><br>
    <form action="" method="post">
        <input type="hidden" name="id">
        <label for="">Title &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: </label>
        <input type="text" name="title"><br><br>
        <label for="">Video ID &nbsp; : </label>
        <input type="text" name="vid_id"><br><br>
        <input type="submit" name="save" value="Save">
    </form>

    <br><br>

    <label for=""><b>Video List</b></label>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>URL</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php 
        $no = 1;
        foreach ($get as $data) { 
        ?>
        <tr>
            <td style="text-align: center;"><?= $no ?></td>
            <td><?= $data['title']; ?></td>
            <td>
                <a href="https://www.youtube.com/watch?v=<?= $data['vid_id']; ?>" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: #000000">
                    https://www.youtube.com/watch?v=<?= $data['vid_id']; ?>
                </a>
            </td>
            <td>
                <a href="edit_page.php?id=<?= $data['id']; ?>" style="text-decoration: none; color: blue">Edit</a>
                <a href="delete_handler.php?id=<?= $data['id']; ?>" style="text-decoration: none; color: red">Delete</a>
            </td>
        </tr>
        <?php
            $no++;
        };
        ?>
    </table>
</body>
</html>