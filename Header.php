<?php
session_start();
?>
    <!DOCTYPE html>
    <html lang="ar">
    <head>
       <!-- Connecting to CSS file for styling  -->
        <link  href="Style.css" rel="stylesheet" type="text/css"/>
        
        
    </head>
    <body>
        
        <div id="wrapper">

        </div>
        <ul id="ul">
      <!-- Setting the session  to show the links-->    
    <?php if(!isset($_SESSION['hospital']) AND (!isset($_SESSION['clinic']))){ ?>
            <li class="a"><a href="Login.php">تسجيل الدخول</a></li>
  <?php } ?>
            
               <!-- Setting the session  to show the links--> 
   <?php if(isset($_SESSION['hospital'])) { ?>
    <li class="a"><a href="view.php">عرض المواعيد</a></li>
    <li class="a"><a href="hajz.php">إضافة الحجز</a></li> 
     <li class="a"><a href="logout.php">تسجيل الخروج</a></li> 
       
     <?php } ?>
        <!-- Setting the session  to show the links--> 
    <?php if(isset($_SESSION['clinic'])) { ?>
    <li class="a"><a href="form.php">إنشاء إحالة جديدة</a></li>
 <li class="a"><a href="viwehajz2.php">عرض الحجوزات</a></li>
     <li class="a"><a href="logout.php">تسجيل الخروج</a></li> 
     <?php } ?>
   
           </ul>
          </body>
          </html>