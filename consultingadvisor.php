<DOCTYPE html!>
<html>
	<head>
	<title>Consulting </title>
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
font-size: 1.1em;}
h1{
font-size: 45px;
text-align : center;
color:#7A95CB;
}

.address{
background-color:white ;
width : 100%
position: fixed;
z-index : 999;
display: flex;
border-radius: 10px;
justify-content:space-between;
align-items: center;
padding: 50px 50px ;
margin-top: 30px;
font-size: 35px;
text-align : center;

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

<div class="address"> 
<a href="https://zoom.us/signin"><img src="zoom.jpg" width="400" height="300"></a>
<p style="color:#435F97">You register on the Zoom website to create sessions and also to store the scheduling of meetings on the specified dates</p>
</div>


<div class="address"> 

<p style="color:#435F97">You register on jotform to create your schedule for the user to book</p>
<a href="https://www.jotform.com/signup/"><img src="jotform.jpg" width="400" height="300"></a>
</div>


<br>
<br>
<div class="footer">
  <h4>Copyright © 2022 <strong>C.E.P</strong></h4>
</div>
  </body>
  
  </html>