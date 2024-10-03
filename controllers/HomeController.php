<?php

class HomeController
{
    public $modelProduct;
    public $modelUserClient;
    public function __construct()
    {
        $this->modelProduct = new Product();
        $this->modelUserClient = new UserClient();
    }
    public function home()
    {
        require_once 'views/LayoutClient/home.php';
    }
    public function homepage()
    {
        require_once 'views/LayoutClient/home.php';
    }
    public function productpage()
    {
        require_once 'views/LayoutClient/listProduct.php';
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
}
