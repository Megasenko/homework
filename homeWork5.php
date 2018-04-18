<?php
function myArrayKeyExists($key, $array)
{
    foreach ($array as $key1 => $val) {
        if ($key === $key1) {
            return true;
        }
    }
    return false;
}

$array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
$key = 'd';
var_dump(array_key_exists($key, $array));
echo '<br>';
var_dump(myArrayKeyExists($key, $array));
echo "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function myArrayKeys($array)
{
    foreach ($array as $key => $value) {
        $keys[] = $key;
    }
    return $keys;
}

$array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
print_r(array_keys($array));
echo '<br>';
print_r(myArrayKeys($array));
echo "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function myArrayKombine($keys, $values)
{
    $i = 0;
    foreach ($keys as $key => $val) {
        $i++;
    }
    $size1 = $i;
    $j = 0;
    foreach ($values as $key => $val) {
        $j++;
    }
    $size2 = $j;
    if ($size1 === $size2) {
        $num = 0;
        foreach ($keys as $k => $v) {
            $array[$v] = $values[$num];
            $num++;
        }
        return $array;
    } else {
        echo '<b>Warning</b>: array_combine(): Both parameters should have an equal number of elements' . '<br>';
        return false;
    }
}

$keys = ['a', 'b', 'c', 'd'];
$values = [1, 2, 3, 4];

var_dump(array_combine($keys, $values));
echo '<br>';
var_dump(myArrayKombine($keys, $values));
echo "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function myArraySearch($needle, $haystrack)
{
    foreach ($haystrack as $key => $value) {
        if ($value === $needle) {
            $key1 = $key;
            return $key1;
        }
    }
    return false;
}

$array = [0 => 'q', 1 => 'w', 2 => 'e', 3 => 'r', 4 => 't', 5 => 'y'];
$need = 'y';
var_dump(array_search($need, $array));
echo "<br>";
var_dump(myArraySearch($need, $array));
echo "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function myInArray($needle, $haystrack, $strict)
{
    foreach ($haystrack as $value) {
        if ($strict === false) {
            if ($value == $needle) {
                return true;
            }
        } elseif ($strict === true) {
            if ($value === $needle) {
                return true;
            }
        }
    }
    return false;
}

$array = ['q', 1, 'e', 'r', 't', 'y'];
$need = 'q';
$strict = false;
var_dump(in_array($need, $array, $strict));
echo "<br>";
var_dump(myInArray($need, $array, $strict));
echo "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function myArrayDiff($array1, $array2)
{
    foreach ($array1 as $key => $value) {
        foreach ($array2 as $item) {
            if ($value === $item) {
                unset ($array1[$key]);
            }
        }
    }
    return $array1;
}

$array1 = ['aaa' => 'one', 'bbb' => 'two', 'ccc' => 'three'];
$array2 = ['qwerty' => 'asdf', 'zzz' => 'one', 'jgjhgjgj' => 'three'];
print_r(array_diff($array1, $array2));
echo "<br>";
print_r(myArrayDiff($array1, $array2));
echo "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function myArrayIntersect($array1, $array2)
{
    foreach ($array1 as $key => $value) {
        foreach ($array2 as $item) {
            if ($value === $item) {
                $array[$key] = $value;
            }
        }
    }
    return $array;
}

$array1 = ['aaa' => 'one', 'bbb' => 'two', 'ccc' => 'three'];
$array2 = ['qwerty' => 'asdf', 'zzz' => 'one', 'jgjhgjgj' => 'three'];
print_r(array_intersect($array1, $array2));
echo "<br>";
print_r(myArrayIntersect($array1, $array2));
echo "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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

$array1 = [1, 3, 2, 5, 0, 7, 4, 9, 6, 8];

//var_dump(sort($array1));
echo "<br>";
print_r($array1);
echo "<br>";
var_dump(mySort($array1));
echo "<br>";
print_r($array1);
echo "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
