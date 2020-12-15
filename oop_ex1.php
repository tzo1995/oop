<?php

class User
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function sayAge()
    {
        return $this->name . ' is ' . $this->age . ' years old.';
    }

    public function __destruct()
    {
        echo "destructor run";
    }
}

$user1 = new User("Jeff", 30);
// echo $user1->name;
// echo "<br>";
// echo $user1->age;
echo $user1->sayAge();

echo "<br>";

$user2 = new User("Brad", 25);
echo $user2->sayAge();
