<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>
        Chung :
        - số ( số nguyên , số thực 3.12 )
        - chuỗi
        - boolean ( true/false)
        - object ( OOP )
        - array ( mảng )
        - null

        Các kiểu dữ liệu trong js
        - thêm undefined ( chưa được định nghĩa )
        var c;
        console.log(c); // undefined


        Các kiểu dữ liệu trong php
        giống chuẩn chung ở bên trên


        Các kiểu dữ liệu trong mysql
        - số ( TINYINT , INT , BIGINT , FLOAT , DOUBLE )
        - chuỗi ( VARCHAR ( tên ) , CHAR , TEXT ( mô tả ) , LONGTEXT ( đặc biệt dài )
        - ngày tháng (DATETIME , TIMESTAMP , TIME)

        case study :
        *** bảng sinh viên
        id ( khóa chính , không âm , số INT )
        họ tên ( varchar(255) )
        sinh nhật ( DATETIME )
        điểm ( FLOAT )
        giới tính ( 0-1 ) TINYINT | BIT
        ngày tạo ( created )   DATETIME
        ngày sửa ( updated|modified )  DATETIME

        *** bảng sản phẩm
        id ( khóa chính , không âm , số INT )
        tên sản phẩm ( varchar(255) )
        giá bán ( FLOAT | DOUBLE ) 5.1 , 2.9
        giá niêm yết ( FLOAT | DOUBLE )
        mô tả sản phẩm ( TEXT , LONGTEXT )
        số lượng tồn kho ( INT , BIGINT )
        đã bán ( INT , BIGINT )

        => thiết kế bảng trong CSDL chọn các kiểu dữ liệu phù hợp cho các cột
        cột ( field )
        bản ghi ( hàng = record )

        chú ý : trong bảng có cột làm khóa chính
        mà khóa chính thường là số Không đươc phép trùng nhau về giá trị )
        khóa chính AUTO_INCREMENT ( thêm bản ghi vào thì ko cần nhập id khóa chính
        mà khóa chính tự động tăng )

        chọn collation cho bảng hay CSDL thì nên chọn là utf8mb4_unicode_ci








    </pre>

</body>
</html>
