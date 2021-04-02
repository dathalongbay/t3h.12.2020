<?php
class Student2 {

    // khai báo thuộc tính = Property
    // thuộc tính chỉ ra đặc điểm tính chất của đối tượng
    public $name = "";

    public $age = 0;

    public $location;

    public $birthday;

    public $score = "";

    /*
        phương thức đặc biệt : phương thức khởi tạo
        chú ý có 2 Shift trừ liên tiếp __construct
        - phương thức khởi tạo được gọi 1 cách tự động
        - các phương thức khác trong class thì phải gọi 1 cách chủ động
        - __construct được gọi tự động khi chúng ta khởi tạo object
        bằng từ khóa new ClassName()
     * */
    public function __construct()
    {
        echo "<br> Nội dung của constructor";
        echo "<br> Nội dung của constructor 1";
        echo "<br> Nội dung của constructor 2";
        echo "<br> Nội dung của constructor 3";
    }

    public function demo() {
        echo "<br> demo";
    }

}

$huy = new Student2();