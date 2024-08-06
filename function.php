<?php
    // function tanpa parameters
    function tambah(){
        $angka1 = 5;
        $angka2 = 10;

        return $angka1 + $angka2;
    }

    echo tambah();
    echo "<br>";

    function kurang($a, $b){
        return $a + $b;
    }

    echo kurang(4,6);
?>