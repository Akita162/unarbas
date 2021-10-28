<?php
if (isset($_POST['ya'])) {
  // data dimasukkan ke database menggunakan mysql
  echo "
    <script>
      alert('Data Berhasil Dimasukkan.');
    </script>
  ";
}

// mengambil dari query
$form = [
  'jurusan' => [
    "Sistem Informasi",
    "Teknologi Informatika",
    "Program Studi Kimia",
    "Ilmu Hukum",
    "Akuntasi"
  ]
];
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
  <link rel="stylesheet" href="../css/all.css" />
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
          <a class="nav-link" href="../home/">Beranda</a> <!-- menambah link ke home -->
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
    <!-- Form Pendaftaran -->
    <div class="container form">

      <div class="row text-center p-4">
        <h2>Isi Biodata Anda</h2>
      </div>
      <form action="check.php" method="post">

        <div class="form-part">
          NISN : <br>
          <input type="text" name="NISN" class="form-control" required spellcheck="false">
        </div>
        <div class="form-part">
          Jurusan : <br>
          <select name="Jurusan" class="form-control" required>
            <option value="" disabled selected hidden>Pilih</option>
            <?php foreach ($form['jurusan'] as $arrjur) : ?>
              <option value="<?= $arrjur ?>"><?= $arrjur ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-part">
          Nama : <br>
          <input type="text" name="Nama" class="form-control" required spellcheck="false">
        </div>
        <div class="form-part">
          Jenis Kelamin : <br>
          <select name="Jenis Kelamin" class="form-control" required>
            <option value="" disabled selected hidden>Pilih</option>
            <option value="Laki-laki">laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div class="form-part">
          Tanggal lahir : <br>
          <input type="date" name="Tanggal Lahir" class="form-control" id="bday" required>
        </div>
        <div class="form-part">
          Nomor HP : <br>
          <input type="text" name="Nomor HP" class="form-control" required>
        </div>
        <div class="form-part">
          Email : <br>
          <input type="email" name="Email" class="form-control" required>
        </div>
        <div class="m-3 float-end">
          <button type="submit" name="submit" class="btn-dark">Submit</button>
        </div>
        <div class="clearfix"></div>

      </form>
    </div>
    <!-- End Form Pendaftaran -->

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