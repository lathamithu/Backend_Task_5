<?php
require 'class.php';

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

	public function insert($Name,$Date_,$Gender,$Department,$Branch,$Internals,$Semester,$Total)
	{
		$sql = "INSERT INTO `student`(`Name`,`DOB`, `Gender`, `Department`, `Branch`, `Internals`, `Semester`, `Total`) VALUES (:name,:date_,:gender,:dept,:branch,:internals,:semester,:total)";
		$stmt = $this->pdo->prepare($sql);

		$pdoExec = $stmt->execute(array(":name"=>$Name,":date_"=>$Date_,":gender"=>$Gender,":dept"=>$Department,":branch"=>$Branch,":internals"=>$Internals,":semester"=>$Semester,":total"=>$Total));
	}
}	


$con = new Connection();

$con->connect();

$s = new Student($_POST['name'],$_POST['date'],$_POST['gender'],$_POST['department'],$_POST['branch']);
$m = new Marks($_POST['int'],$_POST['sem']);

$con->insert($s->get_name(),$s->get_dob(),$s->get_gender(),$s->get_dept(),$s->get_branch(),$m->get_int(),$m->get_sem(), $m->calculate());

?>
