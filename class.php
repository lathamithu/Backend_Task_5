<?php

	interface Func{
			public function get_name();
			public function get_dob();
			public function get_gender();
			public function get_dept();
			public function get_branch();
			
	}
	interface Func2{
			public function get_int();
			public function get_sem();
			public function calculate();
	}

	class Student implements Func{

		protected $name, $dob, $gender, $dept, $branch;

		function __construct($name, $dob, $gender, $dept, $branch) 
		{
			$this->name = $name;
		    $this->dob = $dob;
		    $this->gender = $gender;
		    $this->dept = $dept;
		    $this->branch = $branch;
		    
		}
			
		public function get_name()
		{
			return $this->name;
		}

		public function get_dob()
		{
			return $this->dob;
		}

		public function get_gender()
		{
			return $this->gender;
		}

		public function get_dept()
		{
			return $this->dept;
		}

		public function get_branch()
		{
			return $this->branch;
		}

	}


	class Marks extends Student implements Func2{

		function __construct($int, $sem) 
		{
		
		    $this->int = $int;
		    $this->sem = $sem;
		    
		}

		public function get_int()
		{
			return $this->int;
		}

		public function get_sem()
		{
			return $this->sem;
		}

		public function calculate()
		{
			return ($this->int + $this->sem);
		}
	}

?>