<?php
//session_start();
$title = "حذف موظف";
include 'Header.php';
include 'connect-db.php';



if(!isset($_SESSION['admin']))
{
    header('Location: error.php');
}

if(isset($_GET['submit']))
{
        //create variables 
	$uname1 = $_GET['uname'];

	//$query1 = "SELECT Pnumber FROM user WHERE Pnumber=$phone1";
	//$result1 = mysqli_query($con, $query1);
	
        //create query
	$query = "DELETE FROM user WHERE uname=$uname1";
        //run query
	$result = mysqli_query($con, $query);
	if($result==1)
	{
	  header("Location: delmsg.php");
    } else {

      header("Location: delete.php");
    }
  
}
?>
 <title><?php echo $title; ?> </title>
<html lang="ar"  dir="rtl">
<head>
     <title><?php echo $title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Connecting to CSS file for styling  -->
    <link  href="Style.css" rel="stylesheet" type="text/css"/>
    <link  href="style1.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
<div id="content">

<div class="page section">
    
    


    


</div>
</div>

<html>
    <center> <form method="get" action="delete.php" name="delete" id="de" class='form13' onsumbit=" return validatedel()">
        <center> <h1>حذف بيانات الموظف</h1></center>
    
 
    <p> <label> <h2 style="color: red; display :inline">* </h2> <b>حذف بإستخدام رقم السجل المدني  :</b> </label>
            
        <input type="text" name="uname" method="get" required maxlength="10" max="10"/> </p>
	 <span class="error" id="0">مطلوب</span>   
        
        
        <input type="submit" value="حذف" name="submit"  onclick=" return validatedel()"/> </p>
        </form></center></html>
	
        
<script>
    
      function validatedel()
    {
        var uname = document.delete.uname.value;

        var spans = document.getElementsByTagName("span");
//cheacking if all the fileds are empty then show span 
        if (uname === "")
        {
            spans[0].style.visibility = "visible";
        }
    }
    </script>
        <?php
  
include 'footer.php';
?>
