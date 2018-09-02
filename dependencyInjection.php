<?php

class Engine
{
	private $engineType = 'v8';

	public function build(){
		echo $this->engineType;
	}
}

class Car
{
	private $engine;
	
	public function __construct(Engine $engine){
		$this->engine = $engine;			
	}
	
	public function build()
	{
		return $this->engine->build();
	}
}

$car = new Car(new Engine());
$car->build();