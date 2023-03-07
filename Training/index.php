<?php

class Employee 
{

	private static $name;

	private static $age;

	private static $salary;




    public function __construct($name, $age, $salary)
    {

        self::$name = $name;

        static::$age = $age;

        static::$salary = $salary;

    }



	public static function setName($name)
	{
		self::$name = $name;
	}

	public static function getName(): string
	{
		return self::$name;
	}


    public static function disp_val()
    {

        echo "Name: " . self::$name . "<br>";

        echo "Age: " . self::$age . "<br>";

        echo "Salary: " . self::$salary . "<br>";

    }

}


$employee_1 = new Employee(age: 23, salary: 234567, name: "Omer");


Employee::disp_val();
