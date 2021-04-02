<?php

class Phone {

    public $numberPhone = 12345678;


    protected function goiDien() {
        echo "<br>gọi điện ";
    }

    protected function ngheDien() {
        echo "<br>nghe điện ";
    }

    // gọi protected trong chính class đó
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

    public function goiDien()
    {
        // gọi đến method của class cha từ bên trong class con
        parent::goiDien(); // TODO: Change the autogenerated stub
    }

    public function ngheDien()
    {
        // gọi đến method của class cha từ bên trong class con
        parent::ngheDien(); // TODO: Change the autogenerated stub
    }
    // chỉ có thể gọi đến các protected từ bên trong class con
}

$sonyZ3 = new SmartPhone();
// truy cập vào tài sản của class cha
echo "<br>" . $sonyZ3->numberPhone;
echo "<br>" . $sonyZ3->goiDien();
echo "<br>" . $sonyZ3->ngheDien();
// truy cập vào tài sản của class đó
echo "<br>" . $sonyZ3->ip;
echo "<br>" . $sonyZ3->luotWeb();