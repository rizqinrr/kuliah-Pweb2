# IDENTIFIKASI PRINSIP DASAR PADA _OBJECT ORIENTED PROGAMMING_

## A. Pendahuluan
Object-Oriented Programming (OOP) adalah paradigma pemrograman yang
berfokus pada konsep objek. Dalam OOP, konsep dasar seperti class dan object
digunakan untuk memodelkan masalah dunia nyata ke dalam kode program. Prinsip-
prinsip dasar OOP termasuk Encapsulation, Inheritance, Polymorphism, dan
Abstraction yang memungkinkan kode lebih modular, terstruktur, dan mudah
dipelihara.

## B. Prinsip Dasar OOP
### Encapsulation:
  -  Menyembunyikan detail implementasi dan hanya memberikan
    akses melalui metode tertentu.

### Inheritance:
  -  Kelas dapat mewarisi properti dan metode dari kelas lain.

### Polymorphism:
  -  Metode yang sama dapat memiliki implementasi berbeda
    dalam class yang berbeda.

### Abstraction:
  -  Menyembunyikan detail implementasi dan hanya menampilkan
    fungsi penting.

## C. Contoh Program
### 1. Encapsulation
>Membuat class Mahasiswa, yang memiliki atribut _private_ nama, npm dan jurusan

```sh
<?php
class Mahasiswa {

  private $nama;
  private $npm;
  private $jurusan;

  public function __construct($nama, $npm, $jurusan)
  {
    $this->nama = $nama;
    $this->npm = $npm;
    $this->jurusan = $jurusan;
  }
```
>Membuat method _tampilkanData()_ untuk menampilkan data mahasiswa
```sh
  public function tampilkanData() {
    return "
    Nama : $this->nama <br>
    NPM : $this->npm <br>
    Jurusan : $this->jurusan";
  }
```

>Membuat method _getter_ dan _setter_ untuk mengakses atribut nama, npm dan jurusan
```sh
  public function get_nama() {
    return $this->nama;
  }
  public function set_nama($nama) {
    $this->nama = $nama;
    return "Nama berhasil diubah <br><br>";
  }

  public function get_npm() {
    return $this->npm;
  }
  public function set_npm($npm) {
    $this->npm = $npm;
    return "NPM berhasil diubah <br><br>";
  }

  public function get_jurusan() {
    return $this->jurusan;
  }
  public function set_jurusan($jurusan) {
    $this->jurusan = $jurusan;
    return "Jurusan berhasil diubah <br><br>";
  }
```

