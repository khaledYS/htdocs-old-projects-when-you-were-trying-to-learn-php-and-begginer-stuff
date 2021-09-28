<?php

$first = $_POST['d1'];
$second = $_POST['s2'];
$third = $_POST['a3'];
$res = "";

if ($seccond = "+") {
	$res = $first + $third ;
	echo $res ;
}elseif ($seccond = "x") {
	$res = $first * $third ;
	echo $res ;
}elseif ($seccond = "*") {
	$res = $first * $third ;
	echo $res ;
}elseif ($seccond = "%") {
	$res = $first / $third ;
	echo $res ;
}elseif ($seccond = "÷") {
	$res = $first % $third ;
	echo $res ;
}
else{
	echo "nope itsnt work" ;
}