<?php
// tạo 1 lớp : class TênClass . chữ cái đầu tiên viết hoa
class Student {

    // khai báo thuộc tính = Property
    // thuộc tính chỉ ra đặc điểm tính chất của đối tượng
    public $name = "";

    public $age = 0;

    public $location;

    public $birthday;

    public $score = "";

    // khai báo phương thức
    // phương thức gần giống như hàm function
    // function nằm ngoài class còn method phương thức nằm
    // trong class
    // phương thức = method
    // phương thức chỉ ra các hành động của 1 object đối tượng
    public function enroll($name1, $age1, $location1, $birthday1) {
        // phương thức nhập học

        // gán đối số của method vào trong thuộc tính của class
        // từ khóa $this được hiểu là chính bản thân của class
        // sử dụng $this trong class
        // chú ý bỏ dấu $ trước tên thuộc tính
        $this->name = $name1;
        $this->age = $age1;
        $this->location = $location1;
        $this->birthday = $birthday1;

    }

    public function testExam($score1) {
        // thi
        $this->score = $score1;
    }



    public function graduate() {
        // phương thức tốt nghiệp
        echo "<br> tên : ". $this->name;
        echo "<br> tuổi : ". $this->age;
        echo "<br> quê quán : ". $this->location;
        echo "<br> sinh nhật : ". $this->birthday;
        if ($this->score >= 5) {
            echo "<br> cấp bằng";
        } else {
            echo "<br> lưu ban";
        }

        // gọi method khác bên trong method cụ thể
        $this->demo();

    }

    public function demo(){
        echo "<br> method demo()";
    }

} // ngoặc nhọn đóng của class

// class ( trừu tượng )
// object ( cụ thể )
// nam là sinh viên khởi tạo class Student
// mèo lông đen vàng là object khởi tạo class Meo
// xe ô tô có biển A123 là object khởi tạo class Car

// khởi tạo object thông qua từ khóa new ClassName()
$nam = new Student();
// truy cập đên thuộc tính từ bên ngoài class
// thì chúng ta sử dụng tên object
echo "<br> truy cập thuộc tính từ ngoài class : " . $nam->age;
$nam->enroll("nguyễn văn nam", 19, "hà nam", "7/8/1999");
$nam->testExam(8);

// xem cấu trúc object
echo "<pre>";
print_r($nam);
echo "</pre>";
var_dump($nam);
// không thể echo $object

$nam->graduate();
