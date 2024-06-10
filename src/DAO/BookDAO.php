<?php

namespace App\DAO;

use PDO;
use App\Model\Book;
use App\Database\Connection;

class BookDAO{
    private $conn;

    public function __construct() {
        $this->conn = Connection::getInstance();
    }

    public function create(Book $book) {
        $sql = "INSERT INTO books (title, author, year) VALUES (:title, :author, :year)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':title', $book->getTitle());
        $stmt->bindParam(':author', $book->getAuthor());
        $stmt->bindParam(':year', $book->getYear());
        $stmt->execute();
    }

    public function read($id){
        $sql = "SELCET * FROM books WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function readAll(){
        $sql = "SELECT * FROM books";
        $stmt= $this->conn->prepare($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update(Book $book) {
        $sql = "UPDATE books SET title = :title, author = :author, year = :year WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':title', $book->getTitle());
        $stmt->bindParam(':author', $book->getAuthor());
        $stmt->bindParam(':year', $book->getYear());
        $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM books WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}

?>