<?php

$name="Cokorda";

/*
echo $nama;
echo "br/>"
echo $nama;
echo "br/>"
echo $nama;
echo "br/>"
echo $nama;
echo "br/>"
*/


$no = 10;


//PENGULANGAN
/*
for ($i=0; $i<$no; $i++) {
    $n = $i +1;
    echo $n." ".$nama."<br/>";
}

*/

$no = 10;
$i = 0;

/*
while ($i<$no) {
    $n = $i +1;
    echo $n." ".$nama."<br/>";
    $i++;
 }
*/


/*
$no = 10;
$i = 0;

do{
    $n = $i +1;
    echo $n." ".$nama."<br/>";
    $i++;
} while ($i < $no)
*/

/*
$data = array('Avanza','Xenia','Tesla','XPander','Rubicon', 'Wuling')

$i = 0;
for {$i=0; $i<count{$data}; $i++} {
    echo $data[$i]."br>";
}
// echo $data[5];

/*
foreach($data as $value) {
    echo $value."<br>";
}
*/

//PERCABANGAN

/*
if ($name = "Cokorda") {
    echo $nama."adalah orang Bali";
} else if{$nama = "Budi"
    echo $nama. "berasal dari Jawa";
} else {
    echo $nama. "berasal dari Jawa";
} else {
    echo $nama." darimana, ya?";
}
*/
/*
switch(nama) {
    case "Cokorda";
      $pesan = $nama. "adalah orang Bali";
    break;
    case "Budi";
      $pesan = $nama."adalah orang Jawa";
    break;
    default:
      $pesan = $nama."darimana ya?";

}
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="submit">
</form>
<?php
        if(!empty($_POST['submit'])) {
           
            switch($_POST['nama']) {
            case "Cokorda":
                  $pesan = $_POST['nama']." adalah orang Bali";
            break;
            case "Budi":
                  $pesan = $_POST['nama']." adalah orang Jawa";
            break;
            default:
                  $pesan = $_POST['nama']." darimana ya?"; 
    }

    for ($i=0;$i<$_POST['no'];$i++) {
        echo $pesan."<br>";
    }
    } else {
        echo "Anda belum input nama dan jumlah";
    }

?>    
</body>
</html>