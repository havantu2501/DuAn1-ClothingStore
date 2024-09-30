<?php


class AdminProductController
{
    public $modelProduct;
    public function __construct()
    {
        $this->modelProduct = new AdminProduct();
    }

    public function product()
    {
        $listProduct = $this->modelProduct->getAllProduct();
        require_once './views/danhmuc/Product.php';
    }

    //Show
    public function ShowProduct()
    {
        $id = $_GET['id_product'];
        $product = $this->modelProduct->getProduct($id);
        if ($product) {
            require_once './views/danhmuc/showProduct.php';
        } else {
            header("Location: " . BASE_URL_ADMIN . '?act=user');
            exit();
        }
    }

    public function formAddProduct()
    {
        require_once './views/danhmuc/addProduct.php';
    }

    public function postAddProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];
            $price = $_POST['price'];
            $discount = $_POST['discount'];
            $description = $_POST['description'];
            $category_id = $_POST['category_id'];
            $thumbnail = $_FILES['thumbnail'];
            // $file_thumb = uploadFile1($thumbnail, './uploads/');
            $foderupload = './uploads/';
            $pathStorage = $foderupload . time() . $thumbnail['name'];
            $from = $thumbnail['tmp_name'];
            $to = PATH_ROOT . $pathStorage;
            if (move_uploaded_file($from, $to)) {
                $file_thumb =  $pathStorage;
            }

            //mảng hình ảnh
            $img_array = $_FILES['img_array'];

            $errors = [];
            if (empty($title)) {
                $errors['title'] = 'Ko để trống';
            }


            if (empty($errors)) {
                $status = $this->modelProduct->insertProduct($title, $price, $discount, $file_thumb, $description, $category_id);
                // var_dump($status);die;

                header("Location: " . BASE_URL_ADMIN . '?act=product');
                exit();
            } else {
                require_once './views/danhmuc/addProduct.php';
            }
        }
    }
    public function deleteProduct()
    {
        $id = $_GET['id_product'];
        $user = $this->modelProduct->getDetailProduct($id);

        if ($user) {
            $this->modelProduct->destroyProduct($id);
        }
        header("Location: " . BASE_URL_ADMIN . '?act=product');
        exit();
    }

    // EDIT
    public function formEditProduct()
    {
        $id = $_GET['id_product'];
        $product = $this->modelProduct->getDetail($id);
        if ($product) {
            require_once './views/danhmuc/editProduct.php';
        } else {
            header("Location: " . BASE_URL_ADMIN . '?act=product');
            exit();
        }
    }
    public function postEditProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $price = $_POST['price'];
            $discount = $_POST['discount'];
            $thumbnail = $_POST['thumbnail'];
            $description = $_POST['description'];
            $category_id = $_POST['category_id'];


            $errors = [];
            if (empty($title)) {
                $errors['title'] = 'Ko để trống';
            }

            if (empty($errors)) {
                $this->modelProduct->updateProduct($id, $title, $price, $discount, $thumbnail, $description, $category_id);
                header("Location: " . BASE_URL_ADMIN . '?act=product');
                exit();
            } else {
                $product = ['id' => $id, 'title' => $title, 'price' => $price, 'discount' => $discount, 'thumbnail' => $thumbnail, 'description' => $description, 'category_id' =>  $category_id];
                require_once './views/danhmuc/editProduct.php';
            }
        }
    }
}
