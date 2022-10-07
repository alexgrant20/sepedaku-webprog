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
		<div class="d-flex">
			<div>
				<img src="images/bike.jpg" alt="" height="75%" width="800px">
			</div>
			<div class="div-form">
				<h1 style="padding: 20px">Welcome to Sepedaku!</h1>
				<div style="margin: 10px">
					<form action="controller/insert.php" method="post">
						<div class="form-group">
							<label>Nama Penyewa</label>
							<input name="nama" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Email Penyewa</label>
							<input name="email" type="email" class="form-control">
						</div>
						<div class="form-group">
							<label>Nomor Telepon Penyewa</label>
							<input name="nomorTelpon" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Jenis Sepeda</label>
							<input name="jenisSepeda" type="text" class="form-control">
						</div>
						<div class="form-group">
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