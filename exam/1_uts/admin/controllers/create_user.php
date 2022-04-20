<?php
	if (!isset($_SESSION)) {
		// Initialize the session
		session_start();
	};
	
	// Check if the user is already logged in, if yes then redirect him to dashboard page
	session_regenerate_id();
	
	include("../config.php");

	if (isset($_POST['submit'])) {
		$kode_user = $_POST['kode_user'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$telp = $_POST['telp'];
		$password = $_POST['password'];
		$peran = $_POST['peran'];

		$query = ("INSERT INTO user (kode_user, nama, email, telp, password, peran) VALUES ('$kode_user', '$nama', '$email', '$telp', '$password', '$peran')");
		$post = mysqli_query($connection, $query);

		if ($post) {
			if(!isset($_SESSION['loggedin'])) { /* If there is no valid session */
				header('Location: ../index.php?status=success');
			} else {
				//Jika berhasil maka alihkan ke halaman index.php dengan status=success
				header('Location: ../user.php?status=success');
			}
		} else {
			if(!isset($_SESSION['loggedin'])) { /* If there is no valid session */
				header('Location: ../index.php?status=faied');
			} else {
				//Jika gagal alihkan ke halaman index.php dengan status=failed
				header('Location: ../user.php?status=failed');
			}		
		}
		//Buat post 
	} else {
		die("Access denied");
	}
?>
