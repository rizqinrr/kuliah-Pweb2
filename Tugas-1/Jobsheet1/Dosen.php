<?php

class Dosen {

  public $nama;
  public $nip;
  public $mataKuliah;

  public function __construct($nama, $nip, $mataKuliah)
  {
    $this->nama = $nama;
    $this->nip = $nip;
    $this->mataKuliah = $mataKuliah;
  }

  public function tampilkanDosen() {
    return "
    Nama  : $this->nama <br>
    NIP   : $this->nip <br>
    Mata Kuliah : $this->mataKuliah <br>";
  }
}

$dosen = new Dosen("Indra", "230102083", "PHP Dasar");
echo $dosen->tampilkanDosen();
