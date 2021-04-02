<?php
class Student4 {

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

    public function demo() {
        echo "<br> demo";
    }

}


// ứng dựng thực tiễn của constructor
// thường được dùng để truyền các giá trị cho các thuộc tính
// trong () khi dùng từ khóa new ClassName(truyền các tham số cho các đối số bên trong ngoặc tròn sau tên class)
$huy = new Student4("nguyễn quang huy", 19, "bắc ninh", "1.1.2000");

echo "<pre>";
print_r($huy);
echo "</pre>";
var_dump($huy);

echo $huy;


