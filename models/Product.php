<?php
class Product {
    public $conn ;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAllProduct(){
        try {
            $sql = 'SELECT * FROM product';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo 'Lỗi' . $e->getMessage();
        }
    }
}