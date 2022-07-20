<?php
$title = "تسجيل الدخول";
include 'header.php';
include 'connect-db.php';
//session_start();


if (isset($_POST['sub'])) {
    //create variables
    $uname = $_POST['uname'];
    $pwd = md5($_POST['password']);
    $group = $_POST['group'];
    

    //create query
    $query = "SELECT * FROM user WHERE uname='$uname' AND Password='$pwd' AND hos='$group'";
    //run query
    $result = mysqli_query($con, $query);

    if ($result) {
        if ((mysqli_num_rows($result) == 1)) {
            //After checking if the username/password is correct, set the session


            if ($group == "hospital") {
                $_SESSION['hospital'] = "hospital";
                $_SESSION['hospital'] = true;
                header('Location: view.php');
                exit();
            } elseif ($group == "clinic") {
                $_SESSION['clinic'] = "clinic";
                $_SESSION['clinic'] = true;
                header('Location: form.php');
                exit();
            }
        } else {
            header('Location: Login.php?status=invalid');
            exit();
        }
    }
}
?>
<html lang="ar"  dir="rtl">
<title><?php echo $title; ?> - حجز مواعيد</title>
<body>
    <form name="lo" id="lo" action="Login.php" method="POST" enctype="multipart/form-data" onsubmit="return validate1()">



        <fieldset id="log">
<!-- Setting the session  to show the status-->
<?php 
if (isset($_GET['status']) and $_GET['status'] === "invalid") { ?>          
                <p class="login-error">خطأ في تسجيل الدخول 	معلومات الدخول غير صالحة , الرجاء المحاولة مرة أخرى</p>
<?php } ?> 
            <h3>تسجيل الدخول</h3>
         

            <img src="Img/login.png"  alt="icon" width="100" height="100"><br><br>
            <img src="Img/username.png"  alt="icon" width="30" height="30">
            <label><strong>اسم المستخدم </strong><h2 style="color: red; display :inline">* </h2><input type="text" name="uname" maxlength="10" required placeholder="رقم سجلك المدني"/></label> 
            <span class="error" id="na">مطلوب</span>
            <br><br>
            <img src="Img/password.png"  alt="icon" width="30" height="30">
            <label><strong>كلمة المرور</strong><h2 style="color: red; display :inline">* </h2> <input type="password" name="password" maxlength="13"  required placeholder="كلمة المرور"/></label> 
            <span class="error" id="pass">مطلوب</span><br>
            <br> <label title="" class="align"<h2 style="color: red; display :inline">* </h2> هل انت</label><br>
            <input title="hos" type="radio" value="hospital" name="group">موظف المستشفى
            <br>
            <input title="hos" type="radio" value="clinic" name="group">موظف المركز الصحي
            <br><span class="error" id="3">مطلوب</span><br> 
            <br><br><input type="submit" value="دخول" name='sub'style="height:30px; width:170px" onclick="validatel()" />



        </fieldset><br><br><br>


    </form></body></html>
<script>
    function validatel()
    {
        var i = document.lo.uname.value;
        var x = document.lo.password.value;
        var group = document.lo.password.value;

        var spans = document.getElementsByTagName("span");
//cheacking if all the fileds are empty then show span 
        if (i === "")
        {
            spans[1].style.visibility = "visible";

        }

        if (x === "")
        {
            spans[2].style.visibility = "visible";

        }
        if (group === "")
        {
            spans[3].style.visibility = "visible";
        }

    }




</script>

<?php
include 'footer.php';
?>
