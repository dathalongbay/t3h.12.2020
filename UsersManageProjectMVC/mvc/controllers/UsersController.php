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

    // trả về view thêm mới
    public function create() {
        echo "<br>" . __METHOD__;

        include_once "mvc/views/users/create.php";
    }

    // lưu data khi thêm mới
    public function store() {
        echo "<br>" . __METHOD__;

        // viết validate thì cũng sẽ viết validate trong controller
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        $data = [];
        $data[] = isset($_POST["user_name"]) ? $_POST["user_name"] : "";
        $data[] = isset($_POST["first_name"]) ? $_POST["first_name"] : "";
        $data[] = isset($_POST["last_name"]) ? $_POST["last_name"] : "";
        $data[] = isset($_POST["user_email"]) ? $_POST["user_email"] : "";
        $data[] = isset($_POST["user_gender"]) ? (int) $_POST["user_gender"] : "";
        $data[] = isset($_POST["user_phone"]) ? $_POST["user_phone"] : "";
        $data[] = isset($_POST["user_address"]) ? $_POST["user_address"] : "";
        $data[] = isset($_POST["user_password"]) ? md5($_POST["user_password"]) : "";

        if (isset($_FILES["user_avatar"]["name"]) && isset($_FILES["user_avatar"]["tmp_name"])) {
            if (strlen($_FILES["user_avatar"]["name"]) > 0 && strlen($_FILES["user_avatar"]["tmp_name"]) > 0 && strlen($_FILES["user_avatar"]["size"]) > 0) {
                $target_dir = "uploads/";

                if (!file_exists($target_dir)) {
                    mkdir($target_dir, 0777, true);
                }
                $target_file = $target_dir . basename($_FILES["user_avatar"]["name"]);
                if (move_uploaded_file($_FILES["user_avatar"]["tmp_name"], $target_file)){
                    $uploadOK = 1;
                }
            }
        }

        $data[] = isset($target_file) ? $target_file : "";

        $user_birthday = isset($_POST["user_birthday"]) ? $_POST["user_birthday"] : "";
        $user_birthday .= " 00:00:01";
        $data[] = $user_birthday;

        $data[] = isset($_POST["user_desc"]) ? $_POST["user_desc"] : "";

        $data[] = date("Y-m-d H:i:s");
        $data[] = date("Y-m-d H:i:s");

        // khởi tạo model
        $userModel = new UsersModel();
        $userModel->store($data);

        $domain =  SITE_URL."index.php?controller=users&action=index";
        header("Location: $domain");
        exit;
    }

    // trả về view sửa
    public function edit() {
        echo "<br>" . __METHOD__;

        include_once "mvc/views/users/edit.php";
    }

    // cập nhật vào db
    public function update() {
        echo "<br>" . __METHOD__;
    }


    public function delete() {
        echo "<br>" . __METHOD__;
    }
}