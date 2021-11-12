<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<style>
  body {
    background-image: url(<?= base_url('assets/img/kampus.jpg') ?>);
  }
</style>
<div class="container-xxl d-flex">

  <div class="sidebar-menu-dropdown px-2 py-2" id="akademikSidebar">
    <div class="sticky-top pt-3">
      <div class="accordion accordion-flush" id="fkMenu">
        <?php foreach ($fakultas as $fk) :
          ${$fk['kode']} = $jurusan[$fk['kode']] ?>
  
          <div class="accordion-item">
            <h2 class="accordion-header" id="<?= $fk['kode'] ?>Accordion">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $fk['kode'] ?>Menu" aria-expanded="false" aria-controls="<?= $fk['kode'] ?>Menu"><?= $fk['nama'] ?></button>
            </h2>
            <div id="<?= $fk['kode'] ?>Menu" class="accordion-collapse collapse" aria-labelledby="<?= $fk['kode'] ?>Accordion" data-bs-parent="#fkMenu">
              <div class="accordion-body p-2">
                <div class="list-group list-group-flush">
                  <?php foreach (${$fk['kode']} as $prodi) : ?>
                    <a href="<?= "#prodi$prodi[id]" ?>" class="list-group-item list-group-item-action"><?= $prodi['nama'] ?></a>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
  
      </div>
    </div>
  </div>

  <div class="container px-3 py-5" id="AkademikContainer">
    <?php foreach ($fakultas as $fk) : ?>
      <h2 class="mb-2">Fakultas <?= $fk['nama'] ?></h2>
      <?php foreach (${$fk['kode']} as $prodi) : ?>
        <div class="mb-3">
          <h3 id="prodi<?= $prodi['id'] ?>"><?= $prodi['nama'] ?></h3>
          <img class="d-block m-auto mb-2" src="<?= base_url('assets/img/jurusan/' . strtolower($prodi['nama']) . '.jpg') ?>" alt="<?= $prodi['nama'] ?>" height="300">
          <p><?= $prodi['deskripsi'] ?></p>
        </div>
    <?php unset(${$fk['kode']});
      endforeach;
    endforeach; ?>
  </div>

</div>
<?= $this->endSection() ?>