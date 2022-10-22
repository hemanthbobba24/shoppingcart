<?php
include 'C:\xampp\htdocs\shoeapp\partials\partials.php';
include 'C:\xampp\htdocs\shoeapp\\AddProductsPage\connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cart.css">
    <title>cart details</title>
</head>
<body>
<div class="main">
    <h1>CART</h1>
<table>
  <tr>
    <th>product name</th>
    <th>image</th>
    <th>price</th>
    <th>remove</th>
  </tr>
<?php
      $user_id = $_SESSION['userid'];
      $totalprice = 0;
      $myquery = "select * from `cart` where user_id = $user_id";
      $result = mysqli_query($conn,$myquery);
      while($row=mysqli_fetch_assoc($result)){
        $product_id = $row['product_id'];
        $myquery2 = "select * from `products` where product_id = $product_id";
        $result2 = mysqli_query($conn,$myquery2);
        while($row2 = mysqli_fetch_assoc($result2)){
            $product_name = $row2['product_name'];
            $product_image = $row2['images'];
            $product_price1 = $row2['price'];
            $product_price = array($row2['price']);
            $product_values = array_sum($product_price);
            $totalprice += $product_values;
            echo "
            <tr>
            <td>$product_name</td>
            <td><img src='../AddProductsPage/productimages/$product_image' alt=''></td>
            <td>$product_price1</td>
            <td><a href='cartdetails.php?product_id=$product_id' class='remove'>remove</a></td>
          </tr>
            ";
        }
}
// if(isset($_GET['update_product_id']) && isset($_GET['quantity'])){
//   $quantity = $_GET['quantity'];
//   $update_product_id = $_GET['update_product_id'];
//   $myquery4 = "update `cart` set quantity = $quantity 
//   where user_id = $user_id and product_id = $update_product_id";
//   $runquery1 = mysqli_query($conn,$myquery4);
//   echo "<script>window.open('cartdetails.php','_self')</script>";
// }

if(isset($_GET['product_id'])){
  $product_id = $_GET['product_id'];
  $myquery3 = "delete from `cart` where user_id = $user_id and product_id = $product_id";
  $runquery = mysqli_query($conn,$myquery3);
  echo "<script>window.open('cartdetails.php','_self')</script>";
}
?>
</table>
<?php echo "<div class='totalprice'>total cart price is: $totalprice</div>";?>
</div>
</body>
</html>