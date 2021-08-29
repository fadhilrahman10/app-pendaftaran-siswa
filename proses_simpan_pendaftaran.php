<?php
//Start session  
session_start();

//import connection to database
include "koneksi/koneksi.php";

//check if $_SESSION is exist
if (isset($_SESSION)) {
	foreach ($_SESSION as $key => $val) {
		${$key} = $val;
	}

	$time = date('Y-m-d H:i:s');

	$sql	= "INSERT INTO siswa VALUES(null,'$nis','$email','$full_name', '$nick_name', '$birth_place'
					, '$birth_date' ,'$gender', '$agama', '$child_number', '$child_total', '$alamat', '$telp'
					,'','','','','','$time')";

	$exec 	= mysqli_query($conn, $sql);

	if ($exec) {

		$id 		= $conn->insert_id;
		//echo $id;
		$query 		= "INSERT INTO admin VALUES(null, '$email', '$password', '$full_name',1)";

		$exec_akun 	=  mysqli_query($conn, $query);

		if ($exec_akun) {
			session_destroy();
			echo '<script> window.location="success_register.php"; </script> ';
		} else {
			echo mysqli_error($conn);
			echo 'gagal';
		}
	} else {
		echo mysqli_error($conn);
	}
}
