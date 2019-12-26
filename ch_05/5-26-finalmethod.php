<?php
$object = new User();
echo $object->copyright();

class User
{
    final function copyright()
    {
        echo "This class was written by Joe Smith";
    }
}
?>