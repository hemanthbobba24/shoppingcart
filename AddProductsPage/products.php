<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add products</title>
    <style>
        *{
            margin:0px;
            box-sizing:border-box;
        }
        body{
            height:100vh;
            display:flex;
            align-items:center;
            flex-direction:column;
            justify-content:space-evenly;
        }
        .upload{
            background-color:#f2f3f4;
            border-radius:5px;
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:space-evenly;
            padding:15px;
            height:50vh;
            width:30vw;
        }
        input{
            width:100%;
            padding:8px;
            margin:7px 0px;
        }
        h3{
            color:#808080;
        }
        select{
            width:100%;
            padding:8px;
        }
        .btn{
            text-align:center;
            width:100%;
            padding:5px 0px;
            color:white;
            background-color:black;
            cursor:pointer;
            border-radius:3px;
        }
        .success{
            color:green;
        }
    </style>
</head>
<body>
   <?php if(isset($_POST['submit'])){
  $productname = $_POST['productname'];
  $category=$_POST['categories'];
  $price = $_POST['price'];
  $myimage = $_FILES['myimage']['name'];

//   to access the image
   $tmpimage = $_FILES['myimage']['tmp_name'];


   if($productname=='' || $category=='' || $price=='' || $myimage==''){
      echo "<h4>Please fill all the details</h4>";
      exit();
   }else{
      move_uploaded_file($tmpimage,"./productimages/$myimage");

      $insert_product="insert into `products`(product_name,category_id,price,images)
      VALUES ('$productname','$category','$price','$myimage')";
      $myresult = mysqli_query($conn, $insert_product);
      if($myresult){
        echo "<h2 class='success'>successfully inserted $productname!</h2>";
        header("Location:products.php");
      }
      else{
        echo "error";
      }
   }
} ?>
       <div class="upload">
        <h3>Upload Products</h3>
        <form method="post" enctype="multipart/form-data">
           <input type="text" placeholder="product name" name="productname" required>
           <select name="categories">
            <option value="">select a category</option>
            <?php 
            $select_query="select * from `categories`";
            $result = mysqli_query($conn,$select_query);
            while($row=mysqli_fetch_assoc($result)){
                $category_name=$row['category_name'];
                $category_id=$row['category_id'];
                echo "<option value='$category_id'>$category_name</option>";
            }
            ?>
           </select>
           <input type="text" placeholder="price" name="price" required="required">
           <input type="file" name="myimage" required="required">
           <input type="submit" name="submit" value="UPLOAD" class="btn">
        </form>
    </div>
</body>
</html>