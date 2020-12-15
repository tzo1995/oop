<?php

class User
{
    // properties
    public $name;

    //method

    public function saysHello()
    {
        return $this->name . " says Hello";
    }
}


// object can be instantiated from the class 
$user1 = new User();
$user1->name = 'Jeff';
echo $user1->name;
echo "<br>";
echo $user1->saysHello();

echo "<br>";

$user2 = new User();
$user2->name = 'Brad';
echo $user2->name;
echo "<br>";
echo $user2->saysHello();
