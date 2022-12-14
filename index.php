<?php
// membuat koneksi database
$con = mysql_connect("localhost","root","fakultas");

//mengecek koneksi mysql
if(mysql_connect_error())|{
    echo "koneksi gagal". mysql_connect_error();
}else{
    echo "koneksi berhasil"
}

//membaca data dari tabel mysql
$query = "SELECT * from mahasiswa";

//menjalankan mysql query untuk menampilkan data
$result = mysql_query($con, $query);
$mahasiswa = [];
if ($result){
    //menampilkan data
    while($row = mysql_fetch_assoc($result)){
        $mahasiswa [] = $row;
    }
    mysql_free_result($result);
}

//menutup koneksi mysql
mysql_close($con);
foreach($mahasiswa as $value){
    echo $value["nama"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1> Data Mahasiswa </h1>
    <?php var_dump($mahasiswa); ?>
    <table border="1" style="width:100%;">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
        </tr>
        <?php foreach($mahasiswa as $value): ?>
            <tr>
            <th><?php echo $value["nim"]; ?></th>
            <th><?php echo $value["nama"]; ?></th>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
