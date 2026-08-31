// Saeedahmad 




<?php
// ===============================
// Task 1: Class Constant
// ===============================

// A constant is used because MAX_BOOKS should never change during program execution.
class Library {
    const MAX_BOOKS = 3;
}

// Display the constant outside the class
echo "Maximum books allowed: " . Library::MAX_BOOKS . "\n";


// ===============================
// Task 2: Static Property and Static Method
// ===============================

// Static properties and methods belong to the class itself, not individual objects.
// They are shared across all uses of the class.
class StudentCounter {
    public static $count = 0; // Shared property

    public static function addStudent() {
        self::$count++; // Increase the shared counter
    }
}

// Call addStudent() three times without creating an object
StudentCounter::addStudent();
StudentCounter::addStudent();
StudentCounter::addStudent();

// Display the final value
echo "Total students: " . StudentCounter::$count . "\n";


// ===============================
// Task 3: Abstract Class and Abstract Method
// ===============================

// Abstract class defines a method that all child classes must implement.
abstract class Vehicle {
    abstract public function start();
}

// Car class extends Vehicle and implements start()
class Car extends Vehicle {
    public function start() {
        echo "Car engine started.\n";
    }
}

// Bike class extends Vehicle and implements start()
class Bike extends Vehicle {
    public function start() {
        echo "Bike started.\n";
    }
}

// Create objects and call start()
$car = new Car();
$car->start();

$bike = new Bike();
$bike->start();

?>
