<?php 
$phone = htmlspecialchars($_GET['phone']);

require('./db.php');


$sel = mysqli_query($m4, "SELECT `name`, `description`, `price`, `image` FROM cases ");

echo "<script> let descript = {}; </script>";
echo "<script> let price = {}; </script>";
echo "<script> let source = {}; </script>";

while($row = mysqli_fetch_assoc($sel)){
$name = "".$row['name'];
$descript = "".$row['description'];
$price = "".$row['price'];
$image = "" .$row['image'];

echo "<script> descript.$name = '$descript'</script>";
echo "<script> price.$name = '$price'</script>";
echo "<script> source.$name = '$image'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php echo $phone; ?></title>
</head>
<body>
    <header>
        <div id="logo"><h2>Damisi's Store</h2> <img src="./img/logo.png" alt=""></div>
        <ul>
            
            <li><a href="./index.php">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="./dashboard/cart"><img src="./img/bag-shopping-solid.svg" alt=""></a></li>
 
        </ul>
    </header>

    <section id="displayPhone">
        <img id="displayImage" alt="<?php echo $phone; ?>">

        <div id="p-content">
            <p id="status">Available</p>
            <u><h2><?php echo $phone; ?> Case</h2></u>
            <h3 id="descript"></h3>
            <div id="rating"><span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star notchecked"></span></div>
             <div id="dealCard">
                 <div id="dealTime">
                     <img src="./img/hotjar-brands.svg" alt="">
                     <p class="deals">Hot Deal</p>
                     <p class="time">Time Left</p>
                 </div>
                  <div id="price-content">
                  <h2 id="p-price">&#8358</h2>
                  <strike><h3 id="l-price">&#8358</h3></strike>
                  </div>
                  <div id="btns">
  
                      <button  id="addToCart">Add to cart</button>
                      <button  >Check Out</button>

                  </div>
             </div>
        </div>
        
        <div  id="similar"></div>
    </section>

    <script>
        console.log(descript);
        console.log(price);
        let addToCart = document.querySelector('#addToCart');

        addToCart.addEventListener('click', (event)=>{
            window.location.href = `./addToCart.php?phone=<?php echo $phone;?>&email=<?php echo $email ?>`; 
        });
    </script>

    <script src="./script.js"></script>


    <script>
    let displayphone = document.querySelector('#displayImage');
    displayphone.src = `./PICTURES/${source.<?php echo $phone; ?>}`;
    let discript = document.querySelector('#descript');
    discript.textContent = descript.<?php echo $phone; ?>;
    let p_price =  document.querySelector('#p-price');
    p_price.textContent +=  price.<?php echo $phone; ?>;
    </script>

    <script></script>
    
    <script>
    let l_price = document.querySelector("#l-price");
    let last_price = parseInt(price.<?php echo $phone; ?>) + Math.floor(Math.random() * 1500);
    l_price.textContent += last_price;
    </script>

</body>
</html>