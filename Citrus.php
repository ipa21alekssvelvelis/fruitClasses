<?php

require_once "Fruit.php";

abstract class Citrus extends Fruit{
    
    public function __construct($color, $weight, $seedCount){
        parent::__construct($color, $weight, $seedCount);
    }
}