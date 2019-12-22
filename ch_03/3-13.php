<?php
function longdate($timestamp)
{
    $temp = date("l F jS Y", $timestamp);
    return "The data is $temp";
}
echo longdate(time());
?>