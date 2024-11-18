<?php
// require_once 'MahasiswaModel.php';
// $mahasiswa = new MahasiswaModel();
// $id = $_GET['id'];
// $mhs = $mahasiswa->getMahasiswaById($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>
<body>
  <h2>Detail Mahaiswa</h2>
  <?php
  foreach ($mhs as $x) :
  ?>
  <p>Nama : <?= $x['nama'] ?></p>
  <p>NPM : <?= $x['npm'] ?></p>
  <p>Alamat : <?= $x['alamat'] ?></p>
  <?php endforeach ?>
  <br><br>
</body>
</html>