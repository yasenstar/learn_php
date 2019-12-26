<?php

$object = new Tiger();

echo "Tiger have...<br />";
echo "Fur: " . $object->fur . "<br />";
echo "Stripes: " . $object->stripes;

class Wildcat
{
    public $fur; //Wildcats have fur

    function __construct()
    {
        $this->fur = "True";
    }
}

class Tiger extends Wildcat
{
    public $stripes; // Tigers have stripes

    function __construct()
    {
        parent::__construct(); //call parent constructor first
        $this->stripes = "TRUE";
    }
}
?>