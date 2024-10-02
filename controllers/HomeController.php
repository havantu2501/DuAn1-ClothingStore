<?php

class HomeController
{
    public $modelProduct;
    public function __construct()
    {
        $this->modelProduct = new Product();
    }
    public function home()
    {
        require_once 'views/LayoutClient/home.php';
    }
    public function homepage()
    {
        echo 'HomePage';
    }
    public function productpage()
    {
        $listProduct = $this->modelProduct->getAllProduct();
        var_dump($listProduct);
        die();
    }
}
