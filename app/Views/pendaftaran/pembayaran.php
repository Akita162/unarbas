<?= $this->extend('layout/template-plain') ?>

<?= $this->section('content') ?>
<style>
  body {
    background-color: #f5eee7;
  }
</style>
<div class="container my-5" style="min-height: 80vh;">
  <form action="/pendaftaran/proses" method="post" class="row g-3">

    <?= csrf_field() ?>

    <div class="col-md-6">

      <div class="card">
        <div class="accordion" id="payment">

          <h2 class="card-header p-0" id="headingOne">
            <input type="radio" class="visually-hidden" name="payment" value="paypal" id="paypalPayment" <?= (old('payment') === 'paypal') ? 'checked' : '' ?>>
            <label for="paypalPayment" class="btn btn-light border-0 w-100 p-3 text-start collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              <span>Paypal </span>
              <img src="https://i.imgur.com/7kQEsHU.png" width="30">
            </label>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse <?= (old('payment') === 'paypal') ? 'show' : '' ?>" aria-labelledby="headingOne" data-bs-parent="#payment">
            <div class="card-body">
              <input type="text" name="paypal" class="form-control <?= ($validation->hasError('paypal')) ? 'is-invalid' : '' ?>" placeholder="Paypal email">
              <div class="invalid-feedback"><?= $validation->getError('paypal') ?></div>
            </div>
          </div>

          <h2 class="card-header p-0" id="headingTwo">
            <input type="radio" class="visually-hidden" name="payment" value="rekening" id="rekeningPayment" <?= (old('payment') !== null && old('payment') !== 'rekening') ? '' : 'checked' ?>>
            <label for="rekeningPayment" class="btn btn-light border-0 w-100 p-3 text-start" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <span>Kartu Kredit </span>
              <img src="/assets/img/bca.png" width="45">
              <img src="/assets/img/bni.png" width="45">
              <img src="/assets/img/cimb.png" width="45">
              <img src="/assets/img/mandiri.png" width="45">
            </label>
          </h2>

          <div id="collapseTwo" class="accordion-collapse collapse <?= (old('payment') !== null && old('payment') !== 'rekening') ? '' : 'show' ?>" aria-labelledby="headingTwo" data-bs-parent="#payment">
            <div class="card-body row gy-3">

              <div class="col-md-12 mb-3">
                <label for="noRek" class="form-label small">Nomor Rekening</label>
                <div class="input-group">
                  <span class="input-group-text" id="rekeningMark"><i class="fa fa-credit-card"></i></span>
                  <input type="text" name="rekening" id="noRek" class="form-control <?= ($validation->hasError('rekening')) ? 'is-invalid' : '' ?>" placeholder="16-digit kartu" aria-describedby="rekeningMark">
                  <div class="invalid-feedback"><?= $validation->getError('rekening') ?></div>
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <label for="expireDate" class="form-label small">Tanggal Kadaluarsa</label>
                <div class="input-group">
                  <span class="input-group-text" id="expireMark"><i class="fa fa-calendar"></i></span>
                  <input type="datetime" name="expiry_date" id="expireDate" class="form-control <?= ($validation->hasError('expire_date')) ? 'is-invalid' : '' ?>" placeholder="MM/YY" aria-describedby="expireMark">
                  <div class="invalid-feedback"><?= $validation->getError('expire_date') ?></div>
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <label for="cvccvv" class="form-label small">CVC/CVV</label>
                <div class="input-group">
                  <span class="input-group-text" id="cvcMark"><i class="fa fa-lock"></i></span>
                  <input type="text" name="cvc" id="cvccvv" class="form-control <?= ($validation->hasError('cvc')) ? 'is-invalid' : '' ?>" placeholder="000" aria-describedby="cvcMark">
                  <div class="invalid-feedback"><?= $validation->getError('cvc') ?></div>
                </div>
              </div>

              <span class="text-muted" style="font-size: 12px;">
                <i class="fa fa-lock"></i> Transaksi anda terlindungi dengan ssl certificate
              </span>

            </div>
          </div>

        </div>
      </div>

    </div>

    <div class="col-md-6">


      <div class="card bg-light">

        <div class="card-header p-3 d-flex">
          <span class="card-title h5 mb-0">Total</span>
          <span class="card-title h5 mb-0 ms-auto">
            <?= number_to_currency($biaya, 'IDR')
            ?>
          </span>
        </div>

        <div class="card-body">
          <div class="d-flex mb-2">
            <span>Bonus Referal</span> <span class="ms-auto"><?= number_to_currency(-$diskon / 100 * $biaya, 'IDR') ?></span>
          </div>
          <div class="d-flex">
            <span>Vat <i class="fa fa-clock-o"></i></span> <span class="ms-auto"><?= -$diskon ?>%</span>
          </div>
        </div>

        <div class="card-footer text-center">
          <button type="submit" value="true" class="btn btn-warning w-100 p-2 border-2 mb-2">Konfirmasi Pembayaran</button>
          <a href="#">Punya Kode Promo?</a>
        </div>

      </div>

    </div>

  </form>
</div>
<?= $this->endSection() ?>