<?php
require_once '../database/Penggantian_pengawas_ujian.php';

$query = new Penggantian();
$data = $query->query("SELECT * FROM penggantian_pengawas_ujian WHERE unit_kerja = 'Fakultas Teknik'");
?>

<div class="container justify-content-center mt-4">
  <div class="card mt-4">
    <h5 class="card-header  text-center">Data Penggantian Pengawas Ujian yang Unit Kerjanya adalah Fakultas Teknik</h5>
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
      <!-- <div class="card-footer text-body-secondary text-center">
      Politeknik Negeri Cilacap
      </div> -->
  </div>
</div>


<?php
require_once '../database/Laporan_kerja_lembur.php';

$query = new LaporanLembur();
$data = $query->query("SELECT * FROM laporan_kerja_lembur WHERE uraian_pekerjaan = 'Rapat dosen'");
?>

<div class="container justify-content-center mt-4">
  <div class="card">
    <h5 class="card-header  text-center">Data Laporan Kerja Lembur yang Uraian Pekerjaan nya adalah Rapat Dosen</h5>
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
    <!-- <div class="card-footer text-body-secondary text-center">
      Politeknik Negeri Cilacap
    </div> -->
  </div>

</div>