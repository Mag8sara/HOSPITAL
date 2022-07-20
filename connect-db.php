<?php


//STEP 1: DEFINE VARIABLES
//$host = 'localhost';
//$user = 'root';
//$pwd = '';
//$db = 'hospital';
$host = 'localhost';
$user = 'root';
$pwd = '';
$db = 'hospital';
//STEP 2: CONNECT TO THE DB
$con = mysqli_connect($host,$user,$pwd,$db);
//STEP 3: CHECK FOR ERRORS
if(mysqli_connect_errno($con))
{
    echo mysqli_connect_error();
}



?>
