<?php
// agar tehubung dengan class Database
require_once 'Database.php';

// pebuatan class yang mewarisi class Database
class Penggantian extends Database {
  protected $hasil = []; // meyiapkan array untuk tempat meyimpan nilai

  public function query($query) { // methode untuk mengambil nilai dari database
    parent::__construct();
    $data = mysqli_query($this->conn, $query);
    while ($row = mysqli_fetch_array($data)) { // perulangan untuk memilah data
      $this->hasil[] = $row;
    }
    return $this->hasil; // agar mengembalikan nilai yang sudah di pilah
  }

}


