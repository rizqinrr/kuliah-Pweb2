<?php
// agar tehubung dengan class Database
require_once 'Database.php';

// pebuatan class yang mewarisi class Database
class LaporanLembur extends Database {
  protected $hasil = []; // meyiapkan array untuk tempat meyimpan nilai

  // __construct juga mewarisi dari Database untuk melakukan koneksi
  // public function __construct()
  // {
  //   parent::__construct();
  // }

  public function query($query) { // methode untuk mengambil nilai dari database
    parent::__construct(); // untuk mengininisialisas koneksi

    $data = mysqli_query($this->conn, $query); // memulai pengambilan data
    while ($row = mysqli_fetch_array($data)) { // perulangan untuk memilah data
      $this->hasil[] = $row;
    }
    return $this->hasil; // agar mengembalikan nilai yang sudah di pilah
  }

}


