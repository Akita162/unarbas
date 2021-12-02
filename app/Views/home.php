<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container-xxl">
  <?php if (session()->getFlashdata('registrasi')) : ?>
    <div class="alert mt-5 position-absolute top-0 start-50 translate-middle-x alert-success alert-dismissible fade show" role="alert">
      <?= session()->getFlashdata('registrasi') ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>

  <!-- Hero Banner -->
  <div class="jumbotron img-fluid">
    <img src="<?= base_url('assets/img/kampus.jpg') ?>" class="w-100" alt="Hero Banner">
  </div>

  <!-- Berita dan Promosi -->
  <main class="container">

    <div class="row align-content-md-center">

      <!-- Section Title -->
      <div class="col-12 text-center p-4">
        <h2>Berita</h2>
      </div>

      <!-- Berita -->
      <section id="berita" class="col-md-7">
        <div class="row row-cols-2 h-100 align-content-md-around">

          <div class="col my-2">
            <a href="#" class="card shadow-sm h-100">
              <img src="<?= base_url('assets/img/kerjasama.jpg') ?>" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">UAB dan Harvard University telah menjalin kerja sama</h5>
                <p class="card-text">Dalam penelitian terbaru mahasiswa UAB......</p>
              </div>
            </a>
          </div>

          <div class="col my-2">
            <a href="#" class="card shadow-sm h-100">
              <img src="<?= base_url('assets/img/penemuan.jpg') ?>" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Mahasiswa UAB membuat penemuan baru</h5>
                <p class="card-text">beberapa mahasiswa UAB bekerja sama....</p>
              </div>
            </a>
          </div>

          <div class="col my-2">
            <a href="#" class="card shadow-sm h-100">
              <img src="<?= base_url('assets/img/iklim.jpg') ?>" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Begini tanggapan dosen UAB perihal perubahan iklim</h5>
                <p class="card-text">dalam wawancara yang dilakukan....</p>
              </div>
            </a>
          </div>

          <div class="col my-2">
            <a href="#" class="card shadow-sm h-100">
              <img src="<?= base_url('assets/img/prof.jpg') ?>" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Prof. Nasaruddin : Silaturahmi Dapat Memperkuat persatuan bangsa</h5>
                <p class="card-text">Imam Besar Masjid Istiqlal, Prof. Dr. KH. Nasaruddin...</p>
              </div>
            </a>
          </div>

          <div class="col-12 my-2 text-center">
            <a class="btn btn-warning w-25" href="#">More &bkarow;</a>
          </div>

        </div>
      </section>

      <!-- Banner Promosi -->
      <aside id="promo" class="col-md-5 mt-4 mt-md-0">
        <img class="w-100" src="<?= base_url('assets/img/distancing.jpg') ?>" alt="Banner Promosi">
      </aside>

    </div>

  </main>

  <!-- Jurusan -->
  <section class="container-xxl mb-4 text-center">

    <div class="col-12 text-center p-4">
      <h2>Fakultas</h2>
    </div>

    <div class="fakultas row flex-nowrap">
      <?php foreach ($fakultas as $fk) : ?>

        <div class="col-md-3 mb-2">
          <div class="card h-100">
            <a href="<?= base_url("akademik/#$fk[kode]Accordion") ?>" class="card-body text-decoration-none text-dark">
              <img class="card-img-top mb-3" src="<?= base_url('assets/img/jurusan/' . $fk['thumbnail'] . '.jpg') ?>" alt="Fakultas <?= $fk['nama'] ?>">
              <h5 class="card-title text-wrap"><?= $fk['nama'] ?></h5>
            </a>
          </div>
        </div>
      <?php endforeach; ?>

    </div>

  </section>

</div>
<?= $this->endSection() ?>