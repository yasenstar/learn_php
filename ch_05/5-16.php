<?php
$object = new User;
$object->name = "yasen";
$object->password = "newpass";

echo $object->get_password();

class User
{
    public $name, $password;

    function get_password()
    {
        return $this->password;
        // $this is used to access the current object's properties.
    }
}
?>