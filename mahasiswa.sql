CREATE DATABASE fakultas;

CREATE TABLE jurusan (
 id INTEGER PRIMARY KEY AUTO_INCREMENT,
 kode CHAR(4) NOT NULL,
 nama VARCHAR(50) NOT NULL
);

CREATE TABLE mahasiswa (
 id INTEGER PRIMARY KEY AUTO_INCREMENT,
 id_jurusan INTEGER NOT NULL,
 nim CHAR(8) NOT NULL,
 nama VARCHAR(50) NOT NULL,
 jenis_kelamin enum('laki-laki','perempuan') NOT NULL,
 tempat_lahir VARCHAR(50) NOT NULL,
 tanggal_lahir DATE NOT NULL,
 alamat VARCHAR(255) NOT NULL,
 FOREIGN KEY (id_jurusan) REFERENCES jurusan(id)
);

-- TUGAS 11

--buat database 
CREATE DATABASE fakultas; 

-- database muncul
show databases;

-- menggunakan database fakultas 
use fakultas;

-- input tabel jurusan 
CREATE TABLE jurusan (
    ->     id INTEGER PRIMARY KEY AUTO_INCREMENT,
    ->     kode CHAR(4) NOT NULL,
    ->     nama VARCHAR(50) NOT NULL
    -> );

--input tabel mahasiswa 
CREATE TABLE mahasiswa (
    ->     id INTEGER PRIMARY KEY AUTO_INCREMENT,
    ->     id_jurusan INTEGER NOT NULL,
    ->     nim CHAR(8) NOT NULL,
    ->     nama VARCHAR(50) NOT NULL,
    ->     jenis_kelamin enum ('Laki-laki', 'Perempuan') NOT NULL,
    ->     tempat_lahir VARCHAR(50) NOT NULL,
    ->     tanggal_lahir DATE NOT NULL,
    ->     alamat VARCHAR (255) NOT NULL,
    ->     FOREIGN KEY (id_jurusan) REFERENCES jurusan(id)
    -> );

-- isi tabel jurusan
 insert into jurusan (kode, nama) values ("APBL", "Administrasi Publik");
 insert into jurusan (kode, nama) values ("PTIF", "Pendidikan Teknik Informatika");

-- isi tabel mahasiswa
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) 
 -> value (1, "20220001", "Yehana", "perempuan", "Jogja", "2001-12-25", "Jl. Kenanga 13");
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) 
 -> value (1, "20220002", "Wichapas", "laki-laki", "Semarang", "2000-12-25", "Jl. Saturnus 40");
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) 
 -> value (2, "20221001", "Worakamon", "laki-laki", "Jakarta", "2010-10-06", "Jl. Kuningan 22");

--untuk menampilkan tabel mahasiswa
select * from mahasiswa;

-- update dan ganti alamat tabel mahasiswa
update mahasiswa set alamat = "Jl. Prambanan 97" where id = 1;

-- hapus isi tabel 
delete from mahasiswa where id= 2;