<?php

class tabung
{

    function volume($jari, $phi, $tinggi)
    {
        $volume = $phi * $jari * $jari * $tinggi;
        echo "volume tabung adalah " . $volume;
    }

    function luas_permukaan( $jari, $phi, $tinggi)
    {
        $luas_permukaan = 2 * $phi * $jari * ($jari + $tinggi);
        echo "luas permukaan tabung adalah " . $luas_permukaan;
    }

    function luas_selimut($jari, $phi, $tinggi)
    {
        $luas_selimut = 2 * $phi * $jari * $tinggi;
        echo "luas permukaan tabung adalah " . $luas_selimut;
    }
}