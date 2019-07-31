<?php
include_once'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration_Form</title>
	<link rel="stylesheet" type="text/css" href="./style.css">

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<h1> Registraion Form </h1>
	<form style="padding-left: 30px;" method="post" action="connection.php">
		
		<input type="text" name="U_name" placeholder="User Name" required><br><br>
		
		<input type="email" name="Email_id" placeholder="Email" required><br><br>
		
		<input type="Password" name="Password" placeholder="Password" required>
		
		<input type="Password" name="Password" placeholder="Password" required>

		<h1>Personal Details</h1>
		
		<input type="text" name="F_name" placeholder="First Name" required>
		
		<input type="text" name="L_name" placeholder="Last Name"required><br><br>
	    <input type="number" name="Ph_Number" size="10" placeholder="Phone_Number" required><br>  <br><br>
	   	<input id="datepicker" width="276" / name="DOB" placeholder="Birth_Date" required>
         	<script>
        		$('#datepicker').datepicker({

        		});
        	</script>
	   
	    <br><br>
	   
	    
	    <textarea name="Address" placeholder="Address" required></textarea>
	    <br><br>
	    <label>Gender</label>
	    <div style="display: inline;">
	    	<input type="radio" name="Gender" value="Male">Male
	    	<input type="radio" name="Gender" value="FeMale">FeMale
	    	<input type="radio" name="Gender" value="Other">Other
	    </div><br><br>
		<label>Status</label>
	    <div style="display: inline;">
	    	<input type="radio" name="Status" value="Married">Married
	    	<input type="radio" name="Status" value="Unmarried">Unmarried
	    </div>

		<select name="Country"required>
			
			<option  value="India">India</option>
			<option value="Other">Other</option>
		</select><br><br><br>
		
		<label>Skill</label>
		 <div style="display: inline;">
			<input type="checkbox" name="Skill" value="HTML">HTML
			<input type="checkbox" name="Skill" value="CSS">CSS
			<input type="checkbox" name="Skill" value="PHP ">PHP 
			<input type="checkbox" name="Skill" value="JS">JS
			<input type="checkbox" name="Skill" value="MySql">MySql
			<input type="checkbox" name="Skill" value="Bootstrap">Bootstrap<br><br>
		 </div>
		
		<input type="text" name="one_word_about_you" placeholder="Describe yourself in ONE word" required>
		
		<input type="text" name="Hobby" placeholder="Hobby"><br><br>

		<textarea name="Describe_self" placeholder="Tell About Your Self"></textarea>

		<textarea name="think_as_prog" placeholder="What you think you can do as a programmer" required></textarea><br><br>
		<input type="checkbox" value="" required>terms and condition<br><br>
		<button  type="submit" name="save" >Save</button>
	</form>

</body>
</html>