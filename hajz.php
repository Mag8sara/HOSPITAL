<?php

$title = "أضافةالحجز";
include 'header.php';
include 'connect-db.php';
//session_start();

if(!isset($_SESSION['hospital']))
{
    header('Location: error.php');
}

if (isset($_POST['sub'])) {
            //create variables
            $idnamber = $_POST['idnamber'];
            $Mname = $_POST['Mname'];
       

            //uploading the image 
            $filename = $_FILES['fig']['name'];
            $tmp = $_FILES['fig']['tmp_name'];
            $size = $_FILES['fig']['size'];
            $error = $_FILES['fig']['error'];
            $type = $_FILES['fig']['type'];


            $path = "Images/";
            $path = $path.basename($filename);


            $accepted = array('png', 'jpg', 'jpeg', 'gif');
            $ext_array = explode(".", $path);
            $extension = end($ext_array);
            $result = in_array($extension, $accepted);


            if ($size <= 500000 && ($result == 1) && ($error == 0)) 
{

                $out = move_uploaded_file($tmp, $path);
                if($out==1)
                {
            //Create query
            $query = "INSERT INTO hajz (idnamber,fig,Mname)VALUES('$idnamber','$path','$Mname')";
            //run query
             $res = mysqli_query($con, $query);
             
             
            //checking the result
            if ($res == 1) {
                $status = "done";
                echo '<center><strong>تم اضافة الحجز</strong></center>';
             
            }
            else 
                {
            
                $status = "notdone";
                echo '<center><strong>لم يتم اضافة الحجز</strong> </center>';
            }
                }
                else
                {
                    $status="notdone";
                }
                
                }
            

}



?>


<html>
    
    <head> 
        <title><?php echo $title; ?> - حجز مواعيد</title>
         <!-- Connecting to CSS file for styling  -->
        <link  href="style1.css" rel="stylesheet" type="text/css"/>
    </head>
    <br>
    <h1><center> حجز موعد</center></h1>
    
    
    <form name="form4" id="form4" method='post' action="hajz.php" onsubmit='return validate_form4()' lang="arb" dir="rtl" enctype="multipart/form-data">
        <br><br><br> أدخل السجل المدني للمريض:<h2 style="color: red; display :inline">* </h2><input type='text' name='idnamber' placeholder="السجل المدني" maxlength="10" minlength="10" required=""/><span class='error'>مطلوب </span><br><br> 
        إدراج صورة للموعد : <h2 style="color: red; display :inline">* </h2><input type='file' name='fig' required=""/><span class='error'>مطلوب </span><br><br>
     
       أختر المركز الصحي:<h2 style="color: red; display :inline">* </h2><select name="Mname" style="width: 200px">
               <option value="default"></option>
            <option value="AlGrain">القرين</option>
            <option value="Hazm El Mabraz">حزم المبرز</option>
            <option value="Jolaijelah">جليجله</option>
            <option value="Mahasen">محاسن</option>
            <option value="AlMteerfi">المطيرفي</option>
            <option value="Shamal El Mabraz">شمال المبرز</option>
            <option value="Al Oyouni">العيوني</option>
            <option value="Al Rashedeyyah">الراشدية</option>
            <option value="Al Shogaig">الشقيق</option>
            <option value="Kora Alsho'ben">قرى الشعبة</option>
            <option value="Sho'bat AlMabraz">شعبة المبرز</option>
            <option value="Ghasibah">عصيبة</option>
            <option value="AL Yahya">اليحيى</option>
            <option value="Al Oyoun">العيون</option>
            <option value="AlJern">الجرن</option>
            <option value="AlMarah">المراح</option>
            <option value="AlWazeyyah">الوزية</option>
            <option value="AlHaras AlWatani">الحرس الوطني</option>
            
     
        </select><span class='error'>مطلوب </span><br><br>
        
        <center><button name='sub' style="height:30px; width:170px; font-size:20px;" onclick="validate_form4()"><strong>تأكيد الحجز</strong></button></center>
    </form><br><br><br>
</html>

<script>
    
    function validate_form4()
    {
       var idnum= document.form4.idnamber.value;
       var pic= document.form4.fig.value;
       var mr= document.form4.Mname.value;
       
       var spans=document.getElementsByTagName("span");
       //cheacking if all the fileds are empty then show span 
       if(idnum==="")
       {
           spans[0].style.visibility="visible";
       }
       if(pic==="")
       {
           spans[1].style.visibility="visible";
       }
       if(mr==="default")
       {
           spans[2].style.visibility="visible";
       }
       
       
    }
 </script>
 
<?php
include 'footer.php';
?>