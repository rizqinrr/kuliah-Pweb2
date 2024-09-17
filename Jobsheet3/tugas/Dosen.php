<?php
require_once 'Person.php';
class Dosen extends Person {
  private $nidn;
  protected $mataKuliah;

  public function __construct($nama, $nidn, $mataKuliah)
  {
    parent::__construct($nama);
    $this->nidn = $nidn;
    $this->mataKuliah = $mataKuliah;
  }

  public function getNidn() {
    return $this->nidn;
  }

  public function role() {
    $role = parent::getRole(). " Dosen yang mengajar mata kuliah $this->mataKuliah ";
    return $role;
  }
}

$dsn = new Dosen("Davu", "12321", "Sejarah");
echo $dsn->role();