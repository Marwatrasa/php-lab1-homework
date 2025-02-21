<?php
// Base Lesson class
class Lesson {
    protected $title;
    protected $text;
    protected $homework;

    public function __construct($title, $text, $homework) {
        $this->title = $title;
        $this->text = $text;
        $this->homework = $homework;
    }

    // Getters for Lesson properties
    public function getTitle() {
        return $this->title;
    }

    public function getText() {
        return $this->text;
    }

    public function getHomework() {
        return $this->homework;
    }
}

// PaidLesson class extending Lesson
class PaidLesson extends Lesson {
    private $price;

    // Constructor to set all properties, including price
    public function __construct($title, $text, $homework, $price) {
        parent::__construct($title, $text, $homework); // Call the parent constructor
        $this->price = $price;
    }

    // Getter for price
    public function getPrice() {
        return $this->price;
    }

    // Setter for price
    public function setPrice($price) {
        $this->price = $price;
    }
}

// Create a PaidLesson object
$paidLesson = new PaidLesson(
    "Lesson on inheritance in PHP", // Title
    "Lol, kek, cheburek",          // Text
    "Go to bed, morning evening wiser", // Homework
    99.90                           // Price
);

// Output the object using var_dump()
var_dump($paidLesson);
?>