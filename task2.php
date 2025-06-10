<?php

abstract class Animal {
    protected $age;

    public function __construct($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        echo "Woof!\n";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow!\n";
    }
}

$dog = new Dog(5);
$cat = new Cat(3);

echo "Dog age: " . $dog->getAge() . "\n"; 
echo "Cat age: " . $cat->getAge() . "\n"; 

$dog->makeSound(); 
$cat->makeSound();

class Rectangle {
    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }

    public function getPerimeter() {
        return 2 * ($this->width + $this->height);
    }
}

class Square extends Rectangle {
    public function __construct($sideLength) {
        parent::__construct($sideLength, $sideLength);
    }
}

$square = new Square(4);
echo "Square area: " . $square->getArea() . "\n";
echo "Square perimeter: " . $square->getPerimeter() . "\n";

class User {
    private $email;

    public function __construct($email) {
        if ($this->validateEmail($email)) {
            $this->email = $email;
        } else {
            throw new Exception("Некорректный email");
        }
    }

    public function getEmail() {
        return $this->email;
    }

    private function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
}

try {
    $user = new User("test@example.com");
    echo "Email: " . $user->getEmail() . "\n";
} catch (Exception $e) {
    echo "Ошибка: " . $e->getMessage() . "\n";
}


abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

class Triangle extends Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

$circle = new Circle(5);
echo "Circle area: " . $circle->calculateArea() . "\n";

$triangle = new Triangle(4, 3);
echo "Triangle area: " . $triangle->calculateArea() . "\n";

?>