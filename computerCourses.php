<DOCTYPE html!>
<html>
	<head>
	<title>Computer Courses</title>
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


body {

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
margin-top: 68px;
margin-left: 225px;

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

    <a href="Homeuser.php" class="overlay-content" >Home</a><br>
    <a href="Courses.html" class="overlay-content" >Courses</a><br>
	<a href="consulting.html" class="overlay-content">Consulting</a><br>
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
  <a href="Networks.html"><img src="N.jpg" width="350" height="200" ></a>
<a href="#"><img src="DB.jpg" width="350" height="200" ></a>
  <a href="Programing.html"><img src="Pr.jpg" width="350" height="200" ></a>
<a href="#"><img src="Wad.jpg" width="350" height="200" ></a>
  <a href="#"><img src="DL.jpg" width="350" height="200" ></a>
<a href="#"><img src="DS.jpg" width="350" height="200" ></a>
</div>
 

<br>
<br>


<div class="footer">
  <p>Copyright © 2022 <strong>C.E.P</strong></p>
</div>
  </body>
  
  </html>