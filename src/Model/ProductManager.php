<?php


namespace MyHome\Model;


class ProductManager
{
    protected $DBConnect;
    public function __construct()
    {
        $this->DBConnect = new DBConnect();
    }

    function getAll()
    {
        $sql = "SELECT * FROM `product` ORDER BY `id` DESC";
        $stmt = $this->DBConnect->connectDB()->query($sql);
        $data = $stmt->fetchAll();
        $products = [];
        foreach ($data as $item) {
            $product = new Product($item['name'], $item['category'], $item['price'], $item['quantity'], $item['description']);
            $product->setId($item['id']);
            array_push($products, $product);
        }
        return $products;
    }
    function add($product)
    {

        $sql = "INSERT INTO `product`(`name`, `category`, `price`, `quantity`, `date`, `description`) VALUES (:name,:category,:price,:quantity,:date,:description)";
        $stmt = $this->DBConnect->connectDB()->prepare($sql);
        $stmt->bindParam(':name', $product->getName());
        $stmt->bindParam(':category', $product->getCategory());
        $stmt->bindParam(':price', $product->getPrice());
        $stmt->bindParam(':quantity', $product->getQuantity());
        $stmt->bindParam(':date', $product->getDate());
        $stmt->bindParam(':description', $product->getDescription());
        $stmt->execute();
    }
    function delete($id)
    {
        $sql = "DELETE FROM `product` WHERE `id` = :id";
        $stmt = $this->DBConnect->connectDB()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    function update($product)
    {
        $sql = "UPDATE `product` SET `name`=:name,`category`=:category,`price`=:price,`quantity`=:quantity,`date`=:date, `description`=:description WHERE `id` = :id";
        $stmt = $this->DBConnect->connectDB()->prepare($sql);
        $stmt->bindParam(':id',$product->getId());
        $stmt->bindParam(':name', $product->getName());
        $stmt->bindParam(':category', $product->getCategory());
        $stmt->bindParam(':price', $product->getPrice());
        $stmt->bindParam(':quantity', $product->getQuantity());
        $stmt->bindParam(':date', $product->getDate());
        $stmt->bindParam(':description', $product->getDescription());
        $stmt->execute();
    }
    function getProductById($id)
    {
        $sql = "SELECT * FROM `product` WHERE `id` = :id";
        $stmt = $this->DBConnect->connectDB()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $product = $stmt->fetch();
        return $product;
    }
    function search($keyword)
    {
        $sql = "SELECT * FROM `product` WHERE `name` LIKE :keyword ";
        $stmt = $this->DBConnect->connectDB()->prepare($sql);
        $stmt->bindValue(':keyword', '%' . $keyword . '%');
        $stmt->execute();
        $data = $stmt->fetchAll();
        $products = [];
        foreach ($data as $key => $item) {
            $product = new Product($item['name'], $item['category'], $item['price'], $item['quantity'], $item['description']);
            $product->setId($item['id']);
            array_push($products, $product);
        }
        return $products;
    }
}