<?php
namespace MyHome\Model;
use PDO;

class DBConnect
{
    protected $dsn;
    protected $usename;
    protected $password;
    public function __construct()
    {
        $this->dsn = "mysql: host=localhost;dbname=product;charset=utf8";
        $this->usename = 'root';
        $this->password = 'Hailong*hvtc#93';
    }

    public function connectDB()
    {
        $connect = new PDO($this->dsn, $this->usename, $this->password);
        return $connect;
//        try {
//           $connect = new PDO($this->dsn, $this->usename, $this->password);
//            echo "Hi";
//        } catch (PDOException $e) {
//            echo $e->getMessage();
//        }
    }
}