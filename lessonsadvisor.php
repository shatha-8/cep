<?php
session_start();
require "connection.php";
//fetching all videos from DB.
$stmt = $connect->prepare("select ID,name,url FROM videos" );
$stmt->execute();
$stmt->bind_result($id,$name,$url); 
$stmt->store_result();


?>

<DOCTYPE html!>
<html>
	<head>
	<title>lessons</title>
	</head> 
	<style type="text/css">
header{
background-color:#435F97 ;
width : 100%
position: fixed;
z-index : 999;
display: flex;
border-radius: 10px;
justify-content:space-between;
align-items: center;
padding: 10px 50px ;
}

.overlay {
  height: 0%;
  width: 10%;
  position: fixed;
  z-index: 999;
  top: 15%;
  right:0;
  background-color: #435F97;
  overflow-y: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 15%;
  width: 100%;
  text-align: center;
  display: block;
  text-decoration-line:none;
color: #f0f0f0;
font-size: 1.1em;

}

table, th, td { 
  align:center;
  border:2.5px solid #435F97;
  margin-top:70px;
  text-align: center;
  text-decoration-line:none;
  color: #7A95CB;
  font-size: 1.3em;
  border-radius:10px;
   font-style: italic;

}
.table-content{
   color: #435F97;
   text-align: center;
  text-decoration-line:none;
  
}
.c{
display:flex;
flex-direction:column;
  text-align: center;
    text-decoration-line:none;
	  font-style: italic;
}
.footer {
   left: 0;
   right:0;
   bottom: 0;
   border-radius : 10px;
   width: 99%;
   padding: 9px 7px ;
   background-color: #435F97;
   color: #f0f0f0;
   text-align: center;
   border-radius:10px;
}


</style>
</head> 
  <body>
  
       <header>
  
  <a><img src="logodark.jpg" width="100" height="100"></a>
 
 <div id="myNav" style="position: fixed" class="overlay">
  <a href="javascript:void(0)" onclick="closeNav()">&times;</a>
  <div class="overlay-content">

<a href="Homeadvisor.php" class="overlay-content" >Home</a><br>
    <a href="Coursesadvisor.html" class="overlay-content" >Courses</a><br>
	<a href="consultingadvisor.html" class="overlay-content">Consulting</a><br>
   <a href="About.html" class="overlay-content">About Us</a><br>
	<a href="contact.html" class="overlay-content">Contact Us</a>

  </div>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()"><font color="f0f0f0" > &#9776; </font></span>

<script>
function openNav() {
  document.getElementById("myNav").style.height = "50%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
</script> 

 </header>

<table style="width:100%">
  <tr>
    <th style="background-color:#435F97">content</th>
  </tr>
  <?php

  while($stmt->fetch()){
  ?>
  <tr>
    <td ><a href="<?php echo $url; ?>" class="table-content" type="video/mp4" target=”_blank”><?php echo $name; ?></a></td>
  </tr>
  <?php
  }
  ?>

</table>

<br>
<br>
<div class="footer">
  <p>Copyright © 2022 <strong>C.E.P</strong></p>
</div>
  </body>
  
  </html>