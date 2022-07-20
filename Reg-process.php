<?php
include 'Header.php';
include 'connect-db.php';
session_start();
?>
<head>
    <title>Registration</title>
</head>
<body>
    <div id="wrapper">


        <?php
        if (isset($_POST['sub'])) {
            //Create variables 
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $nationality = $_POST['Natio'];
            $email = $_POST['email'];
            $phone = $_POST['Pnumber'];
            $Mname = $_POST['Mname'];


            $username = $_POST['uname'];
            $password = md5($_POST['password']);
            $group = $_POST['group'];





            //Create query
            $query = "INSERT INTO user (fname, lname, Natio, email,Pnumber, Mname, uname,password ,hos)
      VALUES('$fname','$lname','$nationality','$email','$phone','$Mname','$username','$password','$group')";
            // run query

            $res = mysqli_query($con, $query);

            //checking the result
            if ($res == 1) {
                $status = "done";

                header("Location: thanx.php?status=$status");
            } else {
                $status = "notdone";
                echo 'لم تتمكن من التسجيل بنجاح ';
            }
        }
        $info = array();

        //RETRIEVE VALUES FROM RESULT
        while ($row = mysqli_fetch_assoc($res)) {

            $info[$row['fname']] = array(
                'fname' => $row['fname']
            );
        }
        ?>


    </table>
</div>
</body>
<?php include 'footer.php'; ?>
