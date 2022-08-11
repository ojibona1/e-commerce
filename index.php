<?php 
require('./db.php');


$sel = mysqli_query($m4, "SELECT `image` FROM cases ");

echo "<script> let cased = []; </script>";

while($row = mysqli_fetch_assoc($sel)){
$image = "" .$row['image'];

echo "<script> cased.push('$image') </script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Damisi Store</title>

    <style>

    </style>
</head>
<body>
    <header>
        <div id="logo"><h2>Damisi's Store</h2> <img src="./img/logo.png" alt=""></div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="./getstarted.html">Get Started</a></li>
        </ul>
    </header>

    <div id="search-bar">
        <div id="sbar"><input type="text" placeholder="Search"><button type="submit"><img src="./img/magnifying-glass-solid.svg" alt=""></button></div>
    </div>
    <section id="hotdeals">
        <h1>Hot Deals</h1> <img src="./img/hotjar-brands.svg" alt="">
        <div id="promo">
            <div id="p-phone">
            </div>
        </div>
    </section>


    <script>
let phones = document.querySelector('#p-phone');
    console.log(cased);


  cased.forEach((item)=>{
    let cases = document.createElement('div');
    cases.id = 'cases';
    cases.onclick = () => {
        item = item.split('.')[0];
         window.location.href = `./phonecase.php?phone=${item}`; 
        };
    cases.setAttribute('style', "color:black;border-radius:8px;width:100%;margin-right:10px;");
    phones.appendChild(cases);

    let image = document.createElement('img');
    image.id = 'p-phoneimg';
    image.src = `./PICTURES/${item}`;
    image.setAttribute('style', "height:290px; width:250px; border-radius:8px;cursor:pointer;");


    cases.appendChild(image);

  });

    </script>
    
        
</body>
</html>