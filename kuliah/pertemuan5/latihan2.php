<?php 
// latihan2
// ARRAY MULTIDIMENSI
// Array didalam array

    $array1 = [10, "sandhika", true, [1,[2],3]];
    print_r($array1);
    echo "<hr>";
// MENCETAK ANGKA 2
    echo $array1[3][1][0];
    echo "<hr>";

// MATRIKS
    /* 
    1 2 3
    4 5 6 
    7 8 9
    */
    $matriks = [
        [1,2,3], 
        [4,5,6], 
        [7,8,9]
    ];
    foreach($matriks as $baris){
        foreach($baris as $kolom){
            echo $kolom;
        }
    }
    echo "<br>";



?>