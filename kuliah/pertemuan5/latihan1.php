<?php 

/*
    // LATIHAN 1
    // PERTEMUAN 5 - array 
    // Array adalah variabel yang dapat menyimpa banyak nilai sekaligus 

    $hari1 = "senin";
    $hari2 = "selasa";

    $bulan1 = "januari";
    $bulan2 = "februari";


    // membuat array
    $hari = ["senin", "selasa", "rabu", "kamis", "jum'at", "sabtu", "minggu"]; //versi baru
    $bulan = array ("januari", "februaru", "maret", "april", "mei",); // versi lama


    // mencetak array
    // menggunakan index, dimulai dari 0  
    echo $hari [0];
    echo "<br>";
    echo $bulan [2];
    echo "<br>";


    // menggunakan var_dump() atau print_r()
    // hanya untuk debugging

    var_dump($hari); // lengkap
    echo "<br>";
    print_r($bulan); // simple
    echo "<hr>";

    // mencetak untuk user
    // menggunakan looping
    for ($i = 0; $i < count($hari); $i++) {
        echo $hari [$i];
        echo "<br>";
    }
    echo "<hr>" ;

    // menggunakan foreach
    // pengulangan khusus array
    foreach($bulan as $b) {
        echo "$b";
        echo "<br>";

    }
    echo "<hr>";

    
    // memanipulasi array
    // menambah 1 elemen di akhir
    $hari[] = "sabtu";
    $hari[] = "minggu";
    print_r($hari);   
    echo "<br>";
    $bulan[] = "april";
    $bulan[] = "mei";
    print_r($bulan);
*/
?>

<?php
// array
// variabel yang dapat memiliki banyak data
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// Menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);

?>

