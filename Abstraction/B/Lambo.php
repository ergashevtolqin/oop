<?php

use MersCar as GlobalMersCar;

abstract class LamboCar {
    
    public $name;
    private $color;

  

    protected abstract function color($c);

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

    public function color($c)
    {
        $this->set_color($c);
    }

}

$car = new MersCar();

$car->color('Yellow');

echo $car->get_color();


