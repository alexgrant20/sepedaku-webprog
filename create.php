<!DOCTYPE html>
<html lang="en">
<?php include "./components/header.php" ?>

<body>
  <?php include "./components/navigation.php" ?>
  <main>
    <div class="d-flex">
      <div>
        <img src="images/bike.jpg" alt="" height="75%" width="800px">
      </div>
      <div class="div-form">
        <h1 style="padding: 20px">Welcome to Sepedaku!</h1>
        <div style="margin: 10px">
          <form action="controller/insert.php" method="post">
            <div class="form-group mb-3">
              <label>Nama Penyewa</label>
              <input name="nama" type="text" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label>Email Penyewa</label>
              <input name="email" type="email" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label>Nomor Telepon Penyewa</label>
              <input name="nomorTelpon" type="text" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label>Jenis Sepeda</label>
              <input name="jenisSepeda" type="text" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label>Durasi Sewa</label>
              <input name="durasiSewa" type="number" class="form-control">
            </div>
            <div style="margin-top: 30px;">
              <button type="submit" name="btnSubmit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
</body>

</html>