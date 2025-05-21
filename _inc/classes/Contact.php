<?php

class Contact{
    private $db;

    public function __construct(DataBase $database){
        $this->db = $database -> getConnection();
    }

    public function index(){
        $stmt = $this->db->prepare("SELECT * FROM contact");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function destroy_contact($id){
        $stmt = $this->db->prepare("DELETE FROM contact WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function create($name, $email, $subject, $message){
        $stmt = $this->db->prepare("INSERT INTO contact (name, email, subject, message) VALUES (:name, :email, :subject, :message)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);
        return $stmt->execute();
    }

    public function show($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM contact WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update_contact($id, $name, $email, $subject, $message){
        $stmt = $this->db->prepare("UPDATE contact SET name = :name, email = :email, subject = :subject, message = :message WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);
        return $stmt->execute();
    }
}

?>