<?php 
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



?>