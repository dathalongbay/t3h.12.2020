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
    public function update(array $dataRaw) {
        $dataBindSql = [];
        // sql update va sql delete
        $sqlUpdate = "UPDATE $this->table SET ";

        if (isset($dataRaw["user_name"])) {
            $sqlUpdate .= "`user_name` = ?";
            $dataBindSql[] = $dataRaw["user_name"];
        }

        if (isset($dataRaw["first_name"])) {
            $sqlUpdate .= ",`first_name` = ?";
            $dataBindSql[] = $dataRaw["first_name"];
        }

        if (isset($dataRaw["last_name"])) {
            $sqlUpdate .= ",`last_name` = ?";
            $dataBindSql[] = $dataRaw["last_name"];
        }

        if (isset($dataRaw["user_email"])) {
            $sqlUpdate .= ",`user_email` = ?";
            $dataBindSql[] = $dataRaw["user_email"];
        }

        if (isset($dataRaw["user_gender"])) {
            $sqlUpdate .= ",`user_gender` = ?";
            $dataBindSql[] = $dataRaw["user_gender"];
        }


        if (isset($dataRaw["user_phone"])) {
            $sqlUpdate .= ",`user_phone` = ?";
            $dataBindSql[] = $dataRaw["user_phone"];
        }

        if (isset($dataRaw["user_address"])) {
            $sqlUpdate .= ",`user_address` = ?";
            $dataBindSql[] = $dataRaw["user_address"];
        }

        // update password
        if (isset($dataRaw["user_password"])) {
            $sqlUpdate .= ", `user_password` = ?";
            $dataBindSql[] = $dataRaw["user_password"];
        }

        // update ảnh đại diện
        if (isset($dataRaw["user_avatar"])) {
            $sqlUpdate .= ", `user_avatar` = ?";
            $dataBindSql[] = $dataRaw["user_avatar"];
        }

        if (isset($dataRaw["user_birthday"])) {
            $sqlUpdate .= ",`user_birthday` = ?";
            $dataBindSql[] = $dataRaw["user_birthday"];
        }

        if (isset($dataRaw["user_desc"])) {
            $sqlUpdate .= ",`user_desc` = ?";
            $dataBindSql[] = $dataRaw["user_desc"];
        }

        if (isset($dataRaw["updated"])) {
            $sqlUpdate .= ",`updated` = ?";
            $dataBindSql[] = $dataRaw["updated"];
        }

        if (isset($dataRaw["user_id"])) {
            $sqlUpdate .= " WHERE `user_id` = ?";
            $dataBindSql[] = $dataRaw["user_id"];
        }

        $stmtInsert = $this->connection->prepare($sqlUpdate);

        // truyền cho ->execute là 1 mảng chỉ số
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
