<?php

// chúng ta muốn tạo bảng thì chúng ta phải hiểu
// là chúng ta đang tạo table trong CSDL nào

// Câu SQL tạo table .
// CREATE TABLE ten_bang_mysql ()
// trong () khai báo các cột và các thông số của các cột trong đó
// 1 bảng có thể có nhiều cột ( field , column ) phân tách bởi dấu ,
// phân tích dòng số 1 trong ()

// dòng 1 : id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// tên_cột vd là id . INT(6) kiểu dữ liệu của cột đó và có độ dài là 6 .
// UNSIGNED là không âm
// AUTO_INCREMENT là tự động tăng thường áp dụng cho khóa chính của bảng để tự sinh id
// PRIMARY KEY : khai báo cột này là khóa chính của bảng


// dòng 2 : firstname VARCHAR(30) NOT NULL,
// firstname là tên cột . VARCHAR(30) là kiểu dữ liệu và độ dài của varchar .
// NOT NULL có nghĩa là cái cột này phải có giá trị . NULL có là ko có giá trị

// dòng 3 : reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// reg_date là tên cột . TIMESTAMP là kiểu dữ liệu .
// DEFAULT chỉ định giá trị mặc định cho cột đó
// DEFAULT CURRENT_TIMESTAMP có nghĩa là mặc định column có giá trị mặc định là
// thời gian hiện tại
// ON UPDATE có nghĩa là khi update cập nhật 1 bản ghi thì lấy CURRENT_TIMESTAMP
// update vào cho cột reg_date
//  CURRENT_TIMESTAMP trong mysql sinh ra thời gian hiện tại


// case study :
// sinh viên (
// student_id là khóa chính . int . không âm . tự động tăng
// student_name : varchar NOT NULL DEFAULT ''
// student_score : float DEFAULT 0
// student_gender : bit ( 1 là nam 2 là nữ )
// student_location : text
// student_birthday : DATETIME
// create : thời gian tạo bản ghi : DATETIME
// update : thời gian sửa bản ghi : DATETIME

// doc : https://dev.mysql.com/doc/refman/8.0/en/data-types.html
// -> SQL :
// CREATE TABLE students (
// student_id BIGINT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// student_name VARCHAR(255) NOT NULL DEFAULT '',
// student_score FLOAT(7,2) DEFAULT 0.00,
// student_gender BIT(1) DEFAULT 1,
// student_location TEXT,
// student_birthday DATETIME,
// created DATETIME,
// updated DATETIME,
// )

/*
 * tạo 1 bảng trong CSDL gì cũng đc
 * với bảng
 * tỉnh thành phố(
 * mã tỉnh
 * tên tỉnh
 * dân số
 * diện tích ( km2 )
 * mật độ dân số
 * GDP
 * cha ( parent_id ) lưu id cha của nó
 * created
 * updated
 * )
 * */




