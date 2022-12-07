<?php
$title = 'nortech digital';
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

$brand = explode(' ', $title);
$links = ['who-we-are', 'what-we-do', 'our-work', 'contact-us'];

$hero_h = 'custom software & web solutions';
$hero_p = 'Our team will identify a custom solution to fit your idea, timeline, and budget, then design and build the application to meet your business needs.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= ucwords($title) ?></title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar sticky-top navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="./">
        <span class="fw-bold"><?= isset($brand[0]) ? strtoupper($brand[0]) : '' ?></span><?= isset($brand[1]) ? strtoupper($brand[1]) : '' ?>
        <img src="img/logo.png" alt="Logo" width="63" height="24" class="d-inline-block align-text-top">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <?php foreach($links as $link): ?>
            <li class="nav-item ms-lg-3">
              <a class="nav-link <?php if ($link === $page) echo 'active' ?>" <?php if ($link === $page) echo 'aria-current="page"' ?> href="?page=<?= $link ?>">
                <?= strtoupper(str_replace('-', ' ', $link)) ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </nav>

  <div class="bg-dark text-secondary py-5 text-center">
    <div class="container py-5">
      <h1 class="display-4 text-white"><?= strtoupper($hero_h) ?></h1>
      <div class="col-lg-10 mx-auto">
        <p class="lead mb-4"><?= $hero_p ?></p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <a href="" class="btn btn-dark btn-lg px-5">&darr;</a>
        </div>
      </div>
    </div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>