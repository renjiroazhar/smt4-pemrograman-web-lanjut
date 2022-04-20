<?php
	if (!isset($_SESSION)) {
		// Initialize the session
		session_start();
	};
	
	// Check if the user is already logged in, if yes then redirect him to dashboard page
	session_regenerate_id();
	
	include("../config.php");

	if (isset($_POST['submit'])) {
		$kode_pelanggan = $_POST['kode_pelanggan'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$telp = $_POST['telp'];
		$kode_user = $_POST['kode_user'];

		$used_pelanggan = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM pelanggan WHERE kode_pelanggan='$kode_pelanggan'"));

		if ($used_pelanggan) {
			$query = "UPDATE pelanggan SET `kode_pelanggan`='$kode_pelanggan', `nama`='$nama', `alamat`='$alamat', `telp`='$telp', `kode_user`='$kode_user' WHERE `kode_pelanggan`='$kode_pelanggan'";
			$post = mysqli_query($connection, $query);

			if ($post) {
				if(!isset($_SESSION['loggedin'])) { /* If there is no valid session */
					header('Location: ../index.php?status_update=success');
				} else {
					//Jika berhasil maka alihkan ke halaman index.php dengan status=success
					header('Location: ../pelanggan.php?status_update=success');
				}
			} else {
				if(!isset($_SESSION['loggedin'])) { /* If there is no valid session */
					header('Location: ../index.php?status_update=failed');
				} else {
					//Jika gagal alihkan ke halaman index.php dengan status=failed
					header('Location: ../pelanggan.php?status_update=failed');
				}
			}
		} else {
			$query = ("INSERT INTO pelanggan (kode_pelanggan, nama, alamat, telp, kode_user) VALUES ('$kode_pelanggan', '$nama', '$alamat', '$telp', '$kode_user')");
			$post = mysqli_query($connection, $query);

			if($post) {
				if(!isset($_SESSION['loggedin'])) { /* If there is no valid session */
					header('Location: ../index.php?status=success');
				} else {
					//Jika berhasil maka alihkan ke halaman index.php dengan status=success
					header('Location: ../pelanggan.php?status=success');
				}
			} else {
				if(!isset($_SESSION['loggedin'])) { /* If there is no valid session */
					header('Location: ../index.php?status=faied');
				} else {
					//Jika gagal alihkan ke halaman index.php dengan status=failed
					header('Location: ../pelanggan.php?status=failed');
				}		
			}
		}
		//Buat post 
	} else {
		die("Access denied");
	}
?>
