<?php

class DienThoaiCoDien {

    public static $sodienthoai = 123;

    public static function methodNghe() {
        // __METHOD__ trả về tên của phương thức trong class đang được gọi
        echo "<br>" . __METHOD__;
    }

    public static function methodGoi() {
        echo "<br>" . __METHOD__;
        // không được dùng từ khóa $this trong phương thức tính
        // $this->abc();

        $a = new self();
        // gọi đến method thường bên trong method tĩnh
        $a->abc();

        // gọi đến method tĩnh trong method tĩnh khác
        self::methodNghe();

        // gọi đến thuộc tính tĩnh
        echo "<br> SDT : " . self::$sodienthoai;
    }

    public function abc() {
        echo "<br>" . __METHOD__;
    }
}


// khởi tạo đối tượng qua từ khóa new Class()

// có những trường hợp muốn gọi thuộc tính và method mà ko cần khởi tạo đối tượng

// bên ngoài class muốn gọi thuộc tính hay method tinh
DienThoaiCoDien::methodNghe();

DienThoaiCoDien::methodGoi();

