<?php

require_once "Citrus.php";

class Lemon extends Citrus{

    public function __construct($color, $weight, $seedCount){
        parent::__construct($color, $weight, $seedCount);
    }

    public function ripen(){
        echo "Sour";
    }

    static function becomeHealthy(){
        echo "Eat me!";
    }
}