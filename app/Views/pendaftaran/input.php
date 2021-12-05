<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<style>
  body {
    background-image: url('/assets/img/pendaftaran.jpg');
    background-size: 100%;
  }
</style>
<div class="container py-3 px-md-5" id="pendaftaranContainer">

  <div class="text-center mb-4">
    <h2>Pendaftaran Mahasiswa</h2>
  </div>

  <form class="row g-4 needs-validation" method="post" id="pendaftaran" spellcheck="false">
    <?= csrf_field() ?>

    <div class="col-md-6">
      <label for="nisn" class="form-label">NISN</label>
      <input type="text" class="form-control <?= ($validation->hasError('nisn')) ? 'is-invalid' : '' ?>" value="<?= old('nisn') ?>" name=" nisn" id="nisn" requireds>
      <div class="invalid-feedback">
        <?= $validation->getError('nisn'); ?>
      </div>
    </div>

    <div class="col-md-6">
      <label for="sma" class="form-label">Asal Sekolah</label>
      <input type="text" class="form-control <?= ($validation->hasError('sma')) ? 'is-invalid' : '' ?>" value="<?= old('sma') ?>" name="sma" id="sma" requireds>
      <div class="invalid-feedback">
        <?= $validation->getError('sma'); ?>
      </div>
    </div>

    <div class="col-md-6">
      <label for="nama" class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" value="<?= old('nama') ?>" name="nama" id="nama" requireds>
      <div class="invalid-feedback">
        <?= $validation->getError('nama'); ?>
      </div>
    </div>

    <div class="col-md-6">
      <label for="gender" class="form-label">Jenis Kelamin</label>
      <select class="form-select <?= ($validation->hasError('gender')) ? 'is-invalid' : '' ?>" name="gender" id="gender" requireds>
        <option selected hidden disabled>Pilih</option>
        <option value="Laki-laki" <?= (old('gender') == 'Laki-laki') ? 'selected' : '' ?>>Laki-laki</option>
        <option value="Perempuan" <?= (old('gender') == 'Perempuan') ? 'selected' : '' ?>>Perempuan</option>
      </select>
      <?= $validation->getError('gender') ?>
    </div>

    <div class="col-md-6">
      <label for="nohp" class="form-label">Nomor Handphone</label>
      <input type="text" class="form-control <?= ($validation->hasError('nohp')) ? 'is-invalid' : '' ?>" value="<?= old('nohp') ?>" name="nohp" id="nohp" requireds>
      <div class="invalid-feedback">
        <?= $validation->getError('nohp'); ?>
      </div>
    </div>

    <div class="col-md-6">
      <label for="email" class="form-label">Email</label>
      <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" value="<?= old('email') ?>" name="email" id="email" requireds>
      <div class="invalid-feedback">
        <?= $validation->getError('email'); ?>
      </div>
    </div>

    <div class="col-md-6">
      <label for="bday" class="form-label">Tanggal Lahir</label>
      <input type="date" class="form-control <?= ($validation->hasError('bday')) ? 'is-invalid' : '' ?>" value="<?= old('bday') ?>" name="bday" id="bday" requireds>
      <div class="invalid-feedback">
        <?= $validation->getError('bday'); ?>
      </div>
    </div>

    <div class="col-md-6">
      <label for="jurusan" class="form-label">Jurusan Pilihan</label>
      <select class="form-select <?= ($validation->hasError('jurusan')) ? 'is-invalid' : '' ?>" name="jurusan" id="jurusan" requireds>
        <option selected hidden disabled>Pilih</option>
        <?php foreach ($jurusan as $prodi) : ?>
          <option value="<?= $prodi['id'] ?>" <?= (old('jurusan') == $prodi['id']) ? 'selected' : '' ?>>
            <?= $prodi['nama'] ?>
          </option>
        <?php endforeach; ?>
      </select>
      <?= $validation->getError('jurusan') ?>
    </div>

    <div class="col-12 d-flex justify-content-end">
      <button type="submit" name="daftar" value="true" class="btn btn-dark w-100">Daftar</button>
    </div>

  </form>

</div>
<?= $this->endSection() ?>