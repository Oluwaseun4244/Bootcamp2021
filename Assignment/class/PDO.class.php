<?php

class DBH
{

    private $db_host = 'localhost';
    private $db_user = 'root';
    private $db_pass = '';
    private $db_name = 'bootcamp2021';
    public $dsn = null;
    private  $pdo;

    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->db_host . ';dbname=' . $this->db_name;
        $this->pdo = new PDO($dsn, $this->db_user, $this->db_pass);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function prepare($sql) //sql with a condition e.g "SELECT * FROM products WHERE id = ?"
    {
        $stmt = $this->pdo->prepare($sql);
        return $stmt;
    }

    public function execute($paramtype)
    {
        $this->stmt->execute($paramtype);
        
        //paramtype can be either named param or bind param
        //named param example $sql = "SELECT * FROM products WHERE product_name = ?"; major thing here is the "?"
        //you get to provide the augument like $this->stmt->execute([$product_name($variable)]);
        //bind param example $sql = "SELECT * FROM products WHERE product_name = :product_name"; ":product_name" is the diff
        //you get to provide the augument like $this->stmt->execute(["product_name" => $product_name($variable)"]);
        return;
    }

    public function query($sql) //sql without a condition e.g "SELECT * FROM products"
    {
        $stmt = $this->pdo->query($sql);
        return $stmt;
    }


}


?>
