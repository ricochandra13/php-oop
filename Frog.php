<?php
require_once('animal.php');
class Frog extends Animal{
    public $name;
    public $legs = 4;
    public $cold_blooded = "no";

    public function __construct($string)
    {
        $this->name = $string;
    }

    public function jump(){
        return "Hop Hop";
    }
}
?>