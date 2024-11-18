<?php
class Database {
private $host = 'localhost';
private $user = 'root';
private $pass = '';
private $name = 'akademik';
protected $conn;

public function __construct() {
  $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
  $this->conn ? "terhubung" : "gagal";
}

}