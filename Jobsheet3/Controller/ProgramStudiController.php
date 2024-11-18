<?php

class ProgramStudiController {
  
  public function index() {
    require_once 'Model/ProgramStudiModel.php';
    $programStudi = new ProgramStudiModel();
    $prodi = $programStudi->getAllProgramStudi();
    require_once "View/programStudi_view.php";
  }
  public function detail() {
    require_once 'Model/ProgramStudiModel.php';
    $mahasiwa = new ProgramStudiModel();
    // $id = $_GET['id'];
    $mhs = $mahasiwa->getProgramStudiById($_GET['id']);
    require_once "View/mahasiswa_detail_view.php";
  }
}