<?php
//abstract class example

abstract class Products {
 protected $name;
 protected $type;

 public function __construct($name, $type){
  $this->type = $type;
  $this->name = $name;
 }

 public function getType() {
  return $this->type;
 }

 public function getName() {
  return $this->name;
 }

 abstract public function getTypeName();
}
/**
Abstract classes can not be instantiated, so we’ll extend it 
by making a child class product. 
An abstract function also declared in above example and we know, 
methods marked abstract in the parent’s class declaration 
must be defined by the child class.
*/

class Product extends Products {

 public function getTypeName() {
  return $this -> name .':'. $this -> type;
 }
}

$product = new Product('Paper','80g');
echo $product->getTypeName();

?>
