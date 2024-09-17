<?php

class Mahasiswa {

  private $nama;
  private $npm;
  private $jurusan;

  public function __construct($nama, $npm, $jurusan)
  {
    $this->nama = $nama;
    $this->npm = $npm;
    $this->jurusan = $jurusan;
  }

  public function get_nama() {
    return $this->nama;
  }
  public function set_nama($nama) {
    $this->nama = $nama;
    return "Nama berhasil diubah <br><br>";
  }

  public function get_npm() {
    return $this->npm;
  }
  public function set_npm($npm) {
    $this->npm = $npm;
    return "NPM berhasil diubah <br><br>";
  }

  public function get_jurusan() {
    return $this->jurusan;
  }
  public function set_jurusan($jurusan) {
    $this->jurusan = $jurusan;
    return "Jurusan berhasil diubah <br><br>";
  }

  /* metode tampilkanData untuk menampilkan data mahasiswa */
  public function tampilkanData() {
    return "
    Nama : $this->nama <br>
    NPM : $this->npm <br>
    Jurusan : $this->jurusan";
  }
}

$mahasiswa = new Mahasiswa("Rizqi", "230202087", "Teknik Informatika");
echo $mahasiswa->tampilkanData();
echo "<br><br>";

echo $mahasiswa->set_nama("Davu");
echo $mahasiswa->tampilkanData();
echo "<br><br>";

echo $mahasiswa->set_jurusan("Teknik Elektronika");
echo $mahasiswa->tampilkanData();
echo "<br><br>";