>Instansiasi objek dari _class Mahasiswa_ dan akses ke atribut menggunakan metode getter dan setter.
```sh
$mahasiswa = new Mahasiswa("Rizqi", "230202087", "Teknik Informatika");
echo $mahasiswa->tampilkanData();
echo "<br><br>";

echo $mahasiswa->set_nama("Davu");
echo $mahasiswa->tampilkanData();
echo "<br><br>";

echo $mahasiswa->set_jurusan("Teknik Elektronika");
echo $mahasiswa->tampilkanData();
echo "<br><br>";
```
![image](https://github.com/user-attachments/assets/7d58c36b-f75d-40f2-8f93-0c86905138b0)


### 2. Inheritance
>Membuat class Pengguna dengan atribut nama dan metode _getNama()_
```sh
class Pengguna {

  protected $nama;

  public function __construct($nama)
  {
    $this->nama = $nama;
  }

  public function getNama() {
    return $this->nama;
  }
}
```

>Membuat class Dosen yang mewarisi class Pengguna dan menambahkan atribut
mataKuliah.
```sh
class Dosen extends Pengguna {

  protected $mataKuliah;

  public function __construct($nama, $mataKuliah)
  {
    parent::__construct($nama);
    $this->mataKuliah = $mataKuliah;
  }
```

>Menambahkan _method_ pada class Dosen untuk menampilkan data
```sh
  public function tampilkanDosen() {
    return "
    Nama : $this->nama <br>
    Mata Kuliah : $this->mataKuliah <br>";
  }
}
```

>Instansiasi objek dari class Dosen untuk menampilkan data dosen
```sh
$dosen = new Dosen("Bu Ros", "Matematika");
echo $dosen->tampilkanDosen();
```
![image](https://github.com/user-attachments/assets/0a34476c-ce67-45cd-8fe6-935b4bf43d57)


### 3. Polymorphism
>Membuat class Pengguna dengan metode _aksesFitur()_
```sh
class Pengguna {
  protected $nama;

  public function __construct($nama)
  {
    $this->nama = $nama;
  }

  public function getNama() {
    return $this->nama;
  }

  public function aksesFitur($nama) {
    $this->nama = $nama;
    return "<br> Nama berhasil dirubah menjadi $this->nama";
  }
}
```
>Membuat class Dosen dan Mahasiswa yang mewarisi class Pengguna
```sh
class Dosen extends Pengguna {

  protected $mataKuliah;

  public function __construct($nama, $mataKuliah)
  {
    parent::__construct($nama);
    $this->mataKuliah = $mataKuliah;
  }

  public function tampilkanDosen() {
    return "
    Nama : $this->nama <br>
    Mata Kuliah : $this->mataKuliah <br>";
  }
}
```
```sh
class Mahasiswa extends Pengguna {
  protected $npm;

  public function __construct($nama, $npm)
  {
    parent::__construct($nama);
    $this->npm = $npm;
  }

  public function tampilkanMahasiswa() {
    return "
    Nama : $this->nama <br>
    NPM : $this->npm <br>";
  }
}
```
>Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode
_aksesFitur()_.
```sh
$dosen = new Dosen("Bu Ros", "Matematika");
echo $dosen->tampilkanDosen();

echo $dosen->aksesFitur("Bu Laura");
echo "<br>";
echo $dosen->tampilkanDosen();

echo "<br>";
$mahasiswa = new Mahasiswa("Rizqi","230202087");
echo $mahasiswa->tampilkanMahasiswa();

echo $mahasiswa->aksesFitur("Indra");
echo "<br>";
echo $mahasiswa->tampilkanMahasiswa();
```
![image](https://github.com/user-attachments/assets/5582aecb-75c2-4c37-a762-5fa14366937c)


### 4. Abstraction
>Membuat class abstrak Pengguna dengan metode abstrak _aksesFitur()_.
```sh
abstract class Pengguna {

  protected $nama;

  public function __construct($nama)
  {
    $this->nama = $nama;
  }

  public function getNama() {
    return $this->nama;
  }

  abstract public function aksesFitur($nama);

  public function akses($nama) {
    $this->nama = $nama;
    return "<br> Nama berhasil dirubah menjadi $this->nama";
  }
}
```
>Membuat class Dosen dan Mahasiswa yang mewarisi class Pengguna
>dan mengimplementasikan metode abstrak tersebut pada metode _aksesFitur()_
```sh
class Dosen extends Pengguna {

  protected $mataKuliah;

  public function __construct($nama, $mataKuliah)
  {
    parent::__construct($nama);
    $this->mataKuliah = $mataKuliah;
  }

  public function tampilkanDosen() {
    return "
    Nama : $this->nama <br>
    Mata Kuliah : $this->mataKuliah <br>";
  }

  public function aksesFitur($nama) {
    parent::akses($nama);
  }
}

```
```sh
class Mahasiswa extends Pengguna {
  protected $npm;

  public function __construct($nama, $npm)
  {
    parent::__construct($nama);
    $this->npm = $npm;
  }

  public function tampilkanMahasiswa() {
    return "
    Nama : $this->nama <br>
    NPM : $this->npm <br>";
  }

  public function aksesFitur($nama) {
    parent::akses($nama);
  }
}
```
>Mendemonstrasikan dengan memanggil metode aksesFitur() dari objek yang
diinstansiasi.
```sh
$dosen = new Dosen("Bu Ros", "Matematika");
echo $dosen->tampilkanDosen();

echo $dosen->aksesFitur("Bu Laura");
echo "<br>";
echo $dosen->tampilkanDosen();

echo "<br>";
$mahasiswa = new Mahasiswa("Rizqi","230202087");
echo $mahasiswa->tampilkanMahasiswa();

echo $mahasiswa->aksesFitur("Indra");
echo "<br>";
echo $mahasiswa->tampilkanMahasiswa();
```

![image](https://github.com/user-attachments/assets/0e959857-5f43-490b-8214-286ececd8b7c)
