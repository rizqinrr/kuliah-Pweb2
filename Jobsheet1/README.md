# KONSEP KELAS DAN OBJEK PADA PHP

## A. Pendahuluan
  Penggunaan kelas dan objek adalah inti dari pemrograman berorientasi objek (PBO) atau _Object Oriented Progamming_ (OOP). Dalam PHP, kelas digunakan untuk mendifinisikan struktur dan perilaku objek, sedangkan objek adalah instansiasi dari kelas tersebut. Dengan memanfaatkan kelas dan objek, kode dapat diorganisir dengan lebih baik, lebih mudah dipelihara, dan dapat digunakan kembali.

## B. Dasar OOP
### 1. Kelas dan Objek
####  Kelas _(Class)_
- Struktur atau blueprint yang mendefinisikan atribut atau metode yang dimiliki oleh objek
- Atribut atau properties adalah variabel yang menyimpan data untuk objek
- Metode adalah fungsi yang ditentukan dalam kelas yang dapat dipanggil oleh objek
#### Objek _(Object)_
- Instansiasi dari kelas
- Memiliki akses ke atribut dan metode yang didefinisikan dalam kelas

### 2. Atribut dan Metode
#### Atribut: 
- Menyimpan data atau keadaan dari objek.
- Aksesibilitas :
    -  Public: Dapat diakses dari mana saja.
    -  Private: Hanya dapat diakses dalam kelas itu sendiri.
    -  Protected: Dapat diakses oleh kelas itu sendiri dan kelas turunan.
#### Metode:
Operasi atau fungsi yang dilakukan oleh objek.

## C. Contoh Program
### 1. Pembuatan  _Class_
>Membuat class Mahasiswa, yang memiliki atribut nama, npm dan jurusan

```sh
<?php

class Mahasiswa {
  protected $nama;
  protected $npm;
  protected $jurusan;
```
>Membuat class Dosen, yang memiliki atribut nama, npm dan jurusan
```sh
<?php

class Dosen {
  public $nama;
  public $nip;
  public $mataKuliah;
```
### 2. Menambahkan  _constructor_ pada _Class_ untuk menginisialisasi atribut
>Menambahkan _constructor_ pada _Class_ Mahasiswa
```sh
  public function __construct($nama, $npm, $jurusan)
  {
    $this->nama = $nama;
    $this->npm = $npm;
    $this->jurusan = $jurusan;
  }
```

>Menambahkan _constructor_ pada _Class_ Dosen
```sh
  public function __construct($nama, $nip, $mataKuliah)
  {
    $this->nama = $nama;
    $this->nip = $nip;
    $this->mataKuliah = $mataKuliah;
  }
```
### 3. Menambahkan  _method_
>Menambahkan _method_ pada _Class_ Mahasiswa untuk menampilkan data
```sh
  public function tampilkanData() {
    return "
    Nama : $this->nama <br>
    NPM : $this->npm <br>
    Jurusan : $this->jurusan";
  }
```

>Menambahkan _method_ pada _Class_ Mahasiswa untuk mengubah jurusan
```sh
  public function updateJurusan( $jurusan) {
    $this->jurusan = $jurusan;
    return "Mahasiswa bernama $this->nama, sudah beganti menjadi jurusan $this->jurusan";
  }
```
>Menambahkan _method_ pada _Class_ Mahasiswa untuk mengubah atribut NPM
```sh
  public function setter($npm) {
    return $this->npm = $npm;
  }
```

>Membuat metode _tampilkanDosen()_ untuk menampilkan info dosen
```sh
  public function tampilkanDosen() {
    return "
    Nama  : $this->nama <br>
    NIP   : $this->nip <br>
    Mata Kuliah : $this->mataKuliah <br>";
  }
```
### 4. Melakukan instansiasi objek dan metode
>Melakukan instansiasi dari _Class Mahasiswa_
```sh
$mahasiswa = new Mahasiswa("Rizqi", "230202087", "Teknik Informatika");
echo $mahasiswa->tampilkanData();
echo "<br><br>";
echo $mahasiswa->updateJurusan("Teknik Elektronika");
echo "<br><br>";
echo $mahasiswa->tampilkanData();
echo "<br><br>";
$mahasiswa->setter("230200001");
echo $mahasiswa->tampilkanData();
```
![image](https://github.com/user-attachments/assets/352d5ba5-b6d8-4fe8-8fff-b8f657100a37)

>Melakukan instansiasi dari _Class Dosen
```sh
$dosen = new Dosen("Indra", "230102083", "PHP Dasar");
echo $dosen->tampilkanDosen();
```
![image](https://github.com/user-attachments/assets/7302fcf5-6fac-408d-98ad-91ad510bd500)


```sh
```
