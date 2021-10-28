<?php
if (isset($_POST['submit'])) {
  $req = $_POST;
} else {
  header("Location: ../pendaftaran");
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Web Universitas</title>

  <!-- Link Bootstrap (offline) -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- My CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>/css/all.css" />
  <link rel="stylesheet" href="../css/form.css" />


</head>

<body id="home">
  <!-- Nav Bar -->
  <div class="title">
    <div class="container">
      <div class="col-md-2" id="logos"><img src="../img/logoss.png" alt=""></div>
      <h3>Universitas Aruna Baswara</h3>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="../home/">Beranda</a>
          <a class="nav-link" href="#">Akademik</a>
          <a class="nav-link active" aria-current="page" href="">Pendaftaran</a>
          <a class="nav-link" href="#">Mahasiswa</a>
          <a class="nav-link" href="#">Tentang</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Nav Bar -->

  <div class="cover rounded-3">
    <!-- Check Output -->
    <div class="container form">

      <div class="row text-center p-4">
        <h2>Apakah Biodata Anda Sudah Benar?</h2>
      </div>

      <form action="../pendaftaran/index.php" method="post">

        <?php foreach ($req as $key => $val) :
          if ($key == 'submit') {
            break;
          }
        ?>

          <div class="form-part container">
            <h5><?= str_replace("_", " ", $key); ?>:</h5>
            <?= $val ?>
          </div>
          <input type="hidden" name="<?= $key ?>" value="<?= $val ?>">

        <?php endforeach; ?>

        <div class="m-3 btn-group float-end">
          <button type="submit" name="ya" class="btn-dark">Ya</button>
          <button type="button" class="btn-dark" onclick="kembali();">Tidak</button>
        </div>
        <div class="clearfix"></div>

      </form>
    </div>
    <!-- End Check output -->

  </div>

  <!-- Footer -->
  <footer class="text-light text-center pt-2 pb-2 bg-dark">
    <div class="container">
      <div class="row d-flex justify-content-between">

        <div class="col-md-4" id="alamat">
          <div class="row">
            <!-- Logo -->
            <div class="col-md-2" id="logo"><img src="../img/logoss.png" alt=""></div>
            <div class="col-md-10 d-flex align-items-center" id="univ">
              <h5 class="titlefoot">Universitas Aruna Baswara</h5>
            </div>
          </div>
          <div class="row text-start">
            <!-- alamat -->
            <p>Jl. Ganesa 10 Cilebut, <br>
              Bogor - Jawa Barat, Indonesia <br>
              Email : center@unarbas.ac.id <br></p>
          </div>
        </div>

      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- Script JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../js/main.js"></script>
  <!-- End Script JavaScript -->

</body>

</html>