<DOCTYPE html!>
<html>
	<head>
	<title>Who are you ?</title>
	</head> 
	<style type="text/css">
header{
background-color:#7A95CB ;
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
  background-color: #7A95CB;
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


.address{
justify-content:space-between;
position: center;
margin-top: 120px;
margin-left: 300px;

}
.footer {
   left: 0;
   right:0;
   bottom: 0;
   border-radius : 10px;
   width: 99%;
   padding: 9px 7px ;
   background-color: #7A95CB;
   color: #f0f0f0;
   text-align: center;
   border-radius:10px;
}
</style>
</head>
  
  <body>
  
       <header>
  
  <a><img src="logo2.jpg" width="100" height="100"></a>
  
  
 <div id="myNav" style="position: fixed" class="overlay">
  <a href="javascript:void(0)" onclick="closeNav()">&times;</a>
  <div class="overlay-content">

<a href="AMhome.php" class="overlay-content" >Home</a><br>
   <a href="About.html" class="overlay-content">About Us</a><br>
	<a href="contact.html" class="overlay-content">Contact Us</a>

  </div>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()"><font color="f0f0f0" > &#9776; </font></span>

<script>
function openNav() {
  document.getElementById("myNav").style.height = "30%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
</script>

 </header>
<div class="address">
  <a href="SignUp.php"><img src="s&u.jpg" width="450" height="300" ></a>
<a href="signup2.php"><img src="t&a.jpg" width="450" height="300" ></a>
</div>

<br>
<br>
<br>
<br>

<div class="footer">
  <p>Copyright © 2022 <strong>C.E.P</strong></p>
</div>
  </body> 
  </html>