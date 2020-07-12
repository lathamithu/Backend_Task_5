<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
	
body{
	 background: linear-gradient(to right,#014d6f 10%,#2b8e8b);
    font-family: 'Roboto', sans-serif;
    color: #fff;
}

header{
	background: linear-gradient(to left,#014d6f 10%,#2b8e8b);
	padding: 1em;
	text-align: center;
	border-color: white;
	border-style: double;
	border-width: 15px;
}

.form-horizontal .form-control{
    background: transparent;
    border: 1px solid rgba(255,255,255,0.5);
    height: 44px;
    line-height: 2;
    color: #fff;   
}

.form-horizontal .form-control:focus{
    border-color: #fff;
    box-shadow:0 1px 3px rgba(255,255,255,0.5);
    outline: 0 none;
    
}

.form-horizontal .form-control::-moz-placeholder{
    color: #fff;
    opacity: 0.9;
}

#btn{
    color: #fff;
    background-color: rgba(255,255,255,0.4);
    border: none;
    padding: 10px 30px;
    font-weight: 600;
    transition: all 0.2s ease 0s;
    margin-left: 650px;

}

#btn:hover{
	color: white;
    background-color: linear-gradient(to left,#014d6f 10%,#2b8e8b);
    border: none;
    padding: 10px 30px;
    font-weight: 600;
    margin-left: 650px;
}

.rad {  
  	display: table-cell;
  	text-align:center;
}

</style>

<body>

	<header>
		<h3>STUDENT FORM</h3>
	</header>
	
	<br>
	<br>

	
	<form action="insert.php" method="post" onSubmit="window.location.reload();" class="form-horizontal">

			<div class="col-sm-6">
				<label>NAME : </label>
				<br><br>
				<input type="text" name="name" value="<?= (isset($_SESSION['name'])) ? $_SESSION['name'] : ''; ?>" class="form-control" required>

				<?= (isset($_SESSION['nameV']) && $_SESSION['nameV'] == false) ? '<br><br>*Please provide a valid name.' : ''; ?>
				<br><br><br>
			</div>

			<div class="col-sm-6">
				<label>BRANCH :</label>
				<br><br>
				<input type="text" name="branch" value="<?= (isset($_SESSION['branch'])) ? $_SESSION['branch'] : ''; ?>" placeholder="e.g. CSE" class="form-control" required>
				<?= (isset($_SESSION['branchV']) && $_SESSION['branchV'] == false) ? '*Please provide a valid branch.' : ''; ?>
				<br><br><br>
			</div>
			
			<div class="col-sm-6">
				<label>DATE OF BIRTH :</label>
				<br><br>
				<input type="date" name="date" value="<?= (isset($_SESSION['dob'])) ? $_SESSION['dob'] : ''; ?>" class="form-control" required>

				<?= (isset($_SESSION['dobV']) && $_SESSION['dobV'] == false) ? '<br><br>*Please provide a valid date of birth.' : ''; ?>
				<br><br><br>
			</div>

			<div class="col-sm-6">
				<label>INTERNALS :</label>
				<br><br>
				<input type="number" value="<?= (isset($_SESSION['internals'])) ? $_SESSION['internals'] : ''; ?>" min="0" max="50" name="int" class="form-control" required>

				<?= (isset($_SESSION['intV']) && $_SESSION['intV'] == false) ? '<br><br>*Please provide a number from 1-50.' : ''; ?>
				<br><br><br>
		   
			</div>
		 
			<div class="col-sm-6">
				<label>GENDER :</label>
					<br><br>
					<div class="rad">
					<input type="radio" name="gender" <?= (isset($_SESSION["gender"]) && $_SESSION["gender"] == "Male") ? 'checked' : '' ?> value="Male">
					<label for="Male">Male</label>
					</div>
					<br>
					<div class="rad">
					<input type="radio" name="gender" <?= (isset($_SESSION["gender"]) && $_SESSION["gender"] == "Female") ? 'checked' : '' ?> value="Female">
					<label for="female">Female</label>
					</div>
					<br>
					<div class="rad">
						<input type="radio" name="gender" <?= (isset($_SESSION["gender"]) && $_SESSION["gender"] == "Others") ? 'checked' : '' ?> value="Others" >
						<label for="others">Others</label>
					</div>

				<?= (isset($_SESSION['genderV']) && $_SESSION['genderV'] == false) ? '<br><br>*Please provide a gender.' : ''; ?>
				<br><br><br>
			</div>

			<div class="col-sm-6">
				<label>SEMESTER :</label>
					<br><br>
					<input type="number" value="<?= (isset($_SESSION['semester'])) ? $_SESSION['semester'] : ''; ?>" min="0" max="50" step="0.01" name="sem" class="form-control" required>
					<?= (isset($_SESSION['semV']) && $_SESSION['semV'] == false) ? '<br><br>*Please provide a number from 1-50.' : ''; ?>
					<br><br><br>
			</div>
		
			<div class="col-sm-6">
				<label>DEPARTMENT :</label>
				<br><br>
				<input type="text" name="department" value="<?= (isset($_SESSION['dept'])) ? $_SESSION['dept'] : ''; ?>" placeholder="e.g. B.Tech" class="form-control" required>
				<?= (isset($_SESSION['deptV']) && $_SESSION['deptV'] == false) ? '<br><br>*Please provide a valid department.': ''; ?>
				<br><br><br>
	    	</div>
			<div class="col-sm-6">
				<button id="btn" >Submit</button>
			</div>
	</form>
</body>
</html>

<?php
session_unset();
?>
