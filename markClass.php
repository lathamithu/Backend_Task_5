<?php


require 'studentClass.php';

class Marks extends Student implements ValidationInterface{
		protected $int, $sem;
		public $intV, $semV;

		public function __construct($name, $dob, $gender, $dept, $branch, $int, $sem) 
		{
		
			Student::__construct($name, $dob, $gender, $dept, $branch);
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
			return ($this->get_int() + $this->get_sem());
		}
		public function validate()
		{
			Student::validate();
			$this->intV = (($this->get_int() > -1) && ($this->get_int() < 51)) ? true : false;
			$this->semV = (($this->get_sem() > -1) && ($this->get_sem() < 51)) ? true : false;
		}

		public function areFieldsValid()
		{
			return ($this->intV && $this->semV) ? true : false;
		}
		public function areInputFieldsValid()
		{
			return Student::areFieldsValid() && $this->areFieldsValid();
		}
	}


	?>