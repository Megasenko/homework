<?php
/**
 * Created by PhpStorm.
 * User: megas
 * Date: 07.04.18
 * Time: 22:18
 */


function myMin($array)
{
    if ($array !=[]) {
        foreach ($array as $value) {
            $arrayVal[] = $value;
        }
        $size = count($arrayVal) - 1;
        for ($i = 0; $i < $size; $i++) {
            if ($arrayVal[$i] < $arrayVal[$i + 1]) {
                $tmp = $arrayVal[$i];
                $arrayVal[$i] = $arrayVal[$i + 1];
                $arrayVal[$i + 1] = $tmp;
            }
        }
        return $arrayVal[$size];
    } else {
        echo "<b>Warning</b>: min(): Array must contain at least one element <br>";
        return false;
    }
}

$array = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t",
    "u", "v", "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P",
    "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
//$array = [ 1, 8, 7, 6, 5,0, 4, 3, 2, 9];
//$array=[];

print_r($array);
echo "<br>";
//var_dump( min($array));
var_dump(myMin($array));







