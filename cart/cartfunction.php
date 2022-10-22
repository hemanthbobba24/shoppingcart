<?php
include 'C:\xampp\htdocs\shoeapp\\AddProductsPage\connection.php';
function mycart(){
    global $conn;
    if(isset($_GET['add_to_cart'])){
        $useremail = $_SESSION['emailid'];
        $myquery2 = "select * from `register` where email = '$useremail'";
        $result2 = mysqli_query($conn,$myquery2);
        $row2 = mysqli_fetch_assoc($result2);
        $ID = $row2['ID'];
        $get_product_id = $_GET['add_to_cart'];
        $query = "select * from `cart` where user_id = $ID and product_id = $get_product_id";
        $myresult_query = mysqli_query($conn,$query);
        $num_of_rows = mysqli_num_rows($myresult_query);
        if($num_of_rows>0){
          echo "<script>alert('Item is already added to the cart')</script>";
        //   echo "<script>window.open('displayproducts.php','_self')</script>";
        }else{
          $insert_query = "insert into `cart` (user_id,product_id,quantity) VALUES ($ID,$get_product_id,0)";
          $result3 = mysqli_query($conn,$insert_query);
          echo "<script>alert('successfully added')</script>";
        //   echo "<script>window.open('displayproducts.php','_self')</script>";
        }
      }
}
?>