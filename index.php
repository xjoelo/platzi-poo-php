<?php 
include 'greet.php';

class Person
{
    public function greet()
    {
        return "Hola $this->name";
    }
}
 
class User
{
    public $type; 
}

class Admin extends Person
{
    public $name = "Administrador";
    public function greet()
    {
        return "Hola Administrador";
    }

}
$user = new User;
$user->type = new Admin;
echo $user->type->greet();


echo "<br>";

// $greet = greet('joel','como estas');
// echo $greet;

