<?php
echo "九九乘法表<br />";
for ($x=1; $x<=9; ++$x)
{
    for ($y=1; $y<=$x; ++$y)
    {
        echo "$y x $x =" . $x*$y . "\t||\t";
    }
    echo "<br />";
}
?>