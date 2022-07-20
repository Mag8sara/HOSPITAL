<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">

        <!-- Connecting to CSS file for styling  -->
        <link  href="style6.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <footer>

            <div id="footer">
                <div class="col1" id="111">
                    <br><br>
                    <a class="admin" href="admin.php">دخول المشرف</a>
                    <br><br>
                     <!-- Setting the session  to show the links-->   
                    <?php if (isset($_SESSION['admin'])) { ?>

                        <a class="admin" href="Registration.php" >تسجيل موظف جديد</a>

                        <br><br>
                        <a class="admin" href="delete.php" >حذف موظف</a>
                        <br><br>
                        <a class="admin" href="logout.php" >تسجيل الخروج</a>
                    <?php } ?>

                </div>

                <div class="col1" id="222">
                    <h3></h3>
                    <ul id="foo">
                         <!-- Setting the session  to show the links-->   
                        <?php if (!isset($_SESSION['hospital']) AND ( !isset($_SESSION['clinic']))) { ?>
                            <li class="link"><a href="Login.php">تسجيل الدخول</a></li>

                        <?php } ?>
                             <!-- Setting the session  to show the links-->   
                        <?php if (isset($_SESSION['hospital'])) { ?>
                            <li class="link"><a href="view.php">عرض المواعيد</a></li>
                            <li class="link"><a href="hajz.php">إضافة الحجز</a></li> 
                            <li class="link"><a href="logout.php">تسجيل الخروج</a></li> 
                        <?php } ?>
                             <!-- Setting the session  to show the links-->   
                        <?php if (isset($_SESSION['clinic'])) { ?>
                            <li class="link"><a href="form.php">إنشاء إحالة جديدة</a></li>
                            <li class="link"><a href="viwehajz2.php">عرض الحجوزات</a></li>
                            <li class="link"><a href="logout.php">تسجيل الخروج</a></li> 
                        <?php } ?>

                    </ul>

                </div>

                <div class="col1" id="333">
                    <h3><strong>نبذة عن المستشفى</strong> </h3>
                    <p onclick="ChangeStyle()"><strong>مستشفى الأمير سعود بن جلوي بالأحساء الجديد يعد ضمن منظومة المشاريع الصحية الجديدة بالمحافظة والتي ستسهم في تطوير ونمو الخدمات الصحية بالمحافظة و ستنعكس هذه التطورات بإذن الله في مزيد من النتائج الإيجابيه لمؤشرات قياس الأداء الخاصة بالخدمات الصحة.</strong></p>

                </div> 


                <div class="col1"  id="444">
                    <br><br>
                    <p >جميع الحقوق محفوظة  &copy; <span><a style="color:white" href="http://www.psbjh.gov.sa">مستشفى الأمير سعود بن جلوي  &trade;</a></p>
                </div>
                
                <div class="col1"  id="555">
                    <br><br>
                    <p>نم إعداد وبرمجة الموقع من قبل طالبات  CCSIT:   </p>
                    <p><strong>غادة حمد المطلق</strong></p>
                     <p><strong>ساره صلاح المغلوث</strong></p>
                      <p><strong>بيان عمر الدرويش</strong></p>
                       <p><strong>ساره عبدالرحمن البنيان</strong></p>
                </div>
            </div>
       
        </footer></body>
</html>
