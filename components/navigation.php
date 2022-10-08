<?php
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/sepedaku-webprog";
?>

<header>
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="<?= $url ?>/index.php">
      <img src="images/logo.png" alt="" class="img-logo">
      Sepedaku
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= $url ?>/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= $url ?>/create.php">Create</a>
        </li>
      </ul>
    </div>
  </nav>
</header>