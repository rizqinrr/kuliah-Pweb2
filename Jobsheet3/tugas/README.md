# Tugas Jobshet3

### 1. Membuat kelas Person dan menambahkan metode _getRole()_ yang di override oleh kelas pewarisnya
```sh
<?php

class Person {
  protected $nama;
  
  public function __construct( $nama )
  {
    $this->nama = $nama;
  }
  public function getRole() {
    $role = "$this->nama adalah seorang ";
    return $role;
  }
}
```
### 2. Membuat kelas Dosen dan Mahasiswa yang mewarisi kelas Person
-  kelas Dosen dan kelas Mahasiswa akan memiliki atribut dan metode sesuai perannya
-  Menggunakan Encapsulation untuk melindungi atribut _nidn_ dari kelas Dosen dan _nim_ dari kelas Mahasiswa

> class Dosen
```sh
<?php
require_once 'Person.php'; //untuk mehubungkan dengan halaman Person.php

class Dosen extends Person {
  private $nidn; // privat agar hanya dapat diakses oleh kelas ini
  protected $mataKuliah;

  public function __construct($nama, $nidn, $mataKuliah)
  {
    parent::__construct($nama); // atribut name diambil dari class Person
    $this->nidn = $nidn;
    $this->mataKuliah = $mataKuliah;
  }

  public function getNidn() { // metode untuk mengakses atribut yang di privat
    return $this->nidn;
  }

  public function role() { // menerapkan Polymorphism untuk menampilkan peran yang berbeda
    $role = parent::getRole(). " Dosen yang mengajar mata kuliah $this->mataKuliah ";
    return $role;
  }
}
```
> class Mahasiswa
```sh
<?php
require_once 'Person.php';
class Mahasiswa extends Person {
  private $nim;
  protected $jurusan;

  public function __construct($nama, $nim, $jurusan)
  {
    parent::__construct($nama);
    $this->nim = $nim;
    $this->jurusan = $jurusan;
  }

  public function getNim() {
    return $this->nim;
  }

  public function role() {
    $role = parent::getRole(). " Mahasiswa dari jurusan $this->jurusan ";
    return $role;
  }
}
```

- Melakukan intansiasi
>class Dosen
```sh
$dsn = new Dosen("Davu", "12321", "Sejarah");
echo $dsn->role();
```
![image](https://github.com/user-attachments/assets/77efb542-48e3-4d4e-a512-91c85b807d7c)

>class Mahasiswa
```sh
$mhs = new Mahasiswa("Rizqi", "230202087", "Komputer dan Bisnis");
echo $mhs->role();
```
![image](https://github.com/user-attachments/assets/d4a462bc-cdcd-4ab9-8e6f-7ef96a98b5ed)


### 3. Membuat kelas abstrak Jurnal dengan menggunakan Abstraction
-  class Jurnal
```sh
<?php

abstract class Jurnal {

  abstract public function kelolaJurnal( $judul );
}
```

### 4. Membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing memiliki cara tersendiri untuk mengelola pengajuan jurnal.
-  class JurnalDosen
```sh
class jurnalDosen extends Jurnal {

  protected $judul;
  public function kelolaJurnal( $judul )
  {
    $this->judul = $judul;
    $kelola = "Jurnal dosen dengan judul $this->judul akan mulai dikelola <br>";
    return $kelola;
  }
}
```
-  class JurnalMahasiswa
```sh
class jurnalMahasiswa extends Jurnal {

  protected $judul;
  public function kelolaJurnal( $judul )
  {
    $this->judul = $judul;
    $kelola = "Jurnal Mahasiswa dengan judul $this->judul akan mulai dikelola <br>";
    return $kelola;
  }
}
```

- Melakukan intansiasi
```sh
$dsn = new jurnalDosen();
$mhs = new jurnalMahasiswa();
echo $dsn->kelolaJurnal("Matematika Diskrit");
echo "<br>";
echo $mhs->kelolaJurnal("Digitalisasi Persuratan Mahasiswa");
```
![image](https://github.com/user-attachments/assets/1e36a643-64af-4c70-9d4f-2c26f698abfd)
