<?php
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration success</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital@1&display=swap');
     body{
        display:flex;
        height:100vh;
        justify-content:center;
        align-items:center;
        margin:0;
        background-color: #cc0404;
     }
    .registrationsuccess{
        display:flex;
        align-items:center;
        flex-direction:column;
        background-color:white;
        padding:20px;
        border-radius:20px;
        box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.7);
    }
    img{
        height:50px;
        width:50px;
    }
     h2{
        font-family: 'Noto Sans Mono', monospace;
        color:black;
     }
     a{
        text-decoration:none;
        color:black;
        font-family: 'Noto Sans Mono', monospace;
	    padding: 5px 30px;
	    font-size: 25px;
	    border-radius: 5px;
	    cursor: pointer;
	    background-color: #0bde83;
	    color: white;
	    font-family: 'Bebas Neue', cursive;
	    border: 0;
     }
     a:hover{
	background-color:  #069e5d;
}
   </style>
</head>
<body>
    <div class="registrationsuccess">
    <img src="images\tickmark.png">
    <h2 class="success">
        Your Registration is Successfull!
    </h2>
    <a href="\shoeapp\LoginPage\login.php">Login</a>
    </div>
</body>
</html>