<?php 

class connexion{
    public $connexion;

    function __construct()
    {
        include __DIR__.'/constant.php';

        try {
            $this->connexion = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, USER, PASSWORD);
        } catch (Exception $e) {
            die("Error".$e->getMessage());
        }
    }





}




?>