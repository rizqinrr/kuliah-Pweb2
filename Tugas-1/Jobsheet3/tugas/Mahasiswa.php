<?php
require_once 'Person.php';
class Mahasiswa extends Person {
  private $nim;
  protected $jurusan;

  public function __construct($nama, $nim, $jurusan)
  {
    parent::__construct($nama);
    $this->nim = $nim;
    $this->jurusan = $jurusan;
  }

  public function getNim() {
    return $this->nim;
  }

  public function role() {
    $role = parent::getRole(). " Mahasiswa dari jurusan $this->jurusan ";
    return $role;
  }
}

$mhs = new Mahasiswa("Rizqi", "230202087", "Komputer dan Bisnis");
echo $mhs->role();