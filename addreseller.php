<?php
	if(isset($_POST["submit"])){

		include ("config.php");
	 
		$sql = "INSERT INTO pembeli (pbl_id, pbl_nama, pbl_alamat, pbl_telp, pbl_email, pbl_status)
				 VALUES( '".$_POST['inid']."', '".$_POST['innama']."', '".$_POST['inadd']."', '".$_POST['intelp']."', '".$_POST['inemail']."', 'reseller')";
	 
		mysqli_query($conn, $sql) or die("Error, query failed!");
		#echo "berhasil";
		echo "<script>
             alert('message sent succesfully'); 
    		</script>";

	}
	header("location: reseller.php");
?> 