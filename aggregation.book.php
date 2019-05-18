<?php
/**
Aggregation occurs when an object is composed of multiple objects.
*/

class Author {
 private $name;
 private $email;

 public function __construct($name,$email) {
  $this->name = $name;
  $this->email = $email;
 }
 
 public function getName() {
  return $this->name;
 }
 
 public function getEmail(){
  return $this->email;
 }
}

//class Book includes class Author
class Book {
 private $authors;
 private $price;
 private $name;

 public function __construct($name,$price,$author){
  $this->name = $name;
  $this->price = $price;
  $this->author = $author;
 }

 public function setPrice($price){
  $this->price = $price;
 }

 public function getPrice(){
  return $this->price;
 }

 public function getName(){
  return $this->name;
 }
 public function getAuthor(){
  return $this->author;
 }
}

$author = new Author('Kelly','kelly@brainbell.com');
$book = new Book('Book Name',10.0,$author);

echo $book->getName(); //Book Name
echo "</br>";
echo $book->getAuthor() -> getName(); //Kelly
echo "</br>";
echo $book->getAuthor() -> getEmail(); //kelly@brainbell.com
echo "</br>";

?>
