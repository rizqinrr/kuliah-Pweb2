<?php

class MahasiswaController {
  
  public function index() {
    require_once 'Model/MahasiswaModel.php';
    $mahasiwa = new MahasiswaModel();
    $mhs = $mahasiwa->getAllMahasiswa("SELECT * FROM mahasiswa");
    require_once "View/mahasiswa_view.php";
  }
  public function detail() {
    require_once 'Model/MahasiswaModel.php';
    $mahasiwa = new MahasiswaModel();
    // $id = $_GET['id'];
    $mhs = $mahasiwa->getMahasiswaById($_GET['id']);
    require_once "View/mahasiswa_detail_view.php";
  }
}