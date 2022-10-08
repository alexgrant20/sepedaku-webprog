<!DOCTYPE html>
<html lang="en">
<?php include "./components/header.php" ?>
<?php
$conn = mysqli_connect("localhost", "root", "", "sepedadb");
$id = $_REQUEST['id'];

$sql = "SELECT * FROM trSewaSepeda WHERE id = $id";

$data = mysqli_fetch_assoc(mysqli_query($conn, $sql));
?>

<body>
  <?php include "./components/navigation.php" ?>
  <main>
    <div class="d-flex">
      <div>
        <img src="images/bike.jpg" alt="" height="75%" width="800px">
      </div>
      <div class="div-form">
        <h1 style="padding: 20px">Update Data Penyewa</h1>
        <div style="margin: 10px">
          <?php ?>
          <form action="controller/update.php?id=<?= $_REQUEST['id']; ?>" method="post">
            <div class="form-group mb-3">
              <label>Nama Penyewa</label>
              <input name="nama" type="text" value="<?= $data['namaPenyewa'] ?>" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label>Email Penyewa</label>
              <input name="email" type="email" value="<?= $data['emailPenyewa'] ?>" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label>Nomor Telepon Penyewa</label>
              <input name="nomorTelpon" type="text" value="<?= $data['noTelpPenyewa'] ?>" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label>Jenis Sepeda</label>
              <input name="jenisSepeda" type="text" value="<?= $data['jenisSepeda'] ?>" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label>Durasi Sewa</label>
              <input name="durasiSewa" type="number" value="<?= (int)$data['durasiSewa'] ?>" class="form-control">
            </div>
            <div style="margin-top: 30px;">
              <button type="submit" name="btnSubmit" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
</body>

</html>