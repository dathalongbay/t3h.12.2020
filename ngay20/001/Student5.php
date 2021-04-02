<?php

class Student5 {

    public $name = "";

    public $age = 0;

    public $location;

    public $birthday;

    public $score = "";

    public function __construct($name1, $age1, $location1, $birthday1)
    {
        echo "<br> Nội dung của constructor";
        echo "<br> Nội dung của constructor 1";
        echo "<br> Nội dung của constructor 2";
        echo "<br> Nội dung của constructor 3";

        // truyền value của đối số vào trong thuộc tính
        $this->name = $name1;
        $this->age = $age1;
        $this->location = $location1;
        $this->birthday = $birthday1;
    }

    // phương thức hủy
    public function __destruct()
    {
        // hàm hủy thường được dùng để giải phóng bộ nhớ
        // nó là method đặc biệt được gọi tự động giống như constructor
        echo "<br> Nội dung của destructor";

        // đưa các thuộc tính trờ về mặc định
        $this->name = "";
        $this->age = 0;
        $this->location = "";
        $this->birthday = "";
        $this->score = "";

    }

}

$nga = new Student5("lê nga", 19, "nam định", "1.2.1998");

echo "<pre>";
print_r($nga);
echo "</pre>";

// destructor được gọi khi nào



echo "<br> kết thúc script trong file chạy";
echo "<pre>";
print_r($nga);
echo "</pre>";

echo "<br>" . (1+1);
// destructor được tự động chạy khi script php ở dòng cuối cùng kết thúc
