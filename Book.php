<?php 

class Book {
    // Properties
    public $title;
    public $author;
    public $pages;

    // Constructor
    public function __construct($title, $author, $pages) {
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
    }

    // Method to display book details
    public function displayDetails() {
        return "The book '{$this->title}' by {$this->author} has {$this->pages} pages.";
    }
}

?>