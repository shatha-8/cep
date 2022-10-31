]<?php
session_start();
if(isset(filter_input_array(INPUT_POST)['add_user'])){
require "connection.php";

$FullName = $_POST['FullName'];
$Gender = $_POST['Gender'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$mobile = $_POST['mobile'];
$StudySpecialization = $_POST['StudySpecialization'];
$EducationalLevel = $_POST['EducationalLevel'];
$ServiceType = $_POST['ServiceType'];
	// insert into advisor table.
	$insert   = $connect->prepare('INSERT INTO advisor(FullName,Gender,Email ,Password, mobile,StudySpecialization, EducationalLevel, ServiceType)
									VALUES (?,?,?,?,?,?,?,?)');
	$insert->bind_param('ssssssss', $FullName, $Gender, $Email, $Password, $mobile, $StudySpecialization, $EducationalLevel, $ServiceType);
	$insert->execute();
	
	$_SESSION['name']  = $FullName;
   	if ($insert->affected_rows == 1) {
		
             header("Refresh: 1;url=./Homeadvisor.php"); 
			 }else{
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
  height: 34px;
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
	  <form action="" method="post" id="myForm" >
	 
		 <p><label>Full Name*:
		  <input type = "text" name="FullName" id = "FullName" placeholder = "Full Name"></label></p>
		  
		  <p><label>Gender*: <select name="Gender">
		  <option value="male"name="Gender"> male</option>
		  <option value="female"name="Gender"> female</option>
		  </label></p></select>
		  
			  <p><label>Email*:
		  <input type = "text" name="Email" id = "Email" placeholder = "name@domain.com"></label></p>
		  
		  <p><label>Password*:
		  <input type = "text" name="Password" id = "Password" ></label></p>
		  
		  
		   <p><label>mobile:
		  <input type = "text" name="mobile" id = "mobile" placeholder = "00966555555555"></label></p>
		  
		  <p><label>Study Specialization*: <select name="StudySpecialization" id="StudySpecialization">
		  <option value="computer" name="StudySpecialization">computer</option>
		  <option value="low"name="StudySpecialization">low</option>	  
		  <option value="psychology"name="StudySpecialization">psychology</option>
		  <option value="business"name="StudySpecialization">business administration</option>
		  <option value="math" name="StudySpecialization">math</option>
		  <option value="chemistry"name="StudySpecialization">chemistry</option>
		  </label></p></select>
		  
			  <p><label>Educational Level*: <select name="EducationalLevel" id="EducationalLevel">
		  <option value="Dr" name="EducationalLevel">Dr</option>
		  <option value="Master"name="EducationalLevel">Master</option>
		  <option value="Bachelors"name="EducationalLevel">Bachelors</option>	 
		  <option value="student"name="EducationalLevel">student with A+ grade</option>
		  </label></p></select>

		   <p><label>Service Type*: <select name="ServiceType" id="ServiceType">
		  <option value="Teaching" name="ServiceType"> Teaching</option>
		  <option value="consulting"name="ServiceType"> consulting</option>
		  </label></p></select>
		  
		  
		  <p><input type ="submit" onclick="myFunction()" name="add_user"  value="Sign Up"/>
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
<br>
<br>

<div class="footer">
  <p>Copyright © 2022 <strong>C.E.P</strong></p>
</div>
  </body>
  
  </html>