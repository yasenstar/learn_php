<?php
    echo phpversion(), "<br />";
    if (function_exists("array_combine_xiaoqi"))
    {
        echo "Function exists";
    }
    else
    {
        echo "Function does not exist - better write our own";
    }
?>