<?php

require 'connection.php';

$s = new Marks($_POST['name'],$_POST['date'],$_POST['gender'],$_POST['department'],$_POST['branch'],$_POST['int'],$_POST['sem']);

$s->validate();

$con = new Connection();

$con->connect();


if($s->areInputFieldsValid())
{
	$s->calculate();

	$con->insert($s);

}
else
{
	session_start();
	$con->storeSession($s);	
	header("Location:stumain.php");
}


?>
