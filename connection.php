<?php

require 'markClass.php';

class Connection{

	private $dsn, $pdo, $user, $pass;

	function __construct()
	{

		$this->dsn = "mysql:host=localhost;dbname=employee";
		$this->user = "root";
		$this->pass = "";

	}

	public function connect()
	{
		try
		{
			$this->pdo = new PDO($this->dsn,$this->user,$this->pass);
		}
		catch(PDOException $e)
		{
			echo "Failed" . $e->getMessage();
		}
	}

	public function insert(Marks $m)
	{
		$sql = "INSERT INTO `student`(`Name`,`DOB`, `Gender`, `Department`, `Branch`, `Internals`, `Semester`, `Total`) VALUES (:name,:date_,:gender,:dept,:branch,:internals,:semester,:total)";
		$stmt = $this->pdo->prepare($sql);

		$pdoExec = $stmt->execute(array(":name"=>$m->get_name(),":date_"=>$m->get_dob(),":gender"=>$m->get_gender(),":dept"=>$m->get_dept(),":branch"=>$m->get_branch(),":internals"=>$m->get_int(),":semester"=>$m->get_sem(),":total"=>$m->calculate()));
	}

	public function storeSession(Marks $s)
	{
		session_start();

		$_SESSION["name"] = $s->get_name();
		$_SESSION["dob"] = $s->get_dob();
		$_SESSION["gender"] = $s->get_gender();
		$_SESSION["dept"] = $s->get_dept();
		$_SESSION["branch"] = $s->get_branch();
		$_SESSION["internals"] = $s->get_int();
		$_SESSION["semester"] = $s->get_sem();
		$_SESSION["total"] = $s->calculate();

		$_SESSION["nameV"] = $s->nameV;
		$_SESSION["dobV"] = $s->dobV;
		$_SESSION["genderV"] = $s->genderV;
		$_SESSION["deptV"] = $s->deptV;
		$_SESSION["branchV"] = $s->branchV;
		$_SESSION["intV"] = $s->intV;
		$_SESSION["semV"] = $s->semV;
	}
}


?>