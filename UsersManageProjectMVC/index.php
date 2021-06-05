<?php
// no mvc giống là ngôi nhà có rất nhiều cửa ra vào
// mvc thì có 1 cửa chính để ra vào duy nhất
// index.php là file đầu vào của ứng dụng
// mọi tác vụ thêm sửa xóa đăng nhập đăng ký đều chạy file index.php ngoài cùng

// câu lệnh nạp file
// include , require , include_once , require_once 4 câu lệnh nạp file vào file khác

// nên nạp đầu tiên
include_once "mvc/models/Database.php";
// nạp các controller vào trong index.php
include_once "mvc/controllers/UsersController.php";
include_once "mvc/controllers/BooksController.php";
include_once "mvc/controllers/OrdersController.php";
// nạp tiếp các model
include_once "mvc/models/UsersModel.php";
include_once "mvc/models/BooksModel.php";
include_once "mvc/models/OrdersModel.php";

// nạp tiếp router.php
include_once "mvc/router.php";

$router = new Router();
$router->run();
