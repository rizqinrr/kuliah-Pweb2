<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
<nav>
    <div class="nav nav-tabs justify-content-center mt-6" id="nav-tab" role="tablist">
      <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
      <button class="nav-link" id="nav-penggantian-tab" data-bs-toggle="tab" data-bs-target="#nav-penggantian" type="button" role="tab" aria-controls="nav-penggantian" aria-selected="false">Penggantian Pengawas</button>
      <button class="nav-link" id="nav-laporan-tab" data-bs-toggle="tab" data-bs-target="#nav-laporan" type="button" role="tab" aria-controls="nav-laporan" aria-selected="false">Laporan Lembur</button>
      <button class="nav-link" id="nav-spesifik-tab" data-bs-toggle="tab" data-bs-target="#nav-spesifik" type="button" role="tab" aria-controls="nav-spesifik" aria-selected="false">Data Spesifik</button>
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0"><?php include('home.php'); ?></div>
    <div class="tab-pane fade" id="nav-penggantian" role="tabpanel" aria-labelledby="nav-penggantian-tab" tabindex="0"><?php include('table-penggantian.php'); ?></div>
    <div class="tab-pane fade" id="nav-laporan" role="tabpanel" aria-labelledby="nav-laporan-tab" tabindex="0"><?php include('table-laporan.php'); ?></div>
    <div class="tab-pane fade" id="nav-spesifik" role="tabpanel" aria-labelledby="nav-spesifik-tab" tabindex="0"> <?php include('dataspesifik.php');  ?></div>
  </div>

</div>