<?php
$object = new Son;
$object->test();
$object->test2();
$object1 = new Dad;
$object1->test();

class Dad
{
    function test()
    {
        echo "[Class Dat] I am your Father<br />";
    }
}

class Son extends Dad
{
    function test()
    {
        echo "[Class Son] I am Son<br />";
    }

    function test2()
    {
        parent::test(); // this is the only way to execute the overridden method in the parent class
        self::test(); // ensure call a method from the current class

    }
}
?>