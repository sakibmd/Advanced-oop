<?php 

interface BaseStudent{
	function displayName();
}

class improvedStudent implements BaseStudent{
	private $name;
	private $title;
	function __construct($name, $title){
		$this->name = $name;
		$this->title = $title;
	}

	function displayName(){
		echo "Hello from {$this->title}. {$this->name}"."<br>";
	}

}

class Student implements BaseStudent{
	private $name;
	function __construct($name){
		$this->name = $name;
	}

	function displayName(){
		echo "Hello from ".$this->name."<br>";
	}

}

class StudentManager{
	function introduceStudent(BaseStudent $student){
		$student->displayName();
	}
}

$st = new Student("John");
$ist = new improvedStudent("Sakib","Mr");
$sm = new StudentManager();
$sm->introduceStudent($st);
$sm->introduceStudent($ist);






 ?>