<?php 
 class tabung{
    function volume($pi, $jari, $tinggi){
        $volume = $pi * $jari * $jari * $tinggi;
        echo "Volume tabung adalah ".$volume;
    }
    function luasPermukaan($pi, $jari, $tinggi){
        $lp = 2 * $pi * $jari * ($jari + $tinggi);
        echo "Luas permukaan tabung adalah ".$lp;
    }
    function luasSelimut($pi, $jari, $tinggi){
        $ls = 2 * $pi * $jari * $tinggi;
        echo "Luas selimut tabung adalah ".$ls;
    }
 }
?>
