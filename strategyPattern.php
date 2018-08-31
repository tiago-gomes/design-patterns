<?php
interface Fly
{
  public function fly(); 
}

class Animal
{
    protected $animal;
	
	public function fly() {
		return $this->animal->fly();
	}
    
    public function __construct($animalType) 
    {
      switch($animalType) {
          case 'dog':
            $this->animal = new Dog();
          break;
          case 'bird':
            $this->animal = new Bird();
          break;
      }
    }
}

class Dog implements Fly
{
  public function fly(){
    echo 'Dogs do not Fly!';    
  }
}

class Bird implements Fly
{
  public function fly(){
    echo 'Birds can Fly!';    
  }
}

$dog = new Animal("dog");
$dog->fly();

$bird = new Animal("bird");
$bird->fly();





?>
