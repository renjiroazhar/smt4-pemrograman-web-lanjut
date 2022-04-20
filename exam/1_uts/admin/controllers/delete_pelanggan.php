<?php 
    include ("../config.php");

    //Ambil id dari query string
    $kode_pelanggan = $_GET['id'];

    //Buat query hapus
    $query = "DELETE FROM pelanggan WHERE kode_pelanggan = $kode_pelanggan";
    $delete = mysqli_query($connection, $query);

    //Apakah query hapus berhasil?
    if ($delete) {
        header('Location: ../pelanggan.php');
    } else {
        die("Failed to delete");
    }
?>