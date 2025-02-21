<?php

class color {
    private $name; 
    private $color; 
    public $weight; 

    function __construct(string $name, string $color, int $weight) {
      
        $this->name = $name;   
        $this->color = $color; 
        $this->weight = $weight; 
    }

    function setName(string $name) {
     
        $this->name = $name;
    }

    function getName() {
        
        return $this->name;
    }

    function getColor() {
    
        return $this->color;
    }

    function sayHello() {
        
        return "Hi, my name is kota " . $this->getName() . " and " . $this->getColor() . " color";
    }
}

$cat3 = new color('red', 'black', 5);


echo $cat3->sayHello(); 

$color = $cat3->getColor(); 
echo "white and black c " . $color; 

?>