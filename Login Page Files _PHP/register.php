<?php

$conn=mysqli_connect('localhost','ahmad','ahmad','hospital');

$name=$_POST['name'];
$password=$_POST['password'];

$result=mysqli_query($conn,"select * from users where name='$name'");

$num=mysqli_num_rows($result);

if($num==0) 
{mysqli_query($conn,"insert into users values('$name','$password')");
echo "new user created";}

else
echo "User name already taken ! please select another one";
?>