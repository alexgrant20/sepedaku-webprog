<!DOCTYPE html>
<html>

<body>
	<?php
    $conn = mysqli_connect("localhost", "root", "", "sepedadb");

    if ($conn === false) {
        die("Could not connect." . mysqli_connect_error());
    }

    $nama =  $_REQUEST['nama'];
    $email =  $_REQUEST['email'];
    $nomorTelpon =  $_REQUEST['nomorTelpon'];
    $jenisSepeda =  $_REQUEST['jenisSepeda'];
    $durasiSewa =  $_REQUEST['durasiSewa'];

    $sql = "INSERT INTO trsewasepeda  VALUES (NULL, '$nama', '$email', '$nomorTelpon', '$jenisSepeda', '$durasiSewa')";

    if (mysqli_query($conn, $sql)) {
        echo "Sudah keinsert";
    } else {
        echo "Error";
    }

    mysqli_close($conn);
    ?>
</body>

</html>