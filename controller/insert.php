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

  $sql = "INSERT INTO trSewaSepeda  VALUES (NULL, '$nama', '$email', '$nomorTelpon', '$jenisSepeda', '$durasiSewa')";

  if (mysqli_query($conn, $sql)) {
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/sepedaku-webprog";

    header("Location: $url/index.php");
  } else {
    echo "Error";
  }

  mysqli_close($conn);
  ?>
</body>

</html>