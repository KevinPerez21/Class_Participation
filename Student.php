<?php

class Student {
    // Properties
    public $name;
    public $age;
    public $grade;

    // Constructor
    public function __construct($name, $age, $grade) {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }

    // Method to display student details
    public function displayDetails() {
        return "{$this->name} is {$this->age} years old and is in grade {$this->grade}.";
    }
}

?>
