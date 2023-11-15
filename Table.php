<?php
require_once "Fruit.php";
class Table{
    public function __construct(public $height, public $area, public $fruits = []) {
        
    }
}