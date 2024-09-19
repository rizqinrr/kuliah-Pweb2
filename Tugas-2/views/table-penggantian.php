<?php
require_once '../database/Penggantian_pengawas_ujian.php';

$query = new Penggantian();
$data = $query->query('SELECT * FROM penggantian_pengawas_ujian');
?>

<div class="container justify-content-center mt-5">
  <div class="card">
    <h5 class="card-header  text-center">Penggantian Pengawas Ujian</h5>
    <div class="card-body">
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
    </div>
      <div class="card-footer text-body-secondary text-center">
      Politeknik Negeri Cilacap
      </div>
  </div>
</div>