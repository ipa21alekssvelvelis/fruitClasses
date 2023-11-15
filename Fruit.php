<?php
require_once "Seeds.php";
abstract class Fruit{
    
    protected $seeds = [];

    public function __construct(public $color, protected $weight, protected $seedCount) {
        for($i = 0; $i<$seedCount; $i++){
            $seedColors = [
                1 => 'Brown',
                2 => 'Yellow',
                3 => 'Green',
                4 => 'Purple',
            ];
            $this->seeds[$i] = new Seeds(rand(10,30), rand(5,50), $seedColors[rand(1,4)]);
        }
    }

    abstract public function ripen();

    abstract static function becomeHealthy();

}