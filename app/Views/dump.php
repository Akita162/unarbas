<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Online Bootstrap, JQuery, Font Awesome 5 Kit -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/3ff9f42339.js" crossorigin="anonymous"></script>

  <!-- CSS  -->
  <link rel="stylesheet" href="<?= base_url("assets/css/all.css") ?>" />
  <?php if (isset($css)) :
    foreach ($css as $c) : ?>
      <link rel="stylesheet" href="<?= base_url("assets/css/$c.css") ?>" />
  <?php endforeach;
  endif; ?>

  <!-- JQuery based Script -->
  <script type="text/javascript" src="<?= base_url('assets/js/main.js') ?>"></script>
  <?php if (isset($jqscript)) :
    foreach ($jqscript as $jq) : ?>
      <script src="<?= base_url("assets/js/$jq.js") ?>"></script>
  <?php endforeach;
  endif; ?>

  <title>Web Universitas</title>
</head>

<body>

  <div class="container-xxl">
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>