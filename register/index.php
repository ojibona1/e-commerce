<?php
require('../db.php');
// If form submitted, insert values into the database.
$email =  stripslashes($_POST['email']);
$pass = stripslashes($_POST['pass']);
$confirmpass =  stripslashes($_POST['cpass']);


if($pass == $confirmpass){
if (isset($_POST['email'])){

        $select = mysqli_query($m4, "SELECT `email` FROM `casestore` WHERE `email` = '".$email."'") or exit(mysqli_error($m4));
       if(mysqli_num_rows($select) > 0) {
               echo 'account exists';
          }else{
                $query = "INSERT into `casestore` ( password, email ) VALUES ( '$pass', '$email')";
                        $result = mysqli_query($m4,$query);
                        if($result){
                            $_SESSION['email'] = $email;
                           header("Location: ../getstarted.html");
                        }else{
                            echo 'nothing happen';
                        }
          }

    }
}
else{
  echo 'problem dey';
}

?>