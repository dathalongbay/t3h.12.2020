<?php

class UsersModel extends Database {

    // model chỉ tương tác với CSDL hay tính toán hay thực thi logic
    // tên bảng
    public $table = "users";

    // lấy ra nhiều bản ghi
    public function getAll() {

        $sqlSelect = "SELECT * FROM $this->table";

        $stmt = $this->connection->prepare($sqlSelect);

        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_OBJ);

        $users = $stmt->fetchAll();

        return $users;
    }

    // lấy ra 1 bản ghi duy nhất
    public function getSingle($id) {

        $sqlSelect = "SELECT * FROM $this->table WHERE user_id = ? LIMIT 1";

        $stmt = $this->connection->prepare($sqlSelect);

        $stmt->execute([$id]);

        $result = $stmt->setFetchMode(PDO::FETCH_OBJ);

        $user = $stmt->fetchObject();

        return $user;
    }

    // lưu mới 1 bản ghi
    // hàm là tập hợp các câu lệnh để thực hiện 1 chức năng
    // hàm có input và output
    // input là tham số
    // output là return cuối hàm
    public function store(array $dataBind) {

        echo "<pre>";
        print_r($dataBind);
        echo "</pre>";
        $sqlInsert = "INSERT INTO $this->table ( `user_name`, `first_name`, `last_name`, `user_email`, `user_gender`, `user_phone`, `user_address`, `user_password`, `user_avatar`, `user_birthday`, `user_desc`, `created`, `updated`) VALUES ( ?, ?, ?, ?, ?, ? , ? , ? , ? , ? , ? , ? , ?)";

        $stmtInsert = $this->connection->prepare($sqlInsert);

        $resultInsert = $stmtInsert->execute($dataBind);

        // kết quả thực thi câu sql insert
        return $resultInsert;
    }


    // update 1 bản ghi
    public function update(array $dataBindSql) {

        // sql update va sql delete
        $sqlUpdate = "UPDATE $this->table SET ";

        $sqlUpdate .= "`user_name` = ? ";

        $sqlUpdate .= ",`first_name` = ?";

        $sqlUpdate .= ",`last_name` = ?";

        $sqlUpdate .= ", `user_email` = ?";

        $sqlUpdate .= ", `user_gender` = ?";

        $sqlUpdate .= ", `user_phone` = ? ";

        $sqlUpdate .= ", `user_address` = ?";

        $sqlUpdate .= ",`user_birthday` =?";

        $sqlUpdate .= ",`user_desc` = ?";

        $sqlUpdate .= ",`updated` = ?";

        $sqlUpdate .= " WHERE `user_id` = ?";

        $stmtInsert = $this->connection->prepare($sqlUpdate);

        $resultUpdate = $stmtInsert->execute($dataBindSql);

        // output
        return $resultUpdate;
    }


    // delete 1 bản ghi
    public function delete($id) {

        $sqlDelete = "DELETE FROM $this->table WHERE `user_id` = ?";

        $stmtDelete = $this->connection->prepare($sqlDelete);

        $resultDelete = $stmtDelete->execute([$id]);

        // output
        return $resultDelete;
    }
}
