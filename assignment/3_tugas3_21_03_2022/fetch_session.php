<?php

session_start();

echo "Halo, aku " . $_SESSION['nama'] . ". Aku tinggal di " . $_SESSION['alamat'];

?>