<?php

include_once 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = mysqli_query($connect, "DELETE FROM video WHERE id = '$id'");

    if ($delete) {
        header("Location: index.php");
        echo "<script>alert('Success');</script>";
    } else {
        header("Location: index.php");
        echo "<script>alert('Failed')</script>";
    }
};

?>