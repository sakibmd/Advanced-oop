<?php 

interface BaseStudent{
	function displayName();
}

class Student implements BaseStudent{
	private $name;
	function __construct($name){
		$this->name = $name;
	}

	function displayName(){
		echo "Hello from ".$this->name;
	}

}

/*class StudentManager{
	function introduceStudent($name){
		$st = new Student($name);
		$st->displayName();
	}
}*/

class StudentManager{
	function introduceStudent(BaseStudent $student){
		$student->displayName();
	}
}

$st = new Student("John");
$sm = new StudentManager();
$sm->introduceStudent($st);






 ?>