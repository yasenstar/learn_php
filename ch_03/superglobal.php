<?php
$came_from = $_SERVER['HTTP_REFERER'];
echo "came_from: ", $came_from;
$came_from1 = htmlentities($_SERVER['HTTP_REFERER']);
echo "<br />", "came_from1: ", $came_from1, "\n";
?>