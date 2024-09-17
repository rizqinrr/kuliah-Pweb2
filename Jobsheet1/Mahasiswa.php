<?php

//Membuat class Mahasiswa
//memiliki atribut nama, npm dan jurusan
class Mahasiswa {
  protected $nama;
  protected $npm;
  protected $jurusan;

  /* constructor yang akan menginisalisasi atribut
   dan mengatur nilai awal atribut saat objek pertama kali dibuat*/
  public function __construct($nama, $npm, $jurusan)
  {
    $this->nama = $nama;
    $this->npm = $npm;
    $this->jurusan = $jurusan;
  }

  /* metode tampilkanData untuk menampilkan data mahasiswa */
  public function tampilkanData() {
    return "
    Nama : $this->nama <br>
    NPM : $this->npm <br>
    Jurusan : $this->jurusan";
  }

  // methode untuk melakukan perubahan jurusan
  public function updateJurusan( $jurusan) {
    $this->jurusan = $jurusan;
    return "Mahasiswa bernama $this->nama, sudah beganti menjadi jurusan $this->jurusan";
  }

  //methode untuk mengubah nilai npm
  public function setter($npm) {
    return $this->npm = $npm;
  }
}

$mahasiswa = new Mahasiswa("Rizqi", "230202087", "Teknik Informatika");
echo $mahasiswa->tampilkanData();
echo "<br><br>";
echo $mahasiswa->updateJurusan("Teknik Elektronika");
echo "<br><br>";
echo $mahasiswa->tampilkanData();
echo "<br><br>";
$mahasiswa->setter("230200001");
echo $mahasiswa->tampilkanData();