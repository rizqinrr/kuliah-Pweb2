<?php

class Pengguna {

  protected $nama;

  public function __construct($nama)
  {
    $this->nama = $nama;
  }

  public function getNama() {
    return $this->nama;
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
}

$dosen = new Dosen("Bu Ros", "Matematika");
echo $dosen->tampilkanDosen();