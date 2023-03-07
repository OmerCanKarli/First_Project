<?php

class Employee 
{

	private $name;

	public $age;

	public $salary;




    public function __construct($name, $age, $salary)
    {

        $this->name = $name;

        $this->age = $age;

        $this->salary = $salary;

    }



	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName(): string
	{
		return $this->name;
	}


    public function disp_val()
    {

        echo "Name: " . $this->name . "<br>";

        echo "Age: " . $this->age . "<br>";

        echo "Salary: " . $this->salary . "<br>";

    }

}


$employee_1 = new Employee(age: 23, salary: 234567, name: "Omer");


$employee_1->disp_val();
