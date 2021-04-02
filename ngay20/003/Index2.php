<?php

// method abstract bắt buộc phải nằm trong class abstract
abstract class XiaomiM2 {

    public $name = "xiaomiM2";

    public $info = "ram 4gb camera AI";

    // tạo ra method trừu tượng
    // từ khóa abstract
    // chú ý abstract method thì không có code thực thi
    // khi khai abstract method thì chúng ta chỉ khai báo tên mà thôi
    abstract public function publish();
}

class VN_XiaomiM2 extends XiaomiM2 {

    // thực thi abstract publish của class cha XiaomiM2
    public function publish() {
        echo "<br> tên : " . $this->name;
        echo "<br> thông tin : " . $this->info;
        echo "<br> giá bán 2 tr";
    }

}

class China_XiaomiM2 extends XiaomiM2 {
    // thực thi abstract publish của class cha XiaomiM2
    public function publish() {
        echo "<br> 姓名 : " . $this->name;
        echo "<br> 信息 : " . $this->info;
        echo "<br> 价格 2 tệ";
    }
}
