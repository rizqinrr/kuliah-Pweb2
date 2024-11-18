# 1. Menyiapkan table untuk menampilkan data yang sudah diambil
## a. Melakukan instansiasi dan query
>table penggantian
```sh
<?php
require_once '../database/Penggantian_pengawas_ujian.php';

$query = new Penggantian();
$data = $query->query('SELECT * FROM penggantian_pengawas_ujian');
?>
```
>table laporan
```sh
?php
require_once '../database/Laporan_kerja_lembur.php';

$query = new LaporanLembur();
$data = $query->query('SELECT * FROM laporan_kerja_lembur');
?>
```
>table data spesifik
```sh
<?php
require_once '../database/Penggantian_pengawas_ujian.php';

$query = new Penggantian();
$data = $query->query("SELECT * FROM penggantian_pengawas_ujian WHERE unit_kerja = 'Fakultas Teknik'");
?>
```
```sh
<?php
require_once '../database/Laporan_kerja_lembur.php';

$query = new LaporanLembur();
$data = $query->query("SELECT * FROM laporan_kerja_lembur WHERE uraian_pekerjaan = 'Rapat dosen'");
?>
```
## b. Menampilkan ke dalam table
>table penggantian
```sh
<table class="table table-light table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">No. </th>
            <th scope="col">Nama Pengawas diganti</th>
            <th scope="col">Unit Kerja</th>
            <th scope="col">Waktu Penggantian</th>
            <th scope="col">Jam</th>
            <th scope="col">Ruang</th>
            <th scope="col">Nama Pengawas Pengganti</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          foreach ($data as $value) :
          ?>
          <tr>
            <th scope="row"><?= $no++ ?></th>
            <td><?= $value['nama_pengawas_diganti']; ?></td>
            <td><?= $value['unit_kerja']; ?></td>
            <td><?= $value['hari_tgl_penggantian']; ?></td>
            <td><?= $value['jam']; ?></td>
            <td><?= $value['ruang']; ?></td>
            <td><?= $value['nama_pengawas_pengganti']; ?></td>
          </tr>
        <?php
        endforeach;
        ?>
        </tbody>

</table>
```
>table laporan
```sh
      <table class="table table-light table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">No. </th>
            <th scope="col">Hari/Tanggal Laporan</th>
            <th scope="col">Waktu</th>
            <th scope="col">Uraian Pekerjaan</th>
            <th scope="col">Keterangan</th>
            <th scope="col">ID Dosen</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          foreach ($data as $value) :
          ?>
          <tr>
            <th scope="row"><?= $no++ ?></th>
            <td><?= $value['hari_tgl_laporan']; ?></td>
            <td><?= $value['waktu']; ?></td>
            <td><?= $value['uraian_pekerjaan']; ?></td>
            <td><?= $value['keterangan']; ?></td>
            <td><?= $value['dosen_id']; ?></td>
          </tr>
        <?php
        endforeach;
        ?>
        </tbody>

</table>
```
>table data spesifik
```sh
      <table class="table table-light table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">No. </th>
            <th scope="col">Nama Pengawas diganti</th>
            <th scope="col">Unit Kerja</th>
            <th scope="col">Waktu Penggantian</th>
            <th scope="col">Jam</th>
            <th scope="col">Ruang</th>
            <th scope="col">Nama Pengawas Pengganti</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          foreach ($data as $value) :
          ?>
          <tr>
            <th scope="row"><?= $no++ ?></th>
            <td><?= $value['nama_pengawas_diganti']; ?></td>
            <td><?= $value['unit_kerja']; ?></td>
            <td><?= $value['hari_tgl_penggantian']; ?></td>
            <td><?= $value['jam']; ?></td>
            <td><?= $value['ruang']; ?></td>
            <td><?= $value['nama_pengawas_pengganti']; ?></td>
          </tr>
        <?php
        endforeach;
        ?>
        </tbody>

</table>
```
```sh
      <table class="table table-light table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">No. </th>
            <th scope="col">Hari/Tanggal Laporan</th>
            <th scope="col">Waktu</th>
            <th scope="col">Uraian Pekerjaan</th>
            <th scope="col">Keterangan</th>
            <th scope="col">ID Dosen</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          foreach ($data as $value) :
          ?>
          <tr>
            <th scope="row"><?= $no++ ?></th>
            <td><?= $value['hari_tgl_laporan']; ?></td>
            <td><?= $value['waktu']; ?></td>
            <td><?= $value['uraian_pekerjaan']; ?></td>
            <td><?= $value['keterangan']; ?></td>
            <td><?= $value['dosen_id']; ?></td>
          </tr>
        <?php
        endforeach;
        ?>
        </tbody>

</table>
```
# 2. Membuat header dan footer pada file terpisah agar dapat digunakan berulang-ulang
>header
```sh
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
```
>footer
```sh
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

```
# 3. Membuat file Home untuk tampilan awal
```sh

    <div class="jumbotron p-5 text-center bg-light mt-5">
        <h1 class="display-4">Welcome to My Website!</h1>
        <p class="lead">Kami menyediakan beberapa tabel yang menampikan data-data persuratan dosen. Diantaranya Penggantian Pengawasan Ujian dan Laporan Kerja Lembur </p>

    </div>
```
# 4. Membuat file index, kemudian meng-include-kan header dan footer agar link tampak bersih
```sh
<?php
include 'header.php'; // untuk mengubungkan dengan halaman header

include 'footer.php'; // untuk mengubungkan dengan halaman header

```
