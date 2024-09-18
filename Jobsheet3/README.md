# KONSEP _INHERITANCE_, _POLYMORPHISM_, _ENCAPSULATION_, DAN _ABSTRACTION_ DALAM PHP

## A. Pendahuluan
Object-Oriented Programming (OOP) adalah paradigma pemrograman yang
berfokus pada konsep objek. Dalam OOP, konsep dasar seperti class dan object
digunakan untuk memodelkan masalah dunia nyata ke dalam kode program. Prinsip-
prinsip dasar OOP termasuk Encapsulation, Inheritance, Polymorphism, dan
Abstraction yang memungkinkan kode lebih modular, terstruktur, dan mudah
dipelihara.

## B. Prinsip Dasar 

### Inheritance
  -  Membuat class Person dengan atribut _name_ dan metode _getName()_
```sh
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
```
  -  Membuat class Student yang mewarisi Person dan menambahkan atribut _studentID_ serta atribut _getStudent()_
```sh
class Student extends Person{
   protected $studentID;

   public function __construct( $name, $studentID )
   {
     parent::__construct($name);
    $this->studentID = $studentID;
   }

   public function getStudentID() {
    return $this->studentID;
   }
}
```
### Polymorphism
  -  Membuat class Teacher yang juga mewarisi Person dan menambahkan atribut _teacherID_
  -  meng-Overide metode _getName()_ di class Student dan Teacher untuk menampilkan format berbeda
```sh
class Student extends Person{
   protected $studentID;

   public function __construct( $name, $studentID )
   {
     parent::__construct($name);
    $this->studentID = $studentID;
   }

   public function getStudentID() {
    return $this->studentID;
   }

   public function getName() {
    return "Nama : ". parent::getName();
   }
}
```

```sh
class Teacher extends Person {
  protected $teacherID;

  public function getName()
  {
    return "Nama : " . parent::getName();
  }
}
```

### Encapsulation
  -  Mengubah atribut _studentID_ dalam class Student menjadi privat
```sh
class Student extends Person{
   private $studentID;
```
  -  Menambahkan metode setter dan getter untuk mengakses dan mengubah nilai atribut privat
```sh
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
```
-  melakukan instansiasi
```sh
$stu = new Student("Indra", "11");
echo $stu->getName();
echo "<br><br>";
echo $stu->setter("Rizqi");
echo $stu->getName();
```
![image](https://github.com/user-attachments/assets/22e79dde-7dc9-4040-8a2e-1ff9fd90a916)


### Abstraction
-  Membuat abstrak class Course dengan metode abstrak _getCourseDetails()_
```sh
<?php
 abstract class Course {
  
  abstract public function getCourseDetails();
}
```
-  Membuat class _OnlineCourse_ dan _OfflineCourse_ yang mewarisi class _Course_
```sh
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
```
```sh
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
```
-  Menambahkan metode _getCourseDetails()_ pada kedua class untuk memberikan detail yang berbeda
> class _OnlineCourse_
```sh
  public function getCourseDetails()
  {
    $detail = "Kelas $this->pelajaran akan diadakan secara online
              pada pukul $this->waktu WIB, via $this->via <br>";
    return $detail;
  }
```
> class _OfflineCourse_
```sh
public function getCourseDetails()
  {
    $detail = "Kelas $this->pelajaran akan diadakan secara offline
              pada pukul $this->waktu WIB, di $this->tempat <br>";
    return $detail;
  }
```
-  Melakukan instansiasi untuk menampilkan data
```sh
$online = new OnlineCourse("Matematika", "10.00", "Zoom");
echo $online->getCourseDetails();

echo "<br>";
$online = new OfflineCourse("Sejarah", "13.00", "Ruang A");
echo $online->getCourseDetails();
```
![image](https://github.com/user-attachments/assets/9b388532-3f44-4b2f-9267-60043e54b779)
