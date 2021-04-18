<?php

$sqlInsert = "INSERT INTO `students` (`student_id`, `student_name`, `student_score`, `student_gender`, `student_location`, `student_birthday`, `created`, `updated`) VALUES (NULL, 'nguyễn hữu toàn', '8.00', b'1', 'việt nam', '2021-04-18 19:44:08', '2021-04-18 19:44:08', '2021-04-18 19:44:08');";

/*
 * INSERT INTO `tên_bảng` (
 * `tên_cột_1` , `tên_cột_2`, `tên_cột_3` , `tên_cột_4` ...
 * ) VALUES (
 * 'giá trị cột 1', 'giá trị cột 2' , 'giá trị cột 3' , 'giá trị cột 4'
 * );
 * */

// lưu ý nếu kểu dữ liệu là INT hay BIGINT thì ko cân để giá trị trong ''

$sqlUpdate = "UPDATE `students` SET `student_name` = 'nguyễn hữu tuấn', `student_score` = '9.00', `student_gender` = b'1', `student_location` = 'việt nam 123' WHERE `students`.`student_id` = 1;";

/*
 * UPDATE `tên bảng` SET `cột 1` = 'giá trị mới 1', `cột 2` = 'giá trị mới 2',
 * `cột 3` = 'giá trị mới 3' ... WHERE `student_id` = 1;
*/

$sqlDelete = "DELETE FROM `students` WHERE `students`.`student_id` = 1";
/*
 * DELETE FROM `tên bảng` WHERE điều kiện
 * */

// lấy hết
$sqlSelect1 = "SELECT * FROM `students`";
// SELECT `cột1`, `cột 2` ... FROM `tên bảng`

// lấy 1 bản ghi
$sqlSelect2 = "SELECT * FROM `students` WHERE student_id = 1";


