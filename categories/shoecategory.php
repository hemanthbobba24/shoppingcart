<?php
include 'C:\xampp\htdocs\shoeapp\partials\partials.php';
include 'C:\xampp\htdocs\shoeapp\AddProductsPage\connection.php';
include 'C:\xampp\htdocs\shoeapp\\cart\cartfunction.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../DisplayProducts/style.css">
    <title>Explore Shoes</title>
</head>
<body>
    <div class="main">
    <?php
      mycart();
      $myquery = "select * from `products` where category_id = 1";
      $result = mysqli_query($conn,$myquery);

      while($row=mysqli_fetch_assoc($result)){
        // $row=mysqli_fetch_assoc($result);
        $product_id = $row['product_id'];
        $product_name = $row['product_name'];
        $images = $row['images'];
        $category_id = $row['category_id'];
        $price = $row['price'];
        echo "
        
        <div class='items'>
        <h3 class='title'>$product_name</h3>
        <img src='../AddProductsPage/productimages/$images' class='image'>
        <p class='price'>$ $price</p>
        <a href='shoecategory.php?add_to_cart=$product_id' class='submit'>add to cart</a>
    </div>
        ";
      }
    ?>
    </div>
</body>
</html>