<?php
 abstract class Course {
  
  abstract public function getCourseDetails();
}

class OnlineCourse extends Course {

  private $pelajaran;
  private $waktu;
  private $via;

  public function __construct($pelajaran, $waktu, $via)
  {
    $this->pelajaran = $pelajaran;
    $this->waktu = $waktu;
    $this->via = $via;
  }

  public function getCourseDetails()
  {
    $detail = "Kelas $this->pelajaran akan diadakan secara online
              pada pukul $this->waktu WIB, via $this->via <br>";
    return $detail;
  }
}

class OfflineCourse extends Course {
  private $pelajaran;
  private $waktu;
  private $tempat;

  public function __construct($pelajaran, $waktu, $tempat)
  {
    $this->pelajaran = $pelajaran;
    $this->waktu = $waktu;
    $this->tempat = $tempat;
  }

  public function getCourseDetails()
  {
    $detail = "Kelas $this->pelajaran akan diadakan secara offline
              pada pukul $this->waktu WIB, di $this->tempat <br>";
    return $detail;
  }
}

$online = new OnlineCourse("Matematika", "10.00", "Zoom");
echo $online->getCourseDetails();

echo "<br>";
$online = new OfflineCourse("Sejarah", "13.00", "Ruang A");
echo $online->getCourseDetails();