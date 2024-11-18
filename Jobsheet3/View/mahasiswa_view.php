<?php
// require_once 'MahasiswaModel.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mahasiswa</title>
</head>
<h2>Data Mahasiswa</h2>
<body>
  <table border="1" style="padding: 1px;">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Alamat</th>
      </tr>
    </thead>
    <?php
    $no = 1;
    foreach ($mhs as $x) :
    ?>
    <tbody>
      <tr>
        <td><?= $no++ ?></td>
        <td><a href="index.php?id=<?= $x['id'] ?>" style="text-decoration: none;"><?= $x['nama']?></a></td>
        <td><?= $x['npm']?></td>
        <td><?= $x['alamat']?></td>
      </tr>
    </tbody>
    <?php endforeach ?>
  </table>
</body>

</html>