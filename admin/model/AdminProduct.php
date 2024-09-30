<?php
class AdminProduct
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function getAllProduct()
    {
        try {
            $sql = 'SELECT * FROM product';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Exception $e) {
            echo "Lỗi" . $e->getMessage();
        }
    }
    public function insertProduct($title, $price, $discount, $thumbnail, $description, $category_id)
    {
        try {
            $sql = 'INSERT INTO product (title, price, discount, thumbnail, description, category_id)
         VALUES (:title, :price, :discount, :thumbnail, :description, :category_id)';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':title' => $title,
                ':price' => $price,
                ':discount' => $discount,
                ':thumbnail' => $thumbnail,
                ':description' => $description,
                ':category_id' => $category_id
            ]);
            return true;
        } catch (\Exception $e) {
            echo "Lỗi" . $e->getMessage();
        }
    }
    public function getDetailProduct($id)
    {
        try {
            $sql = 'SELECT * FROM product WHERE id = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':id' => $id
            ]);
            return $stmt->fetch();
        } catch (\Exception $e) {
            echo "Lỗi" . $e->getMessage();
        }
    }

    public function destroyProduct($id)
    {
        try {
            $sql = 'DELETE FROM product WHERE id =:id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':id' => $id

            ]);
            return true;
        } catch (\Exception $e) {
            echo "Lỗi" . $e->getMessage();
        }
    }

    //show
    public function getProduct($id)
    {
        try {
            $sql = 'SELECT * FROM product WHERE id = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':id' => $id
            ]);
            return $stmt->fetch();
        } catch (\Exception $e) {
            echo "Lỗi" . $e->getMessage();
        }
    }
    //EDIT
    public function getDetail($id)
    {
        try {
            $sql = 'SELECT * FROM product WHERE id = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':id' => $id
            ]);
            return $stmt->fetch();
        } catch (\Exception $e) {
            echo "Lỗi" . $e->getMessage();
        }
    }

    public function updateProduct($id, $title, $price, $discount, $thumbnail, $description,  $category_id)
    {
        try {
            $sql = 'UPDATE product SET title = :title, price = :price, discount = :discount, thumbnail = :thumbnail, description = :description, category_id = :category_id  WHERE id = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':title' => $title,
                ':price' => $price,
                ':discount' => $discount,
                ':thumbnail' => $thumbnail,
                ':description' => $description,
                ':category_id' =>  $category_id,
                ':id' => $id

            ]);
            return true;
        } catch (\Exception $e) {
            echo "Lỗi" . $e->getMessage();
        }
    }
}
