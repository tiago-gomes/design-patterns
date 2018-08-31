<?php
interface CarFactoryInterface
{
  public static function build($carType); 
}

interface CarPartsInterface
{
  public function engine(); 
}

class CarFactory implements CarFactoryInterface
{
  protected $car;
  
  public static function build($carType) 
  {
      switch ($carType) {
		  case 'bmw':
		   return new $carType();
		  break;
		  case 'audi':
			return new $carType();
		  break;
      }
  }
}

class bmw implements CarPartsInterface
{
  public function engine(){
    echo 'v3 engine';    
  }
}

class audi implements CarPartsInterface
{
  public function engine(){
    echo 'v8 engine';    
  }
}

$bmw = CarFactory::build('bmw');
$bmw->engine();

$audi = CarFactory::build('audi');
$audi->engine();




?>
