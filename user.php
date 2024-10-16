<?php
require_once "users.php";
abstract class User extends Users
{
    public string $username;
    private string $password;

    public function __construct(string $username, string $password){

    }
    public function getUsername(){
         
    }
    
}
?>