<?php
//session_start();
include 'Header.php';
include 'connect-db.php';
$title='عرض البحث';



if(!isset($_SESSION['clinic']))
{
    header('Location: error.php');
}
?>
 <title><?php echo $title; ?></title>
<html lang="ar"  dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <!-- Connecting to CSS file for styling  -->
    <link  href="Style.css" rel="stylesheet" type="text/css"/>
 <link  href="style1.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <form name="search" action="viwehajz2.php" method="POST" enctype="multipart/form-data" onsubmit="return validate()">
            
       <fieldset id="home"> 
           
            <legend>العرض</legend>
            
            <h2 style="color: red; display :inline">*</h2>اختر المركز :
          
            <?php
            //Create query
            $sql = "SELECT DISTINCT Mname FROM hajz";
            //run query
            $result = mysqli_query($con, $sql);

            echo "<select name='Mname' required style='width:120px; height: 30px'>";
            echo "<option value='default'></option>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['Mname'] . "'>" . $row['Mname'] . "</option>";
            }
            echo "</select>";
            ?>
            <br>
            <span class="error" id="0" >مطلوب</span><br>
            
            <?php
if (isset($_POST['find2'])) {
    // create variables 
    $Mname = $_POST['Mname'];

    if ($Mname == "default") {  // if nothing is selected in Dropdown box
        echo '<h1>', '<strong>', 'لم يتم اختيار المركز ', '</strong>', '</h1>';
    } else 
        {
?>
<center><table  class="tab" style="width:100%; ">
                <thead>
                <th class="col">السجل المدني للمريض</th>
                <th  class="col"><center>صورة الحجز</center></th>
                <th class="col">اسم المركز</th>
        

            </thead>
<?php
$q2 =  "SELECT * FROM hajz WHERE Mname='$Mname' "; // here retrive the patient from db
//run query
$result4 = mysqli_query($con, $q2 );
    $s4= array();

    // RETRIEVE VALUES FROM RESULT
    while ($row = mysqli_fetch_assoc($result4)) {

        $s4[$row['idnamber']]=array(
             
            'idnamber' => $row['idnamber'],
            'fig' => $row['fig'],
            'Mname' => $row['Mname']
        );
    }

    ?>
            <tbody>
 <?php foreach ( $s4 as $info) { ?>
                        <tr  style=" border: black solid" >
                            
                           
                            <td class="col">
                                <h4><span> <?php echo $info['idnamber']; ?></span> </h4>
                            </td>
                            <td class="col">
                                
                                <h4><span>   <img src="<?php echo $info['fig']; ?>" width="400" height="300"/>     </span> </h4>
                            </td>
                            <td class="col">
                                <h4><span> <?php echo $info['Mname']; ?></span> </h4>
                            </td>
                      
                        </tr>
                        </form>

<?php }}} ?>
                    </tbody>    
      
            </table></center> 



    <?php    
    
    
    if ((mysqli_num_rows($result) == 0)) {
        echo '<h1>', '<strong>', 'لاتوجد نتائج', '</strong>', '</h1>';
    }

?>
              <br><br>
              <input type="submit" name="find2" value="بحث" onclick=" return validate(); " style="width:120px; height: 40px; "/> 

  
       </fieldset>
</form>





    </body>

<script>
                function validate()
                {
                    var Mname = document.search.Mname.value;
                  
                    var spans = document.getElementsByTagName("span");
                    //cheacking if all the fileds are empty then show span 
                    if (Mname === "default")
                    {
                        spans[0].style.visibility = "visible";
                    }
                    
    }
 </script>
 </html>

<?php
include 'footer.php';
?>
