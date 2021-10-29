<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Web Universitas</title>

  <!-- Link Bootstrap (offline) -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.css') ?>" />

  <?php if (isset($css)) :
    foreach ($css as $c) : ?>
      <!-- My CSS -->
      <link rel="stylesheet" href="<?= base_url("assets/css/$c.css") ?>" />
  <?php endforeach;
  endif; ?>

</head>

<body>

  <!-- Nav Bar -->
  <?= $this->include('layout/navbar') ?>

  <?= $this->renderSection('content') ?>

  <!-- Footer -->
  <footer class="text-light text-center pt-2 pb-2 bg-dark">
    <div class="container">
      <div class="row d-flex justify-content-between">

        <div class="col-md-4" id="alamat">
          <div class="row">
            <!-- Logo -->
            <div class="col-md-2" id="logo"><img src="<?= base_url('assets/img/logoss.png') ?>" alt="Logo Aruna Baswara"></div>
            <div class="col-md-10 d-flex align-items-center" id="univ">
              <h5 class="titlefoot">Universitas Aruna Baswara</h5>
            </div>
          </div>
          <address class="text-start">
            <!-- Alamat -->
            <strong>Jl. Upa Celi No.1</strong>
            <br>
            Dadaupa Gorge, Mondstadt
            <br>
          </address>
          <address class="text-start">
            <strong>Email</strong>
            <br>
            <a href="mailto:center@unarbas.ac.id">center@unarbas.ac.id</a>
            <br>
            <strong>Telepon</strong>
            <br>
            <a href="tel:+25169696969">+25169696969</a>
          </address>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- Script JavaScript -->
  <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/js/main.js') ?>"></script>
  <!-- End Script JavaScript -->
</body>

</html>