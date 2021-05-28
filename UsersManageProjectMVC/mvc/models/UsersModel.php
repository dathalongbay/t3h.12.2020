<?php

class UsersModel extends Database {

    // tên bảng
    public $table = "users";

    // lấy ra nhiều bản ghi
    public function getAll() {

        $sqlSelect = "SELECT * FROM $this->table";

    }

    // lấy ra 1 bản ghi duy nhất
    public function getSingle($id) {

        $sqlSelect = "SELECT * FROM $this->table WHERE id = ?";

    }

    // lưu mới 1 bản ghi
    public function store() {

        $sqlCreate = "INSERT INTO $this->table ( `user_name`, `first_name`, `last_name`, `user_email`, `user_gender`, `user_phone`, `user_address`, `user_password`, `user_avatar`, `user_birthday`, `user_desc`, `created`, `updated`) VALUES ( ?, ?, ?, ?, ?, ? , ? , ? , ? , ? , ? , ? , ?)";

    }


    // update 1 bản ghi
    public function update() {

        $sqlUpdate = "UPDATE $this->table `user_name` = ?, `first_name` = ? ";
        $sqlUpdate .= " WHERE `user_id` = ?";

    }


    // delete 1 bản ghi
    public function delete($id) {

        $sqlDelete = "DELETE FROM $this->table WHERE `user_id` = ?";

    }
}
