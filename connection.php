<?php
// databace connection 
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'cep';
    
    $connect = mysqli_connect($host, $user, $password, $database);
            
    if(!$connect){
        die("not connected, check connection and database information.");
        exit();
    }
     else {
		//echo 'connected';
     }