<?php
//session_start();
include 'Header.php';
include 'connect-db.php';
$title='عرض المواعيد';


if(!isset($_SESSION['hospital']))
{
    header('Location: error.php');
}

?>

 <title><?php echo $title; ?> - حجز مواعيد</title>
<html lang="ar"  dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Connecting to CSS file for styling  -->
    <link  href="Style.css" rel="stylesheet" type="text/css"/></head>

            <table  class="tab" style="width:100%; border: black solid ; border-width: 3px;">
                <thead>
                <th class="col">أسم المريض</th>
                    <th  class="col">الأهمية</th>
                    <th class="col">تاريخ الميلاد</th>
                    <th class="col">الجنس</th>

                    <th class="col">الجنسية</th>

                    <th class="col">رقم الهوية-الإقامة</th>
                    <th class="col"> هاتف المريض</th>
                    <th class="col">  العيادة المحول لها</th>
                    <th class="col"> المركز الصحي</th>
                    <th class="col"> ملاحظات</th>
                    <th class="col">للتواصل عن طريق أيميل الموظف</th>
            </thead>
<?php
 // here retrive the patient from db
$q = "SELECT * FROM patient";
$result = mysqli_query($con, $q );
    $s= array();

    // RETRIEVE VALUES FROM RESULT
    while ($row = mysqli_fetch_assoc($result)) {

        $s[$row['subject']]=array(
              
            'subject' => $row['subject'],
            'priority' => $row['priority'],
            'birth' => $row['birth'],
            'gender' => $row['gender'],
            'Natio' => $row['Natio'],
            'idnamber' => $row['idnamber'],
            'phone' => $row['phone'],
            'opd' => $row['opd'],
                         
            'Mname' => $row['Mname'],
            'message' => $row['message'],
            'ememail'=> $row['ememail']



        );
    }

    
   
    
    ?>
            <tbody>
            <form  name="hajz1" id="hajz1" action="view.php" method="POST" enctype="multipart/form-data" > 
        
            </form> 
            <br>
            <?php
            if (isset($_POST['hajz']))
            {
                header('Location: hajz.php');
            }
            ?>
 <?php foreach ( $s as $info) { ?>
                        <tr  style=" border: black solid" >
                            
                           
                            <td class="col">
                                <h4><span> <?php echo $info['subject']; ?></span> </h4>
                            </td>
                            <td class="col">
                                <h4><span> <?php echo $info['priority']; ?></span> </h4>
                            </td>
                            <td class="col">
                                <h4><span> <?php echo $info['birth']; ?></span> </h4>
                            </td>
                            <td class="col">
                                <h4><span> <?php echo $info['gender']; ?></span> </h4>
                            </td>
                            
                               <td class="col">
                                <h4><span> <?php echo $info['Natio']; ?></span> </h4>
                            </td>
                            
                               <td class="col">
                                <h4><span> <?php echo $info['idnamber']; ?></span> </h4>
                            </td>
                               <td class="col">
                                <h4><span> <?php echo $info['phone']; ?></span> </h4>
                            </td>
                               <td class="col">
                                <h4><span> <?php echo $info['opd']; ?></span> </h4>
                            </td>
                               <td class="col">
                                <h4><span> <?php echo $info['Mname']; ?></span> </h4>
                            </td>
                               <td class="col">
                                <h4><span> <?php echo $info['message']; ?></span> </h4>
                            </td>
                         
                                        
                               <td class="col">
                              
                                   <h4><span> <?php echo $info['ememail']; ?></span> </h4>
                                           
                            </td>
                            
                            
                        </tr>
                   
   <?php } ?>
 
                    </tbody>    
      
 </table><br>

    </html>

       
<?php
 if (isset($_POST["submit3"]))
 {

     
     $state1=$_POST['state'];
     //$id1=$_POST['idnamber'];
    
     
     
     $q1 = "SELECT * FROM patient"; // here retrive the patient from db
     $result1 = mysqli_query($con, $q1 );
     $s1= array();

    // RETRIEVE VALUES FROM RESULT
    while ($row = mysqli_fetch_assoc($result1)) {

        $s1[$row['subject']]=array(
              
            
            'idnamber' => $row['idnamber'],


        );
    }
   
    //Create query
    $q2=" UPDATE patient SET state ='$state1'  ";
    //run query
    $result2 = mysqli_query($con, $q2);
 }
?>
<?php
include 'footer.php';
?>
