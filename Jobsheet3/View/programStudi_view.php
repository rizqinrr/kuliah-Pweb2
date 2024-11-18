
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Program Studi</title>
</head>

<h2>Program Studi</h2>
<body>
  <table border="1" style="padding: 1px;">
    <thead>
      <tr>
        <th>No</th>
        <th>Program Studi</th>
      </tr>
    </thead>
    <?php
    $no = 1;
    foreach ($prodi as $x) :
    ?>
    <tbody>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $x['nama_prodi']?></a></td>
      </tr>
    </tbody>
    <?php endforeach ?>
  </table>
</body>

</html>