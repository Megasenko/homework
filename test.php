<?php
/**
 * Created by PhpStorm.
 * User: megas
 * Date: 07.04.18
 * Time: 22:18
 */


function mySort2(&$array)
{

    $size = count($array) - 1;
    for ($a = 0; $a < $size; $a++) {
        $flag = 0;
        for ($i = 0; $i < $size - $a; $i++) {
            $elem1 = $array[$i];
            $elem2 = $array[$i + 1];
            if ($elem1 > $elem2) {
                $array[$i] = $elem2;
                $array[$i + 1] = $elem1;
                $flag = 1;
            }
        }
    }
    if ($flag == 0) {
        return true;
    } else {
        return false;
    }
}


$array = [ 9, 8, 7, 6, 5,0, 4, 3, 2, 1];
//var_dump(sort($array));
var_dump(mySortirovka($array));
print_r($array);








