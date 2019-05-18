<?php
//tutorialspoint.com

   class Book {
      /* Member variables */
      var $price;
      var $title;
	/**
function __construct( $title, $price ) {
   $this->title = $title;
   $this->price = $price;
}
   */   
      /* Member functions */
      function setPrice($par){
         $this->price = $par;
      }
      
      function getPrice(){
         echo $this->price ."<br/>";
      }
      
      function setTitle($par){
         $this->title = $par;
      }
      
      function getTitle(){
         echo $this->title ." <br/>";
      }
	  function getData(){
         echo $this->title ." <br/>";
		 echo $this->price ."<br/>";
      }
   }
   
class Novel extends Book {
   var $publisher;
   
   function setPublisher($par){
      $this->publisher = $par;
   }  
   function getPublisher(){
      echo $this->publisher. "<br />";
   }
}
   
$physics = new Book;
$maths = new Book;
$chemistry = new Book; 

$physics->setTitle( "Physics for High School" );
$chemistry->setTitle( "Advanced Chemistry" );
$maths->setTitle( "Algebra" );

$physics->setPrice( 10 );
$chemistry->setPrice( 15 );
$maths->setPrice( 7 );

//Now you call another member functions to get the values set by in above example −
/*
$physics->getTitle();
$chemistry->getTitle();
$maths->getTitle();
$physics->getPrice();
$chemistry->getPrice();
$maths->getPrice();

$adventure=new Novel;
$adventure->setTitle("The Queen");
$adventure->setPrice(21);
$adventure->setPublisher("Penguin");
$adventure->getPublisher();
*/

class Circle {
      /* Member variables */
      public $cx,$cy,$r;
      /* Member functions */
      function setPar($cx,$cy,$r){
         $this->cx = $cx;
		 $this->cy = $cy;
		 $this->r = $r;
      }    
    
	  function getPar(){
         echo $this->cx ." <br/>";
		 echo $this->cy ."<br/>";
		 echo $this->r ."<hr>";
      }
	  
	  function draw($cx,$cy,$r){
		 // $this->setPar($cx,$cy,$r);
		  echo "<circle cx='$cx' cy='$cy' r='$r' />";
      }
   }
   
   
$c1=new Circle;
$c1->setPar(250,50,20);
$c1->getPar();
$cx=$c1->cx; $cy=$c1->cy; $r=$c1->r;

echo "<svg viewBox='0 0 500 300'>";

//echo "<circle cx='$cx' cy='$cx' r='$r' />";

$c1->draw($cx,$cy,$r);
echo "</svg>";
   echo "<hr>";
?>