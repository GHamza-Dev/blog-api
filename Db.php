<?php

class Db{ 
    private $conn = null;

    public function __construct(){
        $this->connect();
    }

    public function connect(){
        $dsn = 'mysql:host=localhost;dbname=blog';
        try{
            $this->conn = new PDO($dsn,'root','');
        }catch(PDOException $e){
            echo '<pre>';
            die('Something went wrong!<br>'.$e);
        }
    }

    public function selectPosts($limit){
        $stmt = $this->conn->prepare("SELECT * FROM blog LIMIT $limit");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function selectPostById($id){
        $stmt = $this->conn->prepare("SELECT * FROM blog WHERE blog.id = :id");
        $stmt->execute([':id'=>$id]);
        return $stmt->fetchAll();
    }

    public function insertPost($title,$body){
        $title = htmlspecialchars($title);
        $body = htmlspecialchars($body);
        $stmt = $this->conn->prepare("INSERT INTO blog(`id`,`title`,`body`) VALUES (NULL,:title,:body)");
        return $stmt->execute([':title'=>$title,':body'=>$body]);
    }

    public function insertedId(){
        return $this->conn->lastInsertId();
    }
}