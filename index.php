<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sepedaku</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <header>
    <nav class="navbar navbar-light">
      <a class="navbar-brand" href="../sepedaku-webprog/index.php"> <img src="images/logo.png" alt="" class="img-logo">
        Sepedaku</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
      </div>
    </nav>
  </header>
  <main>
    <div class="container">
      <table class="table table-striped mt-3">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No Telepon</th>
            <th>Jenis Sepeda</th>
            <th>Durasi Sewa</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $conn = mysqli_connect("localhost", "root", "", "sepedadb");

          if ($conn === false) {
            die("Could not connect." . mysqli_connect_error());
          }

          $sql = "SELECT * FROM trSewaSepeda";

          $datas = mysqli_query($conn, $sql);

          foreach ($datas as $data) {

            // mysqli_close($conn);
          ?>
          <tr>
            <td><?= $data['id']; ?></td>
            <td><?= $data['namaPenyewa']; ?></td>
            <td><?= $data['emailPenyewa']; ?></td>
            <td><?= $data['noTelpPenyewa']; ?></td>
            <td><?= $data['jenisSepeda']; ?></td>
            <td><?= $data['durasiSewa']; ?></td>
            <td>
              <a href="./controller/delete.php?id=<?= $data['id']; ?>"
                style="margin: 3px; padding:3px; background-color: white; border-radius: 5px;">Delete
              </a>
              <a href="edit.php?id=<?php echo $data['id'] ?>"
                style="margin: 3px; padding:3px; background-color: white; border-radius: 5px;">Update/Edit
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </main>
</body>

</html>