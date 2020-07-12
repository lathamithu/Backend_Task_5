<?php

require 'interface.php';

	class Student implements ValidationInterface{

		protected $name, $dob, $gender, $dept, $branch, $DateOfBirth;
		public $day, $month, $year, $nameV, $dobV, $genderV, $deptV, $branchV;

	protected function __construct($name, $dob, $gender, $dept, $branch) 
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
		
		public function validate()
		{
			$this->nameV = strlen($this->get_name()) > 0 ? true : false;
			$this->dobV = (strlen($this->get_dob()) == 10) ? true : false;
            $this->genderV = ($this->get_gender() == "Male" || $this->get_gender() == "Female" || $this->get_gender() == "Others") ? true : false;
            $this->deptV = strlen($this->get_dept()) > 0 ? true : false;
            $this->branchV = strlen($this->get_branch()) > 0 ? true : false;

		}

		public function areFieldsValid()
		{
			return ($this->nameV && $this->dobV && $this->genderV && $this->deptV && $this->branchV) ? true : false;
		}

	}

?>