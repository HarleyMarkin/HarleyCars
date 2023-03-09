<?php
$name=$_POST['Name'];
$email=$_POST['Email'];
$address=$_POST['Address'];
$pnumber=$_POST['Pnumber'];
$password=$_POST['Password'];

$conn = new mysqli('localhost','root','','carsale');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
$sql="INSERT INTO signup VALUES($name,$email,$address,$pnumber,$password)";
echo "Registration Successful";
}

?>