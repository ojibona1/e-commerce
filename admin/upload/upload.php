<?php
$target_dir = "../../PICTURES/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        $pictureName = "../../PICTURES/". basename( $_FILES["image"]["name"]);

require('../db.php');
// If form submitted, insert values into the database.
$name =  stripslashes($_POST['device']);
$price = stripslashes($_POST['price']);
$decription =  stripslashes($_POST['description']);
$image = ($_FILES['image']['name']);


if (isset($_POST['device'])){

                $query = "INSERT into `cases` ( name, price, description, image ) VALUES ( '$name', '$price', '$decription', '$image')";
                        $result = mysqli_query($m4,$query);
                        if($result){
                           echo 'success';
                        }else{
                            echo 'failed';
                        }
          }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }


?>