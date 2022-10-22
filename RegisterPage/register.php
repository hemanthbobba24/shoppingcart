<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
  <title>Register</title>
</head>
<body>
  	<div class="loginpage">

          <!--heading-->
            <h2 class="h1tag">REGISTER</h2>
        <form method="post">
  		<!--username-->
  		<div class="username" id="username">
  			<input type="text" id="usertext" name="usertext" placeholder="enter your name" class="textfield" required>
  			</div>

            <!--email-->
  			<div class="email" id="email">
            <input type="email" id="mailtext" name="mailtext" placeholder="abcd@gmail.com" class="textfield" required>
        </div>

          <!-- php starts here -->
          <?php
          if(isset($_POST['submit'])){
            $url='sql108.epizy.com';
            $username='epiz_32784796';
            $password='88LdrGXE0d6w37g';
            $conn=mysqli_connect($url,$username,$password,"epiz_32784796_shoppingcart");
            if(!$conn){
                die('Could not Connect My Sql:' .mysql_error());
            }
            if(isset($_POST['mailtext'])){
            $myname=$_POST["usertext"];
            $email=$_POST["mailtext"];
            $password=$_POST["pass1text"];
            $cpassword=$_POST["pass2text"];

            $myquery = "select * from register where email = '$email'";

            $emailquery = mysqli_query($conn,$myquery);

            $email_count = mysqli_num_rows($emailquery);
            if($password === $cpassword){
            if($email_count > 0){
              echo("<h4 class='myerror'>email is already exists</h4>");
            }
            else{
              $sql = "INSERT INTO `register` (`username`,`email`,`password`)
              VALUES ('$myname','$email','$password')";
              if (mysqli_query($conn, $sql)) {
                header("Location: registersuccess.php");
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
            }
           }
          }
        }
          ?>

          

            <!--password-->
            <div class="password">
            <input type="password" id="pass1text" name="pass1text" placeholder="password" class="textfield" required>
            <!-- <button class="visible" id="pass1vis"><i class="fas fa-eye"></i></button>
            <button class="visible" id="pass1novis"><i class="fas fa-eye-slash"></i></button> -->
        </div>

             <!--password2-->
        <div class="password2">
            <input type="password" id="pass2text" name="pass2text" placeholder="confirm password" class="textfield" required>
            <!-- <button class="confirm" id="pass2vis"><i class="fas fa-eye"></i></button>
            <button class="confirm" id="pass2novis"> <i class="fas fa-eye-slash"></i></button> -->
        </div>
        <?php 
          if(isset($_POST['pass1text']) && isset($_POST['pass2text'])){
            $pass1 = $_POST['pass1text'];
            $pass2 = $_POST['pass2text'];
            if($pass1 != $pass2){
              echo("<h4 class='myerror'>passwords are not same</h4>");
            }
          }
        ?>
        <button type="submit" name="submit" class="btn" id="btn">register</button>
        <div class="login">
        <p>no account? </p>
        <a href="/shoeapp/LoginPage/login.php" target=_blank>login</a>
        </div>
  </form>
</div>
</body>
</html>
