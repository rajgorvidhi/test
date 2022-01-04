<?php
interface Vehicle{
	public function read();
}

interface Car{
	public function print();
}

interface Bike extends Vehicle,Car{
	public function show();
}

class Myclass implements Bike{

	public function read(){
		echo "this is readable... <br>";
	}

	public function print(){
		echo "this is printable... <br>";
	}

	public function show(){
		echo "this is showable... <br>";
	}
} 

$obj=new Myclass();
$obj->read();
$obj->print();
$obj->show();

?>