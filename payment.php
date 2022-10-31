<?php
session_start();
if(isset(filter_input_array(INPUT_POST)['uploadBtn'])){
	require "connection.php";
		// get the ID from login session.
		 $ID = $_SESSION['id'];
		 
        //// Start new file Code ////
        $filetemp = $_FILES['file']['tmp_name']; //the temp stored file before move it to uploaded folder path.
        $filename = $_FILES['file']['name'];     //the original file name as it's in user pc.
        $filesize = $_FILES['file']['size'];     //get file size.
        $filetype = pathinfo($filename, PATHINFO_EXTENSION); //get the file's extention
        $Folderpath = './payment/';     //spefify the folder for uplaoded file.
        if(empty($filename)){
			$msg = "Please select payemnt file";
        }
        elseif (!empty($filename)) {
            //generate new name for uploaded file.based on current timpstamp.
            $temp = explode(".", $filename);
            $newFileName = round(microtime(true)) . '.' . end($temp);
            if ($newFileName) {
                $allowed = array('pdf','PDF'); // define the allowed extention to upload
                //check if file is exsist
                if (file_exists($Folderpath . $newFileName)) {
					$msg =  "Please select another file";
                }
                // Check file formats
                elseif (!in_array($filetype, $allowed)) {
                    $msg = "Please select PDF file";
                }
                // Check file size
                elseif ($filesize / 1024 / 1024 > 5) {
                    $msg = "Please select PDF file less than 5 MB";
                } else {
                    $pay_path = $Folderpath . $newFileName; //full file path.
                    move_uploaded_file($filetemp, $pay_path); //move the file into Server folder.
                    //insert the stat details in database.
                    //$pay_path_to_store =  substr($pay_path, 3); // to remove the [../] from slide path.
                    $update   = $connect->prepare('UPDATE user SET file=? WHERE ID = ?');
                    $update->bind_param('si', $pay_path, $ID);
                    $update->execute();
                    if ($update->affected_rows == 1) {
                        $msg = "The Payment file has uploaded successfully.";
                    } else {
                        $msg = "The Payment file hasn't uploaded, try again!";
                    }
                    $update->close();
                }
            }
        } }
?>

<DOCTYPE html!>
<html>
	<head>
	<title>Payment page</title>
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
.choose{
font-size: 28px;
color: #7A95CB;
margin-left:600px;
margin-top:200px;
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

.uploadBtn {
width:30%;
  background-color: #7A95CB;
  border: none;
  color: #f0f0f0;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
    font-style: italic;
border-radius:20px;
margin-left:550px;
margin-top:140px;
}
.uploadBtn:hover {
  background-color: #4C6AA6;
}
p{
font-style: italic;
color:#5AD8B7;
padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
margin-left:600px;
font-size:1.1em;
}
.address1{

margin-left:150px;
height: 70px;
}
.address2{

position: center;
margin-top:2px;
margin-left: 170px;

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

 input[type=file] {
	width: 0.1px;
	height: 0.1px;
	opacity: 0;
	overflow: hidden;
	position: absolute;
	z-index: -1;
}
.inputfile:focus + label,
.inputfile :hover {
    background-color: #4C6AA6;
}

.inputfile:focus + label {
	outline: 1px dotted #000;
	outline: -webkit-focus-ring-color auto 5px;
}

.inputfile + label * {
	pointer-events: none;
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
<p>
<?php
if(isset($msg)){
	echo $msg ;
	}
?>
</p>


<div class="address1"> 
	<form action="" method="POST" enctype="multipart/form-data">
		 <input type="file" name="file" id="file">
		 <label for="file" class="choose"><img src="choose2.jpg" width="200" height="100">choose file</label>
		 <input  name="uploadBtn" type="submit" value="Send" class="uploadBtn">
    </form>
</div>

<div class="address2"> 
  <img src="bank.png" width="450" height="300"/>
  <br>
  
</div> 
 
<div>
</div>
<br>
<br>
<div class="footer">
  <h4>Copyright © 2022 <strong>C.E.P</strong></h4>
</div>
  </body>
  
  </html>