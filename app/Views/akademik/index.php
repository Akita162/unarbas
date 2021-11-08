<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container-xxl d-flex">
  <div class="sidebar p-2">
    <div class="accordion accordion-flush" id="fkMenu">

      <?php foreach ($fakultas as $fk) : ?>
        <div class="accordion-item">
          <h2 class="accordion-header" id="<?= $fk['id'] ?>Accordion">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $fk['id'] ?>Menu" aria-expanded="false" aria-controls="<?= $fk['id'] ?>Menu">
              <?= $fk['nama'] ?>
            </button>
          </h2>
          <div id="<?= $fk['id'] ?>Menu" class="accordion-collapse collapse" aria-labelledby="<?= $fk['id'] ?>Accordion" data-bs-parent="#fkMenu">
            <div class="accordion-body">
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">A second link item</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
  <div class="container">
  </div>
</div>
<?= $this->endSection() ?>