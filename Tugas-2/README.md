<h1 align="center">🔥Tugas 2🔥</h1>

## A. Struktur Folder
Tugas-2  
│  
├── database  
│   ├── Database.php  
│   ├── Laporan_kerja_lembur.php  
│   ├── Penggantian_penugasan.php  
│  
├── views  
│   ├── dataspesifik.php  
│   ├── footer.php  
│   ├── header.php  
│   ├── home.php  
│   ├── index.php  
│   ├── table-laporan.php  
│   ├── table-penggantian.php  
│  
└── index.php  

### Penjelasan Tiap File
>penjelasan rinci tiap-tiap file terdapat pada readme di folder masing-masing

🔗[**database/**](./Tugas-2/database/)
  - **Database.php**: Mengelola koneksi ke database.
  - **Laporan_kerja_lembur.php**: Mengelola data laporan kerja lembur.
  - **Penggantian_penugasan.php**: Mengelola data penggantian penugasan.

🔗[**views/**](./Tugas-2/views/)

  - **index.php**: Halaman utama yang menggabungkan berbagai elemen seperti header, footer, dan tabel.
  - **footer.php**: File template untuk bagian footer halaman.
  - **header.php**: File template untuk bagian header halaman, dan menampilkan data dari file table-laporan.php , table-penggantian.php, dan dataspeisifik.
  - **table-laporan.php**: Menampilkan tabel berisi laporan kerja lembur.
  - **table-penggantian.php**: Menampilkan tabel berisi penggantian penugasan dan spesifikkambur sampai keud BAON.
  - **dataspesifik.php**: Menampilkan tabel berisi penggantian penugasan dan laporan kerja sesuai dengan spesifikasi yang diiginkan.

🔗[**index/**](views/index.php)  
    Halaman ini langsung mengarah ke file index.phpfie pan pada file ;


## Cara Menjalankan Proyek

1. **Clone Repository**  
   Clone repository ini ke direktori server lokal Anda:
   
   ```bash
   git clone https://github.com/username/repository-name.git
