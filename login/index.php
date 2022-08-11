<?php 
error_reporting(0);
session_start();
require('../db.php');

if(isset($_POST["submit"])){  
  
if(!empty($_POST['email']) && !empty($_POST['pass'])) {  
    $email=$_POST['email'];
    $email = mysqli_real_escape_string($m4, $email);
    $pass=$_POST['pass'];
    $pass=mysqli_real_escape_string($m4, $pass);

    
  
    $query=mysqli_query($m4, "SELECT * FROM casestore WHERE email='".$email."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbemail=$row['email'];  
    $dbpassword=$row['password'];
    $_SESSION['id'] = $row['id'];
    }  
  
    if($email == $dbemail && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_email']=$email;  
  
    /* Redirect browser */  
    header("Location: ../dashboard/index.php");  
    }  
    } else {  
    header("Location: ../erlogin.html");
    }  
  
}  
}else{
  header("Location: ../getstarted.html");
}  
?>