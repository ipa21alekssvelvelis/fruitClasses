<?php

require_once "Fruit.php";

class Apple extends Fruit{

    public function __construct($color, $weight, $seedCount){
        parent::__construct($color, $weight, $seedCount);
        
        
    }

    public function ripen(){
        echo "I'm ready to kill snow white</br>";
    }

    static function becomeHealthy(){
        echo "Eat me!";
    }
}