<?php

class HomeController
{
    public $modelProduct;
    public $modelUserClient;
    public $modelCart;
    public function __construct()
    {
        $this->modelProduct = new Product();
        $this->modelUserClient = new UserClient();
        $this->modelCart = new Cart();
    }
    public function home()
    {
        $listProduct = $this->modelProduct->getAllProduct();
        require_once 'views/LayoutClient/home.php';
    }
    public function homepage()
    {
        $listProduct = $this->modelProduct->getAllProduct();
        require_once 'views/LayoutClient/home.php';
    }
    public function productpage()
    {
        require_once 'views/LayoutClient/listProduct.php';
    }

    //
    public function detailProduct()
    {
        $id = $_GET['id_product'];
        $product = $this->modelProduct->getDetailProduct($id);
        if ($product) {
            require_once './views/Layout/detailProduct.php';
        } else {
            header("Location: " . BASE_URL);
            exit();
        }
    }
    // Auth
    public function login()
    {
        require_once 'views/Auth/Login.php';
    }

    public function postlogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->modelUserClient->checkLogin($password, $email);
            // var_dump($user);
            // die;

            if ($user == $email) {
                $_SESSION['user_client'] = $user;
                header("Location: " . BASE_URL);
                exit();
            } else {
                $_SESSION['error'] = $user;
                $_SESSION['flash'] = true;
                header("Location: " . BASE_URL . '?act=login');
                exit();
            }
        }
    }
    //
    public function addCart()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_SESSION['user_client'])) {
                $mail = $this->modelUserClient->getUserFromEmail($_SESSION['user_client']);

                // Lấy giỏ hàng từ người dùng
                $cart = $this->modelCart->getCartFromUser($mail['id']);
                if (!$cart) {
                    $cartId = $this->modelCart->addCart($mail['id']);
                    $cart = ['id' => $cartId];
                    $detailCart = $this->modelCart->getDetailCart($cart['id']);
                } else {
                    $detailCart = $this->modelCart->getDetailCart($cart['id']);
                }

                // Lấy thông tin sản phẩm từ POST
                $id = $_POST['id'];
                $quantity = $_POST['quantity'];

                $checkProduct = false;
                $newQuantity = $quantity; // Khởi tạo biến với số lượng được gửi từ POST

                // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
                foreach ($detailCart as $detail) {
                    if ($detail['id'] == $id) {
                        $newQuantity = $detail['quantity'] + $quantity; // Cập nhật số lượng
                        $this->modelCart->updateQuantity($cart['id'], $id, $newQuantity);
                        $checkProduct = true; // Đánh dấu rằng sản phẩm đã tồn tại
                        break;
                    }
                }

                // Nếu sản phẩm không có trong giỏ hàng, thêm sản phẩm mới
                if (!$checkProduct) {
                    $this->modelCart->addDetailCart($cart['id'], $id, $newQuantity);
                }

                var_dump('Thêm giỏ hàng thành công');
                die;
            } else {
                var_dump('Chưa đăng nhập');
                die;
            }
        }
    }
}
