<?php
echo "九九乘法表<br />";
$x = 1;
while ($x <= 9)
{
    $y = 1;
    while ($y <= $x)
    {
        echo "$y x $x =" . $x*$y . "\t||\t";
        $y++;
    }
    echo "<br />";
    $x++;
}
?>