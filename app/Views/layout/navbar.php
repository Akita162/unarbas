<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <span class="navbar-brand">
        <img src="<?= base_url('assets/img/logoss.png') ?>" alt="Logo Univ" width="45" class="d-inline-block align-middle">
        <b class="align-middle">Universitas Aruna Baswara</b>
      </span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <nav class="navbar navbar-expand-lg navbar-light bg-light py-0">
    <div class="container-fluid my-2">
      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('home') ?>">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('akademik') ?>">Akademik</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('pendaftaran') ?>">Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('kegiatan') ?>">Kegiatan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('about') ?>">Tentang</a>
          </li>
        </ul>
        <form class="d-flex mx-2">
          <div class="input-group">
            <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="searchButton">
            <button class="btn btn-dark" type="button" id="searchButton">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </nav>
</header>