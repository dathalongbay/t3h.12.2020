<?php
class UsersController {


    // liệt kê các bản ghi
    public function index() {
        echo "<br>" . __METHOD__;

        // khởi tạo model
        $userModel = new UsersModel();
        // lấy data từ model
        $users = $userModel->getAll();

        echo "<pre>";
        print_r($users);
        echo "</pre>";

        $abc = "X1234";

        $dateNow = date("d/m/Y H:i:s");

        // nạp view
        // cách sai : include_once "../views/users/index.php";

        include_once "mvc/views/users/index.php";
        // trả về phần hiển thị

        // index.php => router.php => controller cụ thể => model cụ thể => database.php kết nối CSDL
        // model trả data cho controller => gọi view và trả ra phần hiển thị
    }


    public function edit() {
        echo "<br>" . __METHOD__;
    }

    public function create() {
        echo "<br>" . __METHOD__;
    }

    public function delete() {
        echo "<br>" . __METHOD__;
    }
}