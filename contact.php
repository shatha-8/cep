<DOCTYPE html!>
<html>
	<head>
	<title>Contact us</title>
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

    <a href="AMhome.php" class="overlay-content">Home</a><br>
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
<a href="http://wa.me/966509455900"><img src="whatsApp.jpg" width="400" height="300"></a>
<p style="color:#60BE92">If you need to reschedule or cancel your appointments, replace a wrong course, quickly activate the explanations of the paid course and other services, you can quickly contact us via WhatsApp</p>
</div>


<div class="address"> 

<p style="color:#7AABCB">If you want to follow our achievements or our latest news and what we offer, you can follow us on Twitter</p>
<a href="https://mobile.twitter.com/CEP_90"><img src="Tweeter.jpg" width="400" height="300"></a>
</div>

<div class="address"> 
<a href="#"><img src="Insta.jpg" width="400" height="300"></a>
<p style="color:#A285AB">If you would like to know some of our ideas, achievements and designs, and would like to support us with your creative ideas and comments, you can follow us and communicate with us via Instagram</p>
</div>

<div class="address"> 

<p style="color:#A20B0B">If you want to send a complaint or tell us about a problem, share it with us via e-mail</p>
<a href="https://mail.google.com/mail/u/0/?fs=1&to=shatha17m@gmail.com&su=CEP&tf=cm"><img src="Gmail.jpg" width="400" height="300"></a>
</div>

<br>
<br>
<div class="footer">
  <h4>Copyright © 2022 <strong>C.E.P</strong></h4>
</div>
  </body>
  
  </html>