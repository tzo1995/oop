<?php

class User
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getAge()
    {
        return $this->age;
    }
}

$user1 = new User("Jeff", 30);
// $user1->setName("Brad");
echo $user1->getName();
echo $user1->getAge();
