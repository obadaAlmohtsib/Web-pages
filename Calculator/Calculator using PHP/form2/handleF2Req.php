
<?php

function addn($x, $y)
{
	$r=$x+$y;
echo "Result $x+$y = $r";
}

function subn($x, $y)
{
	$r=$x-$y;
echo "Result $x-$y = $r";
}

$num1=$_GET["n1"];
$num2=$_GET["n2"];


if (($_GET["op"])=="+")
addn($num1,$num2);

elseif (($_GET["op"])=="-")
subn($num1,$num2);

elseif (($_GET["op"])=="*")
{$r=$num1*$num2;
echo "Result $num1*$num2 = $r";}

else 
{$r=$num1/$num2;
echo "Result $num1/$num2 = $r";}
?>