<?php

class Goodbye {

    // khai báo hằng số trong class dùng từ khóa const
    // tên hằng số viết hoa
    // chú ý không có dấu $ trước tên const
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";

    public function byebye() {

        // trong class muốn gọi đến const
        // dùng từ khóa self::ConstName
        echo self::LEAVING_MESSAGE;

    }
}

// gọi đến hằng số dùng ClassName::ConstName
echo Goodbye::LEAVING_MESSAGE;

?>