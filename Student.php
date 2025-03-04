<?php

class Student {
    // Properties
    public $name;
    public $age;
    public $course;
    public $year;

    // Constructor
    public function __construct($name, $age, $course, $year) {
        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
        $this->year = $year;
    }

    // Method to display student details
    public function displayDetails() {
        return "{$this->name} is {$this->age} years old and is a {$this->year}nd year student studying in {$this->course} course.";
    }
}

?>
