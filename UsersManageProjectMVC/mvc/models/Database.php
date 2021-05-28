<?php
class Database {

    // thuộc tính chứa kết nối đến CSDL
    public $connection;

    // hằng số trong class const
    const DATABASE_SERVER = "localhost";

    const DATABASE_USER = "root";

    const DATABASE_PASSWORD = "";

    const DATABASE_NAME = "usersmanageproject";


    public function __construct()
    {
        /**
         * !$this->connection
         * Khi chưa có kết nối đến CSDL
         */
        if (!$this->connection) {

            // viết theo hàm để kết nối đến CSDL
            /*$this->connection = mysqli_connect(self::DATABASE_SERVER, self::DATABASE_USER,
                self::DATABASE_PASSWORD, self::DATABASE_NAME);*/

            // Hướng PDO
            try {

                // truy cập đến const trong class self::Tên_Hằng_Số
                $serverName = self::DATABASE_SERVER;
                $databaseName = self::DATABASE_NAME;
                $username = self::DATABASE_USER;
                $password = self::DATABASE_PASSWORD;
                $this->connection = new PDO("mysql:host=$serverName;dbname=$databaseName", $username, $password);
                // set the PDO error mode to exception
                // đặt chế độ lỗi cho ngoại lệ khi kết nối PDO
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {


                echo $e->getMessage();
                exit();

            }
        }
    }
}