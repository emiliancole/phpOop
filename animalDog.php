<?php
/**
 * Define MyClass
 */
class Animal
{
    // Declare a public constructor
    public function __construct() { }

    // Declare a public method
    public function MyPublic() { }

    // Declare a protected method
    protected function MyProtected() { }

    // Declare a private method
    private function MyPrivate() { }

    // This is public
    function show()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }
}

$myclass = new Animal;
$myclass->MyPublic(); // Works
//$myclass->MyProtected(); // Fatal Error
//$myclass->MyPrivate(); // Fatal Error
$myclass->show(); // Public, Protected and Private work


/**
 * Define Dog
 */
class Dog extends Animal
{
    // This is public
    function print()
    {
        $this->MyPublic();
        $this->MyProtected();
        //$this->MyPrivate(); // Fatal Error
    }
}

$bobby = new Dog;
$bobby->MyPublic(); // Works
$bobby->print(); // Public and Protected work, not Private

class Bird
{
    public function test() {
        $this->testPrivate();
        $this->testPublic();
    }

    public function testPublic() {
        echo "Bird::testPublic\n";
    }
    
    private function testPrivate() {
        echo "Bird::testPrivate\n";
    }
}

class Owl extends Bird
{
    public function testPublic() {
        echo "Owl::testPublic\n";
    }
    
    private function testPrivate() {
        echo "Owl::testPrivate\n";
    }
}

$myOwl = new Owl();
$myOwl->test(); // Bar::testPrivate 
                // Foo::testPublic
?>