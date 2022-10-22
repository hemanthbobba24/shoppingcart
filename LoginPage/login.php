<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>login</title>
</head>
<body>
  <div class="login-page" id="login-page">
    <h1 id="heading">
      LOGIN
    </h1>
  <form method="post">
    <input type="email" id="email" name="email" class="text" placeholder="MailID" required>
    <input type="password" id="pass" name="password" class="text" placeholder="password" required>
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

  if(isset($_POST['email']) && $_POST['password']){
     $email=$_POST["email"];
     $password=$_POST["password"];

     $mycomm = "select * from register where email = '$email'";

     $myquery = mysqli_query($conn,$mycomm);

     $email_count = mysqli_num_rows($myquery);

     if($email_count){
      $mypassfetch = mysqli_fetch_assoc($myquery);
     // echo implode(" ",$mypassfetch);
     $mypass = $mypassfetch['password'];
      //  echo $mypass;
      $_SESSION['username'] = $mypassfetch['username'];
      $_SESSION['emailid'] = $mypassfetch['email'];
      $_SESSION['userid']  = $mypassfetch['ID'];
         if($mypass != $password){
           echo("<h4 class='error'>invalid credentials</h4>");
         }
         else{
          header("Location: /shoeapp/HomePage/home.php");
       }
      }
      else{
        echo("<h4 class='error'>invalid credentials</h4>");
      }
  }
}
?>
    
    <button type="submit" name="submit" class="btn">LOGIN</button>
    <div class="register">
        <p>no account? </p>
      <a href="/shoeapp/RegisterPage/register.php" target=_blank> register</a>
    </div>
  </form>
  </div>
</body>
</html>