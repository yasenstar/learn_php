<?php
    function longdate($timestamp)
    {
        //echo date("l F jS Y", $timestamp);
        return date("l F jS Y", $timestamp);
    }
    echo longdate(time());
    $shift = 240;
    echo "\n";
    echo $shift, " days shifting: ", longdate(time() + 240 * 24 * 60 * 60);
?>