<?php
class AdminOrder
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Lấy tất cả đơn hàng
    public function getAllOrders()
    {
        try {
            $sql = 'SELECT * FROM orders';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }

    // Lấy chi tiết đơn hàng theo ID
    public function getOrderDetail($id)
    {
        try {
            $sql = 'SELECT * FROM orders WHERE id = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':id' => $id
            ]);
            return $stmt->fetch();
        } catch (\Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }

    // Cập nhật thông tin đơn hàng
public function updateOrder($id, $fullname, $email, $phone_number, $address, $notes, $status, $total_money)
{
    try {
        // Cập nhật thời gian đặt hàng
        $order_date = date('Y-m-d H:i:s');
        
        $sql = 'UPDATE orders SET fullname = :fullname, email = :email, phone_number = :phone_number, 
                address = :address, notes = :notes, status = :status, total_money = :total_money, 
                order_date = :order_date WHERE id = :id'; // Cập nhật thời gian đặt hàng
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':fullname' => $fullname,
            ':email' => $email,
            ':phone_number' => $phone_number,
            ':address' => $address,
            ':notes' => $notes,
            ':status' => $status,
            ':total_money' => $total_money,
            ':order_date' => $order_date, // Truyền thời gian đặt hàng
            ':id' => $id
        ]);
        return true;
    } catch (\Exception $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}


    // Xóa đơn hàng
    public function deleteOrder($id)
    {
        try {
            $sql = 'DELETE FROM orders WHERE id = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':id' => $id
            ]);
            return true;
        } catch (\Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }

    // Thêm mới đơn hàng
   // Thêm mới đơn hàng
public function addOrder($fullname, $email, $phone_number, $address, $notes, $status, $total_money)
{
    try {
        // Lấy thời gian hiện tại
        $order_date = date('Y-m-d H:i:s');
        
        $sql = 'INSERT INTO orders (fullname, email, phone_number, address, notes, status, total_money, order_date) 
                VALUES (:fullname, :email, :phone_number, :address, :notes, :status, :total_money, :order_date)';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':fullname' => $fullname,
            ':email' => $email,
            ':phone_number' => $phone_number,
            ':address' => $address,
            ':notes' => $notes,
            ':status' => $status,
            ':total_money' => $total_money,
            ':order_date' => $order_date // Truyền thời gian đặt hàng
        ]);
        return true;
    } catch (\Exception $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}

}
?>
