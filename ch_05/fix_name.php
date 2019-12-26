<?php
// Method 1: use variable one by one within 1 string
function fix_name($n1, $n2, $n3)
{
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));
    return $n1 . "\t" . $n2 . "\t" . $n3;
}

echo fix_name("WILLIAM", "henry", "yaSEN");

echo "<br />";

// Method 2: return as a Array
function fix_name_array($n1, $n2, $n3)
{
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));
    return array($n1, $n2, $n3);
}

$names = fix_name_array("WILLIAM", "henry", "yaSEN");
echo $names[0] . " " . $names[1] . " " . $names[2];
?>