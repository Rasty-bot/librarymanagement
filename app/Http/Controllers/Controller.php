<?php
class Book {
    private $title;
    private $author;
    private $description;
    private $isbn;
    private $publishedYear

   public function _construct($title, $author, $description, $isbn, $publishedYear) {
    $this->title = $title;
    $this->author = $author;
    $this->description = $description;
    $this->isbn = $isbn;
    $this->publishedYear = $publishedYear;
   } 

   public function getTitle(){
    return $this->title;
   }

   public function getAuhtor(){
    return $this->author;
   }

   public function getDescription(){
    return $this->description; 
   }

   public function getIsbn(){
    return $this->isbn; 
   }

   public function getPublishedYear(){
    return $this->publishedYear; 
   }

   public function displayInfo(){
    return "Title: " . $this->title . "\n " . 
           "Auhtor" . $this->auhtor . "\n" . 
           "Description" . $this->description . "\n" . 
           "Isbn" . $this->isbn . "\n" . 
           "PublishedYear" . $this->publishedYear . "\n" . 

   }
}

// Example usage:
$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", "A novel set in the 1920s", "9780743273565", 1925);
echo $book1->displayInfo();
>?
namespace App\Http\Controllers;

abstract class Controller
{
    //
}
