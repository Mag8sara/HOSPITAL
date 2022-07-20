<?php
session_start();
$title='عرض المواعيد';
//Setting the session  to destroy  the session
if(isset($_SESSION['hospital'])|| ($_SESSION['clinic'])||($_SESSION['admin']))
{
    session_unset();
    session_destroy();
    header("Location: Login.php");
}

?>
<html>
    <head>
        <title><?php echo $title; ?> - حجز مواعيد</title>
    </head>
</html>
