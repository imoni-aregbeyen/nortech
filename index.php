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
  <style>
    .bg-green {
      background-color: #008037;
      color: #fff;
    }
    .bg-img {
      background-image: url('img/shubham-dhage.jpg');
    }
  </style>
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
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ms-auto">
          <?php foreach($links as $link): ?>
            <li class="nav-item ms-lg-3">
              <a class="nav-link <?php if ($link === $page) echo 'active' ?>" <?php if ($link === $page) echo 'aria-current="page"' ?> href="?page=<?= $link ?>#<?= $link ?>">
                <?= strtoupper(str_replace('-', ' ', $link)) ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </nav>

  <div class="bg-dark text-secondary py-5 text-center bg-img">
    <div class="container py-5">
      <h1 class="display-4 text-white"><?= strtoupper($hero_h) ?></h1>
      <div class="col-lg-10 mx-auto">
        <p class="lead text-white mb-4"><?= $hero_p ?></p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <a href="#contact-us" class="btn btn-outline-light btn-lg px-4 rounded-0">
            <span>GET STARTED</span> <span>&rarr;</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <section id="what-we-do" class="py-5">
    <div class="container py-5">
      <h2 class="display-5">OUR SERVICES</h2>
      <div class="border-bottom border-5 mb-3" style="width:64px"></div>
      <div class="row">
        <div class="col-lg-4">
          <div class="card text-bg-dark mb-3">
            <img src="img/kelly-sikkema.jpg" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title display-6">WEB DESIGN & DEVELOPMENT</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card text-bg-dark mb-3">
            <img src="img/kelly-sikkema.jpg" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title display-6">TECH CONSULTANCY</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card text-bg-dark mb-3">
            <img src="img/kelly-sikkema.jpg" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title display-6">DIGITAL SKILLS TRAINING</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact-us" class="bg-green py-5">
    <div class="container py-5">
      <h2 class="display-5">LET'S WORK ON YOUR PROJECT</h2>
      <div class="border-bottom border-5 border-primary" style="width:64px"></div>
      <p class="lead">Fill and send the following form and we will contact shortly</p>
      <form>
        <div class="row">
          <div class="col-lg">
            <div class="mb-3">
              <input name="name" type="text" class="form-control rounded-0 border border-4" placeholder="Your name" required>
            </div>
          </div>
          <div class="col-lg">
            <div class="mb-3">
              <input name="phone" type="tel" class="form-control rounded-0 border border-4" placeholder="Phone number" required>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <textarea name="work" placeholder="Project description" rows="4" class="form-control rounded-0 border border-4"></textarea>
        </div>
        <div class="d-flex justify-content-end d-lg-block">
          <button type="submit" class="btn btn-primary rounded-0 px-4">SEND</button>
        </div>
      </form>
    </div>
  </section>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>