<?php
$url='sql108.epizy.com';
$username='epiz_32784796';
$password='88LdrGXE0d6w37g';
$conn=mysqli_connect($url,$username,$password,"epiz_32784796_shoppingcart");
if(!$conn){
    die('Could not Connect My Sql:' .mysql_error());
}
?>