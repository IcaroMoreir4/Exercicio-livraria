<?php

namespace App\DAO;

use App\Model\Book;

interface BookDAOInterface {
    public function create(Book $book);
    public function read($id);
    public function readAll();
    public function update(Book $book);
    public function delete($id);
}

?>