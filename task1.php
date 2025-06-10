<?php

class User {
    public $name;
    public $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getInfo() {
        echo "Name: {$this->name}, Email: {$this->email}\n";
    }
}

$user1 = new User("Иван Иванов", "ivan@example.com");
$user1->getInfo();

class Product {
    public $title;
    public $price;
    public static $productCount = 0;

    public function __construct($title, $price) {
        $this->title = $title;
        $this->price = $price;
        self::$productCount++;
    }

    public function render() {
        return "
        <div class='product-card'>
            <h2>{$this->title}</h2>
            <p>Price: \${$this->price}</p>
        </div>
        ";
    }
}

$product1 = new Product("Книга", 15);
$product2 = new Product("Ноутбук", 1200);

echo "Общее количество товаров: " . Product::$productCount . "\n";

echo $product1->render();
echo $product2->render();

class Calculator {
    public function add($a, $b) {
        return $a + $b;
    }

    public function subtract($a, $b) {
        return $a - $b;
    }

    public function multiply($a, $b) {
        return $a * $b;
    }

    public function divide($a, $b) {
        if ($b == 0) {
            throw new Exception("Деление на ноль невозможно");
        }
        return $a / $b;
    }
}

$calc = new Calculator();

echo "5 + 3 = " . $calc->add(5, 3) . "\n";        
echo "10 - 4 = " . $calc->subtract(10, 4) . "\n";   
echo "6 * 7 = " . $calc->multiply(6, 7) . "\n";    
echo "20 / 4 = " . $calc->divide(20, 4) . "\n";     

?>