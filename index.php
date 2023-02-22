<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "admin";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
  return $data;
}

function get_data($tbl, $id=0) {
  $data = [];
  $conn = $GLOBALS['conn'];
  $sql = "SELECT * FROM $tbl";
  if ($id <> 0) $sql = "SELECT * FROM $tbl WHERE id=$id";
  if (!is_numeric($id)) $sql = "SELECT * FROM $tbl WHERE $id";
  $rs = $conn->query($sql); $num_rows = 0;
  if ($rs) $num_rows = $rs->num_rows;
  if ($num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
      $data[] = $row;
    }
  }
  return $data;
}

$title = 'nortech digital';
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

$brand = explode(' ', $title);
$links = ['services', 'projects', 'contact'];

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
              <a class="nav-link <?php if ($link === $page) echo 'active border-bottom border-3 border-success' ?>" <?php if ($link === $page) echo 'aria-current="page"' ?> href="?page=<?= $link ?>#<?= $link ?>">
                <?= strtoupper(str_replace('-', ' ', $link)) ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </nav>

  <?php include "page/$page.php"; ?>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>