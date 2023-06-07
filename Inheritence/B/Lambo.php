<?php

class LamboCar {
    
    public $name;
    private $color;

    public function set_color($c)
    {
        $this->color = $c;
    }

    public function get_color()
    {
       return $this->color;
    }
}

class MersCar extends LamboCar {

}

$mers = new MersCar;
$mers->name = 'Maybach';

$mers->set_color('Black');

echo $mers->get_color();

// echo $mers->name;

