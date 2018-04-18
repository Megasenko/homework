<?php
/**
 * Created by PhpStorm.
 * User: megas
 * Date: 07.04.18
 * Time: 22:18
 */

function mySort(&$A)
{
    for ($i = (count($A) - 1); $i >= 0; $i--) {
        for ($j = 0; $j <= ($i - 1); $j++)
            if ($A[$j] > $A[$j + 1]) {
                $tmp = $A[$j];
                $A[$j] = $A[$j + 1];
                $A[$j + 1] = $tmp;
            }
    }
    return true;
}

$array1 = ['aaa' => 'one', 3 => 2, 'bbb' => 'two'];

echo "<pre>";
//var_dump(sort($array1));

foreach ($array1 as $key => $val) {
    echo $key . '=>' . $val . "<br>";
}
echo "<br>";
var_dump(mySort($array1));

foreach ($array1 as $key => $val) {
    echo $key . '=>' . $val . "<br>";
}
