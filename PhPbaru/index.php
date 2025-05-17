<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Nilai WebPro</title>
    <link rel="shortcut icon" href="img\Mercedes.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <img src="img\Mercedes.png" alt="Merc" width="24" height="24">
    <a class="navbar-brand" href="#">App Nilai</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?m=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?m=kelas">Kelas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?m=siswa">Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?m=mapel">Mata Pelajaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?m=guru">Guru</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            pesat10_nilaiwebpro
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?m=grmp">Guru - Mapel</a></li>
            <li><a class="dropdown-item" href="?m=grkl">Guru - Kelas</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="?m=nilai">Nilai</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container mt-2 mb-4">
    <?php
    $module = isset($_GET['m']) ? $_GET['m'] : "home";
    switch ($module) {
        case 'home':
            include 'home.php';
            break;

        case 'kelas':
            include 'kelas/index.php';
            break;

        case 'siswa':
            include 'siswa/index.php';
            break;
        }
    ?>
</div>

<div class="fixed-bottom">
    <div class="card">
        <div class="card-body">
            &copy; 2025-<?= date("Y")?> - <a href="https://github.com/syechanmaulana/nilaiwebpro1">Programming Web</a>

            <div class="float-end">Versi 0.0.1</div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
