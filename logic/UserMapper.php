<?php

require_once "Database.php";

class UserMapper extends DatabaseConfig{
    private $connection;
    private $query;

    public function __construct(){
        $this->connection = $this->getConnection();
    }

    public function insertUser($user){
        $this->query = "insert into klientat (emri, mbiemri, username, passwordi, role)
        values (:emri, :mbiemri, :username, :passwordi, :role)";

        $statement = $this->connection->prepare($this->query);
        $emri = $user->getEmri();
        $mbiemri = $user->getMbiemri();
        $username = $user->getUsername();
        $passwordi = $user->getPasswordi();
        $role = $user->getRole();

        $statement->bindParam(":emri", $emri);
        $statement->bindParam(":mbiemri", $mbiemri);
        $statement->bindParam(":username", $username);
        $statement->bindParam(":passwordi", $passwordi);
        $statement->bindParam(":passwordi", $passwordi);
        $statement->bindParam(":role", $role);

        $statement->execute();
    }

    public function getUserByUsername($username){
        $this->query = "select * from klientat where username=:username";
        $statement = $this->connection->prepare($this->query);
        $statement->bindParam(":username", $username);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getAllUsers(){
        $this->query = "select * from klientat";
        $statement = $this->connection->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function deleteUser($id){
        $this->query = "delete from klientat where id=:id";
        $statement = $this->connection->prepare($this->query);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }
}
