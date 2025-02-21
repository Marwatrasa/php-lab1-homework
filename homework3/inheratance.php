<?php
// Define the CalculateSquare interface
interface CalculateSquare {
    public function calculateArea();
}

// Rectangle class implementing CalculateSquare
class Rectangle implements CalculateSquare {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Circle class implementing CalculateSquare
class Circle implements CalculateSquare {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Triangle class (does not implement CalculateSquare)
class Triangle {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }
}

// Function to display area information
function displayAreaInfo($object) {
    $className = get_class($object); // Get the class name of the object

    if ($object instanceof CalculateSquare) {
        echo "This is an object of the $className class. Area: " . $object->calculateArea() . ".\n";
    } else {
        echo "The $className class object does not implement the CalculateSquare interface.\n";
    }
}

// Create objects
$rectangle = new Rectangle(5, 10);
$circle = new Circle(7);
$triangle = new Triangle(4, 6);

// Display area information
displayAreaInfo($rectangle); // Output: This is an object of the Rectangle class. Area: 50.
displayAreaInfo($circle);    // Output: This is an object of the Circle class. Area: 153.9380400259.
displayAreaInfo($triangle);  // Output: The Triangle class object does not implement the CalculateSquare interface.
?>