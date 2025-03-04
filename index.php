<?php

require_once 'Car.php';
require_once 'Book.php';
require_once 'Student.php';

// Instantiate a Car object
$toyota = new Car("Toyota Camry", "XSE", 2023);
echo $toyota->displayDetails() . "<br>";

$honda = new Car("Honda Civic", "Sport", 2022);
echo $honda->displayDetails() . "<br>";

$ford = new Car("Ford Mustang", "GT", 2024);
echo $ford->displayDetails() . "<br> <br>";

// Instantiate a Book object
$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 180);
echo $book1->displayDetails() . "<br>";

$book2 = new Book("To Kill a Mockingbird", "Harper Lee", 281);
echo $book2->displayDetails() . "<br>";

$book3 = new Book("1984", "George Orwell", 328);
echo $book3->displayDetails() . "<br> <br>";


// Instantiate a Student object
$student1 = new Student("Ivan Agripa", 18, "BSIT", 2);
echo $student1->displayDetails() . "<br>";

$student2 = new Student("Kevin Perez", 23, "BSIT", 2);
echo $student2->displayDetails() . "<br>";

$student3 = new Student("James Venedict Derecho", 20, "BSIT", 2);
echo $student3->displayDetails() . "<br>";

$student4 = new Student("Symon Austin Bien", 21, "BSIT", 2);
echo $student4->displayDetails() . "<br>";



?>