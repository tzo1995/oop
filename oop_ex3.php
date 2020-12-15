<?php

class User
{
    public static $name = "Brad";
    public static function welcome()
    {
        return  'Welcome ' . self::$name;
    }
}
echo User::welcome();

// class Customer
// {
//     public function message()
//     {
//         return User::welcome();
//     }
// }


// $user = new Customer();
// echo $user->message();
