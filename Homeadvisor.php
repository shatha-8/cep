<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
<title>Consulting educational platform</title>
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

input[type=text] {
  width: 80%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-repeat: no-repeat;
  padding: 12px 20px 12px 35px;
}

body {
  background-image: url("backdark.jpg"); 
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 50%;
  background-position: center;
  }

 .navigation{
text-decoration-line:none;
color: #f0f0f0;
width: 40%;
margin: 15px;
font-size: 1.1em;
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
.image{
margin-top: 550px;
width:100%;
height:100%; 
position:center;

}
.address{
background-color:#435F97 ;
width : 100%
position: fixed;
z-index : 999;
display: flex;
border-radius: 10px;
justify-content:space-between;
align-items: center;
padding: 50px 50px ;
margin-top: 130px;
font-size: 28px;
text-align : center;
color: #f0f0f0;
}

.footer {
   left: 0;
   right:0;
   bottom: 0;
   width: 99%;
   padding: 9px 7px ;
   background-color: #435F97;
   color: #f0f0f0;
   text-align: center;
   border-radius: 10px;
}
</style>
</head>
  
  <body> 
       <header>
  <a><img src="logodark.jpg" width="100" height="100"></a>
  
  <form>
  <input type="text" name="search" placeholder="Search..">
</form>

 <a class="navigation">
 Welcome
 <?php echo ' ' . $_SESSION['name']; ?>
 </a> 
 <div id="myNav" class="overlay">
 
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
<div>
  <img src="helloadvisor.jpg" width="700" height="700" class="image">
</div>
<br>
<br>
<div class="footer">
  <p>Copyright © 2022 <strong>C.E.P</strong></p>
</div>
  </body>
  
  </html>