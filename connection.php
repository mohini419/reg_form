<?php

session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="reg_db";
//initalize value
/*$id=0;
$U_name="";
$Email_id="";
$password="";
$F_name="";
$L_name="";
$DOB="";
$Ph_Number="";
$Gender="";
$Address="";
$Country="";
$Status="";
$Skill="";
$one_word_about_you="";
$Hobby="";
$Describe_self="";
$think_as_prog="";*/


$db=mysqli_connect($servername,$username,$password,$dbname);

//check connection 
if($db->connect_error)
{
 die("connection failed:".$db);
}

if(isset($_POST['save']))
{
	$id=0;
	$U_name=$_POST['U_name'];
	$Email_id=$_POST['Email_id'];
	$password=$_POST['password'];
	$F_name=$_POST['F_name'];
	$L_name=$_POST['L_name'];
	$DOB=$_POST['DOB'];
	$Ph_Number=$_POST['Ph_Number'];
	$Gender=$_POST['Gender'];
	$Address=$_POST['Address'];
	$Country=$_POST['Country'];
	$Status=$_POST['Status'];
	$Skill=$_POST['Skill'];
	$one_word_about_you=$_POST['one_word_about_you'];
	$Hobby=$_POST['Hobby'];
	$Describe_self=$_POST['Describe_self'];
	$think_as_prog=$_POST['think_as_prog'];

	$query="INSERT INTO news_info(U_name,Email_id,password,F_name,L_name,DOB,Ph_Number,Gender,Address,Country,Status,Skill,one_word_about_you,Hobby,Describe_self,think_as_prog) VALUES('$U_name','$Email_id','$password','$F_name','$L_name','$DOB','$Ph_Number','$Gender','$Address','$Country','$Status','$Skill','$one_word_about_you','$Hobby','$Describe_self','$think_as_prog')";

	mysqli_query($db,$query);

    $_SESSION['msg']="Details save";

    header('location:index.php');
}

?>
