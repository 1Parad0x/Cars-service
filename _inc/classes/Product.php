<?php

class Product{
    private $db;

    public function __construct(DataBase $database){
        $this->db = $database->getConnection();
    }
    public function index(){
        $stmt = $this->db->prepare("SELECT * FROM products");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function create($name, $price, $image){
        $stmt = $this->db->prepare("INSERT INTO products (Name, Price, Image) VALUES (:Name, :Price, :Image)");
        $stmt->bindParam(':Name', $name);
        $stmt->bindParam(':Price', $price);
        $stmt->bindParam(':Image', $image);
        return $stmt->execute();
    }
    public function destroy($id){
        $stmt = $this->db->prepare("DELETE FROM products WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>