<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid ">
  <div class="container"></div>
</div>

<!-- Berita dan Promosi -->
<section class="page2">
  <div class="container text-dark">
    <!-- title -->
    <div class="row text-center p-4">
      <h2>Berita</h2>
    </div>

    <div class="row">

      <!-- Berita -->
      <div class="col-md-6" id="berita">

        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="card shadow-sm">
              <img src="<?= base_url('assets/img/kerjasama.jpg') ?>" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">UAB dan Harvard University telah menjalin kerja sama</h5>
                <p class="card-text">Dalam penelitian terbaru mahasiswa UAB......</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <div class="card shadow-sm">
              <img src="<?= base_url('assets/img/penemuan.jpg') ?>" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Mahasiswa UAB membuat penemuan baru</h5>
                <p class="card-text">beberapa mahasiswa UAB bekerja sama....</p>
              </div>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-md-6 mb-3">
            <div class="card shadow-sm">
              <img src="<?= base_url('assets/img/iklim.jpg') ?>" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Begini tanggapan dosen UAB perihal perubahan iklim</h5>
                <p class="card-text">dalam wawancara yang dilakukan....</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <div class="card shadow-sm">
              <img src="<?= base_url('assets/img/prof.jpg') ?>" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Prof. Nasaruddin : Silaturahmi Dapat Memperkuat persatuan bangsa</h5>
                <p class="card-text">Imam Besar Masjid Istiqlal, Prof. Dr. KH. Nasaruddin...</p>
              </div>
            </div>
          </div>

        </div>

      </div>

      <!-- Promo banner -->
      <div class="col-md-6">
        <div id="promo"></div>
      </div>

    </div>
</section>

<!-- Jurusan -->
<div class="container mb-4 text-center">
  <div class="row text-center p-4">
    <h2>Jurusan</h2>
  </div>
  <div class="jurusan justify-content-center m-auto ">
    <div class="slider_container m-auto ">
      <div class="item shadow-sm mx-2">

        <!-- menu -->
        <div class="card slide-item">
          <div class="hero">
            <img src="<?= base_url('assets/img/SI.jpg') ?>" />
          </div>
          <div class="desk container">
            <h5 class="nama m-auto">SISTEM INFORMASI</h5>
            <p class="isi m-auto">Sistem Informasi adalah bidang yang menggabungkan ilmu komputer dengan bisnis dan manajemen. Di jurusan ini kamu akan belajar gimana mengidentifikasi....</p>
          </div>
          <div class="actions justify-content-center d-flex align-items-center">
            <a href="">Show More</a>
          </div>
        </div>

        <div class="card slide-item">
          <div class="hero">
            <img src="<?= base_url('assets/img/TI.jpg') ?>" />
          </div>
          <div class="desk container">
            <h5 class="nama m-auto">TEKNOLOGI INFORMATIKA</h5>
            <p class="isi m-auto">Teknik Informatika merupakan bidang ilmu yang mempelajari bagaimana menggunakan teknologi komputer secara optimal guna menangani masalah transformasi...</p>
          </div>
          <div class="actions justify-content-center d-flex align-items-center">
            <a href="">Show More</a>
          </div>
        </div>

        <div class="card slide-item">
          <div class="hero">
            <img src="<?= base_url('assets/img/PSK.jpg') ?>" />
          </div>
          <div class="desk container">
            <h5 class="nama m-auto">PROGRAM STUDI<br>KIMIA</h5>
            <p class="isi m-auto">Di program studi Kimia kamu akan mempelajari struktur, komposisi, dan sifat materi dari skala atom hingga molekul, dan bagaimana mereka...</p>
          </div>
          <div class="actions justify-content-center d-flex align-items-center">
            <a href="">Show More</a>
          </div>
        </div>

        <div class="card slide-item">
          <div class="hero">
            <img src="<?= base_url('assets/img/PSH.jpg') ?>" />
          </div>
          <div class="desk container">
            <h5 class="nama m-auto">ILMU HUKUM</h5>
            <p class="isi m-auto">Jurusan Ilmu Hukum mempelajari berbagai sistem hukum yang berkaitan dengan kehidupan kemasyarakatan maupun kegiatan bisnis.</p>
          </div>
          <div class="actions justify-content-center d-flex align-items-center">
            <a href="">Show More</a>
          </div>
        </div>

        <div class="card slide-item">
          <div class="hero">
            <img src="<?= base_url('assets/img/akuntasi.jpg') ?>" />
          </div>
          <div class="desk container">
            <h5 class="nama m-auto">AKUNTASI</h5>
            <p class="isi m-auto">Bidang studi ini mempelajari materi terkait metode pencatatan dan penyusunan laporan keuangan yang berguna membantu pemangku kepentingan dalam...</p>
          </div>
          <div class="actions justify-content-center d-flex align-items-center">
            <a href="">Show More</a>
          </div>
        </div>
        <!-- End Menu -->

      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>