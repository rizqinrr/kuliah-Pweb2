<?php

// membuat abstract class Pengguna
abstract class Pengguna {

  protected $nama;

  public function __construct($nama)
  {
    $this->nama = $nama;
  }

  public function getNama() {
    return $this->nama;
  }

  abstract public function aksesFitur($nama);

  public function akses($nama) {
    $this->nama = $nama;
    return "<br> Nama berhasil dirubah menjadi $this->nama";
  }
}

class Dosen extends Pengguna {

  protected $mataKuliah;

  public function __construct($nama, $mataKuliah)
  {
    parent::__construct($nama);
    $this->mataKuliah = $mataKuliah;
  }

  public function tampilkanDosen() {
    return "
    Nama : $this->nama <br>
    Mata Kuliah : $this->mataKuliah <br>";
  }

  public function aksesFitur($nama) {
    parent::akses($nama);
  }
}

class Mahasiswa extends Pengguna {
  protected $npm;

  public function __construct($nama, $npm)
  {
    parent::__construct($nama);
    $this->npm = $npm;
  }

  public function tampilkanMahasiswa() {
    return "
    Nama : $this->nama <br>
    NPM : $this->npm <br>";
  }

  public function aksesFitur($nama) {
    parent::akses($nama);
  }
}

$dosen = new Dosen("Bu Ros", "Matematika");
echo $dosen->tampilkanDosen();

echo $dosen->aksesFitur("Bu Laura");
echo "<br>";
echo $dosen->tampilkanDosen();

echo "<br>";
$mahasiswa = new Mahasiswa("Rizqi","230202087");
echo $mahasiswa->tampilkanMahasiswa();

echo $mahasiswa->aksesFitur("Indra");
echo "<br>";
echo $mahasiswa->tampilkanMahasiswa();
