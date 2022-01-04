<?php
interface Machine{
	public function getValue();
}

class Circle implements Machine{
	public $radius;

	public function __construct($radius){
		$this->radius=$radius;
	}

	public function getValue(){
		return $this->radius*$this->radius*pi();
	}
}

class Square implements Machine{

	public $length;
	public $breadth;

	public function __construct($length,$breadth){
		$this->length=$length;
		$this->breadth=$breadth;
	}

	public function getValue(){
		return $this->length*$this->breadth;
	}
}

$cir=new Circle(1);
$sqrt=new Square(4,5);

echo $cir->getValue()."<br>";
echo $sqrt->getValue();

?>