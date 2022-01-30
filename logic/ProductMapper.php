<?php

require_once "Database.php";

class ProductMapper extends DatabaseConfig{
    private $connection;
    private $query;

    public function __construct(){
        $this->connection = $this->getConnection();
    }

    public function insertProduct($product){
        $this->query = "insert into produktet (emri, cmimi, foto)
        values (:emri, :cmimi, :foto)";

        $statement = $this->connection->prepare($this->query);
        $emri = $product->getEmri();
        $cmimi = $product->getCmimi();
        $foto = $product->getFoto();

        $statement->bindParam(":emri", $emri);
        $statement->bindParam(":cmimi", $cmimi);
        $statement->bindParam(":foto", $foto);

        $statement->execute();
    }

    public function getAllProducts(){
        $this->query = "select * from produktet";
        $statement = $this->connection->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getProductbyId($product_id){
        $this->query = "select * from produktet where product_id=:product_id";
        $statement = $this->connection->prepare($this->query);
        $statement->bindParam("product_id",$product_id );
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    
}