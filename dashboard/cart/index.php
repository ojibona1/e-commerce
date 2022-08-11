<<<<<<< HEAD
<?php 
session_start();
$email = $_SESSION['sess_email'];
require_once('../db.php');
$select = mysqli_query($m4, "SELECT * FROM `casestore` WHERE `email` = '".$email."' ") or exit(mysqli_error($m4));
$row =  mysqli_fetch_assoc($select);
$phone = $row['phone'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <style>
        div{
            background-color: aqua;
            padding:20px 10px;
            margin:30px
        }
    </style>


<script type="text/javascript">
        let phoned = "<?php echo $phone; ?>";
        let splitPhones =  phoned.split(',');
        let phoneArr = [];
        for(let i =0; i < splitPhones.length; i++){
              phoneArr.push(splitPhones[i]);
        }
             console.log(phoneArr);

             function main(arrayItem, index, array) {
    var spanObj = `<div> ${arrayItem} <div>`
    var divObj = document.createElement('div');
    divObj.id = `${index}`
    divObj.innerHTML = spanObj;

    
    document.body.appendChild(divObj);

   
    phoneArr[index] = spanObj
}
phoneArr.forEach(main);


    </script>

    <script type="text/javascript">
        let defaultItem = document.getElementById('0');
        defaultItem.style.display = 'none';
    </script>
<script src="./cart.js"></script>
</body>
=======
<?php 
session_start();
$email = $_SESSION['sess_email'];
require_once('../db.php');
$select = mysqli_query($m4, "SELECT * FROM `casestore` WHERE `email` = '".$email."' ") or exit(mysqli_error($m4));
$row =  mysqli_fetch_assoc($select);
$phone = $row['phone'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <style>
        div{
            background-color: aqua;
            padding:20px 10px;
            margin:30px
        }
    </style>


<script type="text/javascript">
        let phoned = "<?php echo $phone; ?>";
        let splitPhones =  phoned.split(',');
        let phoneArr = [];
        for(let i =0; i < splitPhones.length; i++){
              phoneArr.push(splitPhones[i]);
        }
             console.log(phoneArr);

             function main(arrayItem, index, array) {
    var spanObj = `<div> ${arrayItem} <div>`
    var divObj = document.createElement('div');
    divObj.id = `${index}`
    divObj.innerHTML = spanObj;

    
    document.body.appendChild(divObj);

   
    phoneArr[index] = spanObj
}
phoneArr.forEach(main);


    </script>

    <script type="text/javascript">
        let defaultItem = document.getElementById('0');
        defaultItem.style.display = 'none';
    </script>
<script src="./cart.js"></script>
</body>
>>>>>>> 2744e11 (m)
</html>