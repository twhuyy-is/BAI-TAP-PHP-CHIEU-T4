<?php
class DbHelper {
    private $conn;

    public function __construct() {
        try {
            // ✅ Kết nối CSDL qua XAMPP
            $this->conn = new PDO("mysql:host=localhost;dbname=newphp;charset=utf8", "root", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Không thể kết nối CSDL: " . $e->getMessage());
        }
    }

    public function select($sql, $params = [], $single = false) {
    $st = $this->conn->prepare($sql);
    $st->execute($params);
    return $single ? $st->fetch(PDO::FETCH_OBJ) : $st->fetchAll(PDO::FETCH_OBJ);
}

    // ✅ Thêm hàm update vào đây
    public function update($sql, $params = []) {
        $st = $this->conn->prepare($sql);
        return $st->execute($params);
    }
}
?>
