<?php
require_once "Database.php";

class ProgramStudiModel extends Database{
  
  public function getAllProgramStudi() {
    $data = mysqli_query($this->conn, "select * from prodi");
    return $data;
  }

  public function getProgramStudiById($id) {
    $data = mysqli_query($this->conn, "SELECT * FROM prodi WHERE id = $id");
    return $data;
  }
}