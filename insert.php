<?php

//tangkap data//
if (isset($_POST["submit"])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $id_jurusan = $_POST['id_jurusan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];

    //membuat koneksi database// 
    $con = mysqli_connect("localhost","root","","fakultas"); 

    //mengecek koneksi dengan mysql//
    if(mysqli_connect_errno()){
        echo "koneksi gagal". mysqli_connect_error();
    }else{
        echo "koneksi berhasil";
    }
    // insert sql query ke database 
    $sql = "insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) 
    values ($id_jurusan, '$nim', '$nama', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$alamat')";
    
    //running query
    if (mysqli_query($con, $sql)) {
    echo "Data berhasil ditambahkan";
    }else{
    echo "Ada error ". mysqli_error();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
<form action="insert.php" method="post">
    NIM: <input type="text" name="nim"><br>
    Nama: <input type="text" name="nama"><br>
    ID Jurusan: <input type="number" name="id_jurusan"><br>
    Jenis Kelamin: <input type="text" name="jenis_kelamin"><br>
    Tempat Lahir: <input type="text" name="tempat_lahir"><br>
    Tanggal Lahir (yyyy-mm-dd): <input type="text" name="tanggal_lahir"><br>
    Alamat: <input type="text" name="alamat"><br>
    <button type="submit" name="submit">Tambah Data</button>
</form>
</body>
</html>