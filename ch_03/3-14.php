<?php
$temp = "The data is ";
function longdate($timestamp)
{
    return $temp . date("l F jS Y", $timestamp);
}
echo longdate(time());
?>