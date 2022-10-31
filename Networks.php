<DOCTYPE html!>
<html>
	<head>
	<title>Networks</title>
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
.Text1 {

width : 100%
position: fixed;
z-index : 999;
display: flex;
border-radius: 10px;
justify-content:space-between;
align-items: center;
padding: 50px 50px ;
margin-top: 10px;
font-size: 25px;
text-align : center;
color: #7A95CB;
margin-left: -75px;
  }

.Text2 {

padding: 50px 50px ;
font-size: 28px;
text-align : right;
color: #7A95CB;
margin-rhight: -120px;
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

input[type=submit]{
  background-color: #7A95CB;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
    font-style: italic;
margin-left: 380px;
border-radius:20px;
position: left;
margin-left: 270px;
}

.address{
justify-content:space-between;
position: left;
margin-top: 10px;
margin-left: 150px;

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

<a href="AMhome.html" class="overlay-content" >Home</a><br>
    <a href="Courses.html" class="overlay-content" >Courses</a><br>
	<a href="consulting.html" class="overlay-content">Consulting</a><br>
   <a href="#" class="overlay-content">About Us</a><br>
	<a href="#" class="overlay-content">Contact Us</a>

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
 <div class="Text1">
<img src="N.jpg" width="450" height="300" class="address">

<p> A computer network is a set of computers sharing resources located on or provided by network nodes. The computers use common communication protocols over digital interconnections to communicate with each other. 
<br>These interconnections are made up of telecommunication network technologies, based on physically wired, optical, and wireless radio-frequency methods that may be arranged in a variety of network topologies.
<br><br>Teacher name : Saud Ahmad
<br>Explanation type: recorded videos <br>Subsecription price : 150 SAR
</p> </div>

<p><input type = "submit" value="Subscribe"/>
<br>
<div class="footer">
  <p>Copyright © 2022 <strong>C.E.P</strong></p>
</div>
  </body>
  
  </html>