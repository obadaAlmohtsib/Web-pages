
<?php
$num1=$_GET["n1"];
$num2=$_GET["n2"];


if (isset($_GET["add"]))
{$r=$num1+$num2;
echo "Result $num1+$num2 = $r";}

elseif (isset($_GET["sub"]))
{$r=$num1-$num2;
echo "Result $num1-$num2 = $r";}

elseif (isset($_GET["mul"]))
{$r=$num1*$num2;
echo "Result $num1*$num2 = $r";}

else 
{$r=$num1/$num2;
echo "Result $num1/$num2 = $r";}
?>