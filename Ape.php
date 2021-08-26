<?php
require_once('animal.php');
class Ape extends Animal{
    public $name;
    public $legs = 2;
    public $cold_blooded = "no";

    public function __construct($string)
    {
        $this->name = $string;
    }

    public function yell(){
        return "Auooo";
    }
}
?>