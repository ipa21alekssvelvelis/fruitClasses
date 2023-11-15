<?php

require_once "Citrus.php";

class Tangerine extends Citrus{

    public function __construct($color, $weight, $seedCount){
        parent::__construct($color, $weight, $seedCount);
    }

    public function ripen(){
        echo "I'm ready for christmas";
    }

    static function becomeHealthy(){
        echo "Eat me!";
    }
    
}