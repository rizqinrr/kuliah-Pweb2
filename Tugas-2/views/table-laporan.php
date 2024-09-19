<?php
require_once '../database/Laporan_kerja_lembur.php';

$query = new LaporanLembur();
$data = $query->query('SELECT * FROM laporan_kerja_lembur');
?>

<div class="container justify-content-center mt-5">
  <div class="card">
    <h5 class="card-header  text-center">Laporan Kerja Lembur</h5>
    <div class="card-body">
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
    </div>
    <div class="card-footer text-body-secondary text-center">
      Politeknik Negeri Cilacap
    </div>
  </div>

</div>