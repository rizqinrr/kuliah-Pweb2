<?php

abstract class Jurnal {

  abstract public function kelolaJurnal( $judul );
}

class jurnalDosen extends Jurnal {

  protected $judul;
  public function kelolaJurnal( $judul )
  {
    $this->judul = $judul;
    $kelola = "Jurnal dosen dengan judul $this->judul akan mulai dikelola <br>";
    return $kelola;
  }
}

class jurnalMahasiswa extends Jurnal {

  protected $judul;
  public function kelolaJurnal( $judul )
  {
    $this->judul = $judul;
    $kelola = "Jurnal Mahasiswa dengan judul $this->judul akan mulai dikelola <br>";
    return $kelola;
  }
}

$dsn = new jurnalDosen();
echo $dsn->kelolaJurnal("Matematika Diskrit");