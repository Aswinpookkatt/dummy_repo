<?php
if($_POST["uname"]=="root" && $_POST["psw"]=="root")
{
//echo"Login Success" ;
  header("Location: homepage.php");
  exit;
}
else{
  echo"login failed";
}
 ?>
