<?php
session_start();
var_dump($_SESSION['team']);
echo "<br>";
if (isset($_SESSION['team'])) {
    $member = $_GET['id'];
    $index = indexOf($_SESSION['team'], $member);
    echo $index;
    echo "<br>";
    if ($index > -1) {
        $_SESSION['team'] = remove($_SESSION['team'], $index);
    }
}
var_dump($_SESSION['team']);
echo "<br>";

function indexOf($a, $x)
{
    $result = -1;
    $i = 0;
    while ($i < count($a) && $result == -1) {
        if ($a[$i] == $x) {
            $result = $i;
        }
        $i++;
    }
    return $result;
}

function remove($a, $i)
{
    $j = $i;
    $l = count($a);
    while ($j < $l) {
        if ($j < (count($a) - 1)) {
            $a[$j] = $a[$j + 1];
        } else {
            unset($a[$j]);
        }
        $j++;
    }
    return $a;
}
