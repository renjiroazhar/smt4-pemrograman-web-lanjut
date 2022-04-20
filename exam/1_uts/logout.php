<?php

if (!isset($_SESSION)) {
    // Initialize the session
    session_start();
};

session_destroy();
 
header("Location: ./index.php?status=logout");

?>