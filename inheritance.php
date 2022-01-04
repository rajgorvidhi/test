<?php
class Vehicle{
	public $color;
	public $model;
	
	public function setData($color,$model){
		$this->color=$color;
		$this->model=$model;

	}			

	public function getData(){
		echo "color=".$this->color."<br>";
		echo "model=".$this->model."<br>";
	}
}

class Car extends Vehicle{
	public $type;

	public function setValue($color,$model,$type){
		$this->color=$color;
		$this->model=$model;
		$this->type=$type;
		
	}

	public function getValue(){
		echo "color=".$this->color."<br>";
		echo "model=".$this->model."<br>";
		echo "type=".$this->type."<br>";
	}
}

$alto=new Car();
$alto->setData("White","k10");
$alto->setValue("Black","a20","car");
$alto->getData();
$alto->getValue();

?>