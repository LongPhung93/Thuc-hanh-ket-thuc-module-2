<?php
namespace MyHome\Controller;

use MyHome\Model\Product;
use MyHome\Model\ProductManager;

class ProductController
{
    private $productController;

    function __construct()
    {
        $this->productController = new ProductManager();

    }

    function viewProduct()
    {
        $products = $this->productController->getAll();
        include_once('src/View/list.php');
    }

    function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//            $categorys = $this->categoryController->getAll();
            include_once('src/View/add.php');
        } else {
            $name = $_REQUEST['name'];
            $category = $_REQUEST['category'];
            $price = $_REQUEST['price'];
            $quantity = $_REQUEST['quantity'];
            $description = $_REQUEST['description'];
            $product = new Product($name, $category, $price, $quantity, $description);
//            $product->setDate();
            $this->productController->add($product);
            header('location:index.php?page=list-product');
        }
    }

    function deleteProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $this->productController->delete($id);
            header('location:index.php?page=list-product');
        }
    }

    function updateProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//            $categorys = $this->categoryController->getAll();
            $id = $_REQUEST['id'];
            $product = $this->productController->getProductById($id);
            include_once('src/View/update.php');
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $category = $_REQUEST['category'];
            $price = $_REQUEST['price'];
            $quantity = $_REQUEST['quantity'];
            $description = $_REQUEST['description'];

            $product = new Product($name, $category, $price, $quantity, $description);
            $product->setId($id);
//            $product->setDate();
            $this->productController->update($product);
            header('location:index.php?page=list-product');
        }
    }

    function searchProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $keyword = $_POST['keyword'];
            $products = $this->productController->search($keyword);
            include_once('src/View/list.php');
        }
    }
}