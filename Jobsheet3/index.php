<?php

require_once 'View/template/header.php';
require_once 'Controller/MahasiswaController.php';
require_once 'Controller/ProgramStudiController.php';

$mhs = new MahasiswaController();
$prodi = new ProgramStudiController();

if (isset($_GET['id'])) {
    $mhs->detail();
} else if(@$_GET['page']) {
    $prodi->index();
} else {$mhs->index();}
