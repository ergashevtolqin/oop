<?php

class Fruit {
    public $name;
    private $color;
    protected $weight;

    function __construct($c)
    {
        $this->color = $c;    
    }

    public function textColor()
    {
        return 'Color is'.$this->color;
    }

    public function set_name($n)
    {
        $this->name = $n;
    }

    public function set_color($c)
    {
        $this->color = $c;
    }

    public function get_color()
    {
       return  $this->color;
    }

    protected function set_weight($w)
    {
        $this->weight = $w;
    }
    

}

class ChildFruit extends Fruit {
    protected $chilWeight;

    public function displayWeight()
    {
        $this->set_weight(23);
    }
}

// $mango = new Fruit('Orange');

// $mango->name = 'Mango';

// $mango->color = 'Yellow'; // error
// $mango->weight = 34; // error

// $mango->set_name('Banan');
// $mango->set_color('Yellow');

$apple = new ChildFruit();

$apple->displayWeight();


echo $mango->textColor();