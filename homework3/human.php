<?php
abstract class HumanAbstract
{
    private $name;

    
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        
        return $this->name;
    }

    abstract public function getGreetings(): string;

    abstract public function getMyNameIs(): string;

    
    public function introduceYourself(): string
    {
        
        return $this->getGreetings() . '! ' . $this->getMyNameIs() . ' ' . $this->getName() . '.';
    }
}

class RussianHuman extends HumanAbstract
{
    
    public function getGreetings(): string
    {
        return 'Hi';
    }

    public function getMyNameIs(): string
    {
        return 'Меня зовут Marwat';
    }
}

class EnglishHuman extends HumanAbstract
{

    public function getGreetings(): string
    {
       
        return 'Hello';
    }

    public function getMyNameIs(): string
    {
        return 'My name is';
    }
}


$russianHuman = new RussianHuman('Иван'); 
$englishHuman = new EnglishHuman('John');  

echo $russianHuman->introduceYourself() . '<br>'; 
echo $englishHuman->introduceYourself() . '<br>'; 
?>