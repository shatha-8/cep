<?php
session_start();
if(isset(filter_input_array(INPUT_POST)['add_user'])){
require "connection.php";


$FullName = $_POST['FullName'];
$Gender = $_POST['Gender'];
$UniversityName = $_POST['UniversityName'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$mobile = $_POST['mobile'];


	// insert into user table.
	$insert   = $connect->prepare('INSERT INTO user(FullName,Gender,UniversityName,Email ,Password, mobile)
									VALUES (?,?,?,?,?,?)');
	$insert->bind_param('ssssss', $FullName, $Gender, $UniversityName, $Email, $Password, $mobile);
	$insert->execute();
	
	$_SESSION['name']  = $FullName;
	
	if ($insert->affected_rows == 1) {
		 header("Refresh: 1;url=./Homeuser.php");
	} else {
		echo '<div style="color:red">Error occured, check with your admin</div>';
	}
	$insert->close();
}

?>



<DOCTYPE html!>
<html>
	<head>
	<title>Sign Up</title>
	</head> 
	<style type="text/css">
	
	body {
  background-image: url("signup background.jpg"); 
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100%;
  background-position : center;
    text-align: center;
	text-decoration-line:none;
    color: #7A95CB;
	  font-style: italic;
    font-size: 1.1em;
}
input[type=submit] , [type=Reset] ,button{
  background-color: #7A95CB;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
	border-radius:10px;
	position:bottom;
}
input[type=text], select {
  width: 12%;
  padding: 12px 20px;
  margin: 8px 0;
  border: 4px solid #ccc;
  border-radius: 10px;
  box-sizing: border-box;
    font-style: italic;
}

.footer {
  position: fixed; 
  width: 100%;
  height: 35px;
  bottom: 0;
  left: 0;
  right: 0;
   padding: 7px 7px ;
   background-color: #7A95CB;
   color: #f0f0f0;
   text-align: center;
    border-radius:10px;
}
	</style>
	
	<body> 
	<h1>Registration Form</h1>
     <p> Fields marked with (*) are required</p>
	  <form id="myForm" action="" method="post">
	 
	 <p><label>Full Name*:
	  <input type ="text" id ="FullName" placeholder ="Full name" name="FullName"></label></p>
	  	  
	  <p><label>Gender*: <select name="Gender">
	  <option value="male"> male</option>
	  <option value="female"> female</option>
	  </label></p></select>
	  
	  <p><label>University Name*: <select name="UniversityName">
	  <option value="Al-Imam">Al-Imam University</option>
	  <option value="Saud">King Saud University</option>	  
	  <option value="Nora">Princess Nora University</option>
	  </label></p></select>
	  
	  
	  <p><label>Email*:
	  <input type = "text" id = "email" placeholder = "name@domain.com" name="Email"></label></p>
	  
	  
	  <p><label>Password*:
	  <input type = "text" id = "Password" name="Password"></label></p>
	  
	  
	   <p><label>mobile:
	  <input type = "text" id = "mobile" placeholder = "00966555555555" name="mobile"></label></p>
	   

	  <p><input type = "submit" onclick="myFunction()" name="add_user" value="Sign Up"/>
	  <input type= "Reset" onclick="myFunction1()" value="Reset"/>
	  <a id="demo"></a>
	  	  </form>
	  
	  <script>
function myFunction1() {
  document.getElementById("myForm").reset();
}
</script>
<script>
function myFunction() {
var x = document.getElementById("demo1").innerHTML;
 document.getElementById("demo").innerHTML=x;

}
</script>
	   </p>

	<div class="footer">
  <p>Copyright © 2022 <strong>C.E.P</strong></p>
</div>
	   </body>
	  </html>