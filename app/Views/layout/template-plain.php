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
  <?php if (isset($style)) {
    if (is_array($style)) {
      foreach ($style as $css) {
        link_tag("assets/css/$css.css");
      }
    } else {
      link_tag("assets/css/$style.css");
    }
  } ?>

  <!-- JQuery based Script -->
  <script type="text/javascript" src="<?= base_url('assets/js/main.js') ?>"></script>

  <title>Web Universitas</title>
</head>

<body>
  <!-- Main Content -->
  <?= $this->renderSection('content') ?>

  <!-- Independent Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>