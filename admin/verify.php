<<<<<<< HEAD
<?php 
require_once('db.php');

if(isset($_POST['submit'])){
    if(!empty($_POST['email']) && !empty($_POST['pass'])){
        $email=$_POST['email'];
        $email = mysqli_real_escape_string($m4, $email);
        $password=$_POST['pass'];
        $password = mysqli_real_escape_string($m4, $password);

        $select = mysqli_query($m4, "SELECT * FROM `caseadmin` WHERE email = '".$email."' ");
        $row = mysqli_fetch_assoc($select);

        
            $row_email = $row['email'];
            $row_passsword = $row['password'];
        
        if($email == $row_email && $password == $row_passsword){
            session_start();
            $_SESSION['email'] = $row_email;
            header('Location: ./index.php');
        }else{
            echo 'incorrect';
        }
    }else{
        echo 'wetin sup';
    }
}else{
    echo 'omoo';
}

=======
<?php 
require_once('db.php');

if(isset($_POST['submit'])){
    if(!empty($_POST['email']) && !empty($_POST['pass'])){
        $email=$_POST['email'];
        $email = mysqli_real_escape_string($m4, $email);
        $password=$_POST['pass'];
        $password = mysqli_real_escape_string($m4, $password);

        $select = mysqli_query($m4, "SELECT * FROM `caseadmin` WHERE email = '".$email."' ");
        $row = mysqli_fetch_assoc($select);

        
            $row_email = $row['email'];
            $row_passsword = $row['password'];
        
        if($email == $row_email && $password == $row_passsword){
            session_start();
            $_SESSION['email'] = $row_email;
            header('Location: ./index.php');
        }else{
            echo 'incorrect';
        }
    }else{
        echo 'wetin sup';
    }
}else{
    echo 'omoo';
}

>>>>>>> 2744e11 (m)
?>