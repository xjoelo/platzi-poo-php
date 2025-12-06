<?php 
include 'greet.php';


class User
{
    public $type; 
}

class Admin
{
    public function greet()
    {
        return "Hola Administrador";
    }

}
$user = new User;
$user->type = new Admin;
echo $user->type->greet();


echo "<br>";

$greet = greet('joel','como estas');
echo $greet;

