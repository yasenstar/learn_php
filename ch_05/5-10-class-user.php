<?php
$object = new User;
print_r($object); // _r stands for "Human Readable"
echo "<br />";
$temp 
ew User('name', 'password');
print_r($temp);
echo "<br />";

$object->name       = "Yasen";
$object->password   = "mypass";
print_r($object); echo "<br />";

$object->save_user();

//echo $object;
/*
PHP Recoverable fatal error:
Object of class User could not be converted to string
 in /var/www/html/yasen/learning_php/ch_05/5-10-class-user.php on line 5
*/

class User
{
    public $name, $password;

    function save_user()
    {
        echo "Save User code goes here";
    }
}
?>