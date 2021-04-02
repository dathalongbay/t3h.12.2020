<?php

class Car {

    public $name;

    // chỉ có thể truy cập thuộc tính hay method private bên trong
    // chính class đó
    private $price;

    protected $color;

    public function __construct($name1, $price1, $color1)
    {
        $this->name = $name1;
        $this->price = $price1;
        $this->color = $color1;
    }

    public function displayPrice() {
        // private $price;
        echo "<br> giá : " . $this->price;
    }


    protected function displayColor() {
        echo "<br> màu sắc : " . $this->color;
    }
} // end class

$toyotaCamry = new Car("toyota camry", 1000000000, "den");

echo "<pre>";
print_r($toyotaCamry);
echo "</pre>";
echo "<br>tên " . $toyotaCamry->name;
// khi muốn truy cập private property thì phải truy cập thông qua các method
// của class

// private hay protected đều không thể gọi được từ bên ngoài class
echo "<br>tên " . $toyotaCamry->displayPrice();
