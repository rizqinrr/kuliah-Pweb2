# 1. Pembuatan class Database
>untuk melakukan koneksi
```sh
<?php

class Database { // pembuatan class Database untuk melakukan koneksi
  // pembuatan atribut privat agar hanya dapat diakses oleh class Database
  private $db_host = "localhost";
  private $db_user = "root";  // username database
  private $db_pass = "";  // password database
  private $db_name = "persuratan_dosen";  // nama database
  protected $conn; // untuk menyiapkan koneksi dengan database
 

  public function __construct() // untuk melakukan koneksi kedatabase
  {
    // inisialisasi koneksi
    $this->conn = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
    if(!$this->conn) { // untuk menampilkan pesan jika konesi tidak tejadi
      
      echo "Gagal terhubung";
    }
  }

}
```

# 2. Pembuatan class Penggantian_pengawas_ujian yang mewarisi class Database
```sh
<?php
// agar tehubung dengan class Database
require_once 'Database.php';

class LaporanLembur extends Database {
  protected $hasil = []; // meyiapkan array untuk tempat meyimpan nilai
```
>function untuk mengelola table
```sh
 public function query($query) { // methode untuk mengambil nilai dari database
    parent::__construct(); // untuk mengininisialisas koneksi

    $data = mysqli_query($this->conn, $query); // memulai pengambilan data
    while ($row = mysqli_fetch_array($data)) { // perulangan untuk memilah data
      $this->hasil[] = $row;
    }
    return $this->hasil; // agar mengembalikan nilai yang sudah di pilah
  }

}
```
# 3. Pembuatan class Laporan_kerja_lembur yang mewarisi class Database
```sh
<?php
// agar tehubung dengan class Database
require_once 'Database.php';

// pebuatan class yang mewarisi class Database
class Penggantian extends Database {
  protected $hasil = []; // meyiapkan array untuk tempat meyimpan nilai

```
>function untuk mengelola table
```sh
   public function query($query) { // methode untuk mengambil nilai dari database
    parent::__construct();
    $data = mysqli_query($this->conn, $query);
    while ($row = mysqli_fetch_array($data)) { // perulangan untuk memilah data
      $this->hasil[] = $row;
    }
    return $this->hasil; // agar mengembalikan nilai yang sudah di pilah
  }
}
```
