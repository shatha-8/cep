<?php
session_start();
require "connection.php";
if(isset(filter_input_array(INPUT_POST)['log_btn'])){
	$log_email = $_POST['log_email'];
	$log_pass  = $_POST['log_pass'];
	
    $stmt = $connect->prepare("SELECT advisor.ID,advisor.table,advisor.FullName,advisor.Email,advisor.Password
								FROM advisor,user
                                WHERE advisor.Email = ? AND advisor.Password = ?
								UNION
								SELECT user.ID,user.table,user.FullName,user.Email,user.Password
								FROM user,advisor
                                WHERE user.Email = ? AND user.Password = ?;");
    $stmt->bind_param('ssss',$log_email, $log_pass, $log_email, $log_pass);
    $stmt->execute();
    $stmt->bind_result($ID, $tbl, $FullName, $log_email, $log_pass);
    $stmt->store_result();
    $stmt->fetch();
    if ($stmt->num_rows == 1)
     {
		 $_SESSION['id']    = $ID;
		 $_SESSION['name']  = $FullName;
		 $_SESSION['email'] = $log_email;
		 //$_SESSION['pass'];
		 
		  echo  '<div style="color:green;">Login Successfully</div>';
		  if($tbl == 1){
			  header("Refresh: 1;url=./Homeuser.php");
		  }
		  if($tbl == 0){
			  header("Refresh: 1;url=./Homeadvisor.php"); 
		  }
		  
	 }
	 else{
		 echo  '<div style="color:red;">Invalid information</div>';
	 }
	
	
}

?>
<DOCTYPE html!>
<html>
	<head>
	<title>log in</title>
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
input[type=submit], input[type=reset] {
  background-color: #7A95CB;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
    font-style: italic;
	border-radius:10px;
}
input[type=text],input[type=password] {
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
	<h1>Log In</h1>
	 <form id="myForm" method="POST" action="">
	 
	 <p><label>User Name:
	  <input type = "text" id = "username" placeholder = "user name" name="log_email"></label></p>
	  
	  	 <p><label>password:
	  <input type = "password" id = "password" placeholder = "password" name="log_pass"></label></p>
	  
	  <p><input type = "submit" value="log in" name="log_btn" />
	  <input type="reset" onclick="myFunction()" value="Reset"/>
	  
	  </form>
	  
	  <script>
function myFunction() {
  document.getElementById("myForm").reset();
}
</script>
	   </p>
	   
	   <div class="footer">
  <p>Copyright © 2022 <strong>C.E.P</strong></p>
</div>
	  </body>
	  </html>