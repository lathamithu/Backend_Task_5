<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>
</head>
<body>
	<form action="insert.php" method="post" onSubmit="window.location.reload();">
		<label>Name : </label>
		<input type="text" name="name">
		<br>
		<br>
		<label>DOB :</label>
		<input type="date" name="date">
		<br>
		<br>
		<label>Gender :</label>
		<br>
		<input type="radio" name="gender" value="Male">
		<label for="male">Male</label>
		<br>
		<input type="radio" name="gender" value="Female">
		<label for="female">Female</label>
		<br>
		<input type="radio" name="gender" value="Others">
		<label for="others">Others</label>
		<br>
		<br>
		<label>Department :</label>
		<input type="text" name="department">
		<br>
		<br>
		<label>Branch :</label>
		<input type="text" name="branch">
		<br>
		<br>
		<label>Internals :</label>
		<input type="number" name="int">
		<br>
		<br>
		<label>Semester :</label>
		<input type="number" name="sem">
		<br>
		<br>
		<button id="btn" >Submit</button>
	</form>

</body>
</html>