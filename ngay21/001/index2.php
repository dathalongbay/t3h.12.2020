<?php

class DienThoaiCoDien {

    public $sodienthoai = 123;


    public function methodNghe() {
        // __METHOD__ trả về tên của phương thức trong class đang được gọi
        echo "<br>" . __METHOD__;
    }

    public function methodGoi() {
        echo "<br>" . __METHOD__;
    }
}

// trait
trait Maytinh {

    public function methodOffice() {
        echo "<br>" . __METHOD__;
    }

    public function methodSendEmail() {
        echo "<br>" . __METHOD__;
    }

    public function methodNhanEmail() {
        echo "<br>" . __METHOD__;
    }
}

trait Radio
{

    public function methodNgheSongRadio()
    {
        echo "<br>" . __METHOD__;
    }
}

trait MayNgheNhac {
    public function methodNgheNhac()
    {
        echo "<br>" . __METHOD__;
    }
}

class DienThoaiThongMinh extends DienThoaiCoDien{


    // nạp trait sử dụng đa kế thừa
    // mặc định sử dụng tất cả các tài sản của các trait
    use Maytinh,MayNgheNhac,Radio;
}

$sonyXperia = new DienThoaiThongMinh();

// sử dụng từ class cha đơn kế thừa qua từ khóa extends
$sonyXperia->methodGoi();
echo "<br>" . $sonyXperia->sodienthoai;

// sử dụng tài sản của trait . đa kế thừa qua từ khóa use
$sonyXperia->methodNgheNhac();
$sonyXperia->methodNgheSongRadio();
$sonyXperia->methodOffice();
