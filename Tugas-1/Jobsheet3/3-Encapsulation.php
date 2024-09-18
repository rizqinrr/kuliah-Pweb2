<?php

// membuat kelas Person denga atribut name
class Person {
  protected $name;

  public function __construct($name)
  {
    $this->name = $name;
  }
// membuat metode getName untuk mengambil nama
  public function getName() {
    return $this->name;
  }
}

//membuat kelas Student yang mewarisi Person
class Student extends Person{
   private $studentID;

   public function __construct( $name, $studentID )
   {
     parent::__construct($name);
    $this->studentID = $studentID;
   }

   public function getStudentID() {
    return $this->studentID;
   }

   public function getName() {
    return "<br> Nama : ". parent::getName();
   }

   public function setter($name) {
    $this->name = $name;
    return "Nama Student berhasi diubah menjadi $this->name <br>";
   }
}



class Teacher extends Person {
  protected $teacherID;

  public function getName()
  {
    return "Nama : " . parent::getName();
  }
}

$stu = new Student("Indra", "11");
echo $stu->getName();
echo "<br><br>";
echo $stu->setter("Rizqi");
echo $stu->getName();