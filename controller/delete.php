<!DOCTYPE html>
<html>

<body>
	<?php
    $conn = mysqli_connect("localhost", "root", "", "sepedadb");

    if ($conn === false) {
        die("Could not connect." . mysqli_connect_error());
    }

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM trsewasepeda WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Sudah keinsert";
    } else {
        echo "Error";
    }

    header("Location: /myPHP/ASG/sepedaku-webprog/index.php");
    die;

   

    mysqli_close($conn);
    ?>
</body>

</html>