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
        require_once 'views/LayoutClient/home.php';
    }
    public function productpage()
    {
        require_once 'views/LayoutClient/listProduct.php';
    }
}
