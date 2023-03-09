<?php 

$host="localhost";
$user="root";
$password="";
$db="Carsale";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['Username'])){
    
    $uname=$_POST['Username'];
    $password=$_POST['Password'];
    
    $sql="select * from login where user='".$uname."'AND pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        header("Location: index.html");
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
<title>Login Page</title>
<link rel="stylesheet" href="Login.css">
</head>
<body>
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#" class="logo">
            <center>
            <span>Remo</span>cars</a></center>
    </header>

<div class="wrapper">
    <div class ="header">
        <div class="top"> 
          <form method="POST" action="#">
            <div class="form">
                <div class="input_field">
                    <input type="text" placeholder="Username" class="input">
                </div>
                <div class="input_field">
                    <input type="password" placeholder="Password" class="input">
                </div>
                <div class="btn">
                <a href="A:\New folder (2)\index.html">Log In</a>
            </div>
         </form> 
            </div>
                <div class="or">
                <div class="line"></div>
                <p>OR</p>
                <div class="line"></div>
            </div>
            <div class="diff">
                <div class="allign">
                </div>
                <div class="forgot"><b>
                    <a href="#">Forgot password?</a> </b>
                </div>
            </div>
        </div>

        <div class="signup">
            <p>Don't have an account? <a href="A:\New folder (2)\signup.html"><b>Sign up</b></a>
        </div>


</body>
</html>
