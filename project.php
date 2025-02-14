<?php
class Cat{
    public $name;
    public $color;
    public $weight;
function __construct(){

}
    function setName(string $name){
        $this->name =$name;
    }
    function getName(){
        return $this->name;
    }

}
$cat1 =new Cat('murka','black',3);


// $cat2 =new Cat();

// $cat1->color= 'barsik';
// $cat1->color= 'gray';

// $cat1-> weight= 7;
echo $cat1->getName(). '<BR>';
// echo $cat2->getName(). '<BR>';

var_dump($cat1)
?>
