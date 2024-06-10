<?php

namespace App\Model;

class Book{
    private $id;
    private $title;
    private $author;
    private $year;

    public function __construct($title, $author, $year){
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

}

?>