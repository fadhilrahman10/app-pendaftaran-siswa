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

		$sql	= "INSERT INTO pendaftaran VALUES(null,'$full_name', '$nick_name', '$birth_place'
					, '$birth_date' ,'$gender', '$child_number', '$child_total', '$alamat'
					, '$father_name', '$birth_place_father','$birth_date_father', '$father_last_education'
					, '$father_job', '$father_religion','$mother_name', '$birth_place_mother', '$birth_date_mother'
					, '$mother_last_education', '$mother_job', '$mother_religion', '$telp','','','','','','','$time')";

		$exec 	= mysqli_query($conn,$sql);

		if ($exec) {

			$id 		= $conn->insert_id;
			//echo $id;
			$query 		= "INSERT INTO admin VALUES(null, '$email', '$password', '',1, $id)";

			$exec_akun 	=  mysqli_query($conn, $query);

			if ($exec_akun) {
				session_destroy();
				echo'<script> window.location="success_register.php"; </script> ';
			}else{
				echo mysqli_error($conn);
				echo 'gagal';
			}

		}else{
			echo mysqli_error($conn);
		}
	}
?>