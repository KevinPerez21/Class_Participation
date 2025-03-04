<?php 

class Car {

    private $name;
    public $model;
    public $year;

    // Constructor
    public function __construct($name, $model, $year) {
        $this->name = $name;
        $this->model = $model;
        $this->year = $year;
    }

    // Method to display car details
    public function displayDetails() {
        return "This car is a {$this->year} {$this->name} {$this->model}.";
    }
    
}

?>
