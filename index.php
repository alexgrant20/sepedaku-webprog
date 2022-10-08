<!DOCTYPE html>
<html lang="en">
<?php include "./components/header.php" ?>

<body>
  <?php include "./components/navigation.php" ?>
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
              <a href="edit.php?id=<?php echo $data['id'] ?>" class="btn btn-warning">
                Edit
              </a>
              <a href="./controller/delete.php?id=<?= $data['id']; ?>" class="btn btn-danger">
                Delete
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