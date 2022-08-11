<<<<<<< HEAD
<?php 
require_once('./db.php');

$cur_phone = htmlspecialchars($_GET['phone']);
$phone = array('default');
array_push($phone, $cur_phone);
$emails = htmlspecialchars($_GET['email']);
$columns = implode(",", array_values($phone));


$select = mysqli_query($m4, "SELECT * FROM `casestore` WHERE `email` = '".$emails."'") or exit(mysqli_error($m4));
$row = mysqli_fetch_assoc($select);
$email = $row['email'];
$rowPhone = $row['phone'];

if($email == $emails){

        if(strpos($rowPhone, "$cur_phone") !== false){
            echo 'nothing';
        }else{
            $newPhone = $rowPhone. "," .$cur_phone;
            $updates = mysqli_query($m4, "UPDATE casestore SET phone='$newPhone' WHERE email= '".$emails."'");
    
        }
}else{
    $query = "INSERT into `casestore` (phone, email) VALUES ('$columns', '$email')";
    $result = mysqli_query($m4,$query);
    if($result){
        echo 'done';
    }else{
        echo 'failed';
    }
    }
=======
<?php 
require_once('./db.php');

$cur_phone = htmlspecialchars($_GET['phone']);
$phone = array('default');
array_push($phone, $cur_phone);
$emails = htmlspecialchars($_GET['email']);
$columns = implode(",", array_values($phone));


$select = mysqli_query($m4, "SELECT * FROM `casestore` WHERE `email` = '".$emails."'") or exit(mysqli_error($m4));
$row = mysqli_fetch_assoc($select);
$email = $row['email'];
$rowPhone = $row['phone'];

if($email == $emails){

        if(strpos($rowPhone, "$cur_phone") !== false){
            echo 'nothing';
        }else{
            $newPhone = $rowPhone. "," .$cur_phone;
            $updates = mysqli_query($m4, "UPDATE casestore SET phone='$newPhone' WHERE email= '".$emails."'");
    
        }
}else{
    $query = "INSERT into `casestore` (phone, email) VALUES ('$columns', '$email')";
    $result = mysqli_query($m4,$query);
    if($result){
        echo 'done';
    }else{
        echo 'failed';
    }
    }
>>>>>>> 2744e11 (m)
?>