<?php

class Phone {

    public $numberPhone = 12345678;


    public function goiDien() {
        echo "<br>gọi điện ";
    }

    public function ngheDien() {
        echo "<br>nghe điện ";
    }
}

// extends là kế thừa
// class con kế thừa tài sản từ class cha
// tài sản ở đây là thuôc tính và các phương thức của class cha
// trừ nhưng thuộc tính hay method private
class SmartPhone extends Phone {

    public $ip = "127.0.0.1";


    public function luotWeb() {
        echo "<br> lướt web";
    }
}

$sonyZ3 = new SmartPhone();
// truy cập vào tài sản của class cha
echo "<br>" . $sonyZ3->numberPhone;
echo "<br>" . $sonyZ3->goiDien();
echo "<br>" . $sonyZ3->ngheDien();
// truy cập vào tài sản của class đó
echo "<br>" . $sonyZ3->ip;
echo "<br>" . $sonyZ3->luotWeb();
