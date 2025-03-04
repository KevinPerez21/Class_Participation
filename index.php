<?php

require_once 'Car.php';
require_once 'Book.php';
require_once 'Student.php';

// Instantiate a Car object
$car = new Car("Toyota", "Corolla", 2020);
echo $car->displayDetails() . "<br>";

// Instantiate a Book object
$book = new Book("1984", "George Orwell", 328);
echo $book->displayDetails() . "<br>";

// Instantiate a Student object
$student1 = new Student("Ivan Agripa", 18, 12);
echo $student1->displayDetails() . "<br>";

$student2 = new Student("Kevin Perez", "23", 21);
echo $student2->displayDetails() . "<br>";


?>