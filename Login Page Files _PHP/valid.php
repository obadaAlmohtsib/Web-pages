<?php

$conn=mysqli_connect('localhost','ahmad','ahmad','hospital');

$name=$_POST['name'];
$password=$_POST['password'];

$result=mysqli_query($conn,"select * from users where name='$name' and password='$password'");

$num=mysqli_num_rows($result);

if($num==0) 
{
echo "Invalid information";}

else
echo "Welcome to our page $name";
?>