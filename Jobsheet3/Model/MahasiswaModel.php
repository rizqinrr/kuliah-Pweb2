<?php
require_once "Database.php";

class MahasiswaModel extends Database {
  protected $hasil = [];

  public function getAllMahasiswa($query) {
    $data = mysqli_query($this->conn, $query);
    while ($row = mysqli_fetch_array($data)) {
      $this->hasil[] = $row;
    }
    return $this->hasil;
  }

  public function getMahasiswaById($id) {
    $data = mysqli_query($this->conn, "select * from mahasiswa where id = $id");
    while ($row = mysqli_fetch_array($data)) {
      $this->hasil[] = $row;
    }
    return $this->hasil;
  }
}