<!DOCTYPE html>
<html>

<body>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "sepedadb");

	if ($conn === false) {
		die("Could not connect." . mysqli_connect_error());
	}

	$id = $_REQUEST['id'];
	$nama =  $_REQUEST['nama'];
	$email =  $_REQUEST['email'];
	$nomorTelpon =  $_REQUEST['nomorTelpon'];
	$jenisSepeda =  $_REQUEST['jenisSepeda'];
	$durasiSewa =  $_REQUEST['durasiSewa'];

	$sql = "UPDATE trsewasepeda  SET namaPenyewa = '$nama', emailPenyewa = '$email', noTelpPenyewa = '$nomorTelpon', jenisSepeda = '$jenisSepeda', durasiSewa = '$durasiSewa'
        WHERE id = '$id'";

	if (mysqli_query($conn, $sql)) {
		echo "Sudah Terupdate";
	} else {
		echo "Error";
	}

	mysqli_close($conn);

	?>
	<a href="../index.php" style="padding: 5px; background-color: blue; font-style: none; border-radius: 3px;">Back to
		Home</a>
</body>

</html>