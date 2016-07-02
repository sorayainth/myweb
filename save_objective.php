<?php
session_start();
$a = 0;
$b = 0;
$c = 0;
//  l1
if ($_POST["l1"] == 1) {
  $a=$a+1;
}elseif ($_POST["l1"] == 2) {
  $b=$b+1;
}elseif ($_POST["l1"] == 3) {
  $c=$c+1;
}
// l2
if ($_POST["l2"] == 1) {
  $a=$a+1;
}elseif ($_POST["l2"] == 2) {
  $b=$b+1;
}elseif ($_POST["l2"] == 3) {
  $c=$c+1;
}

// l2
if ($_POST["l3"] == 1) {
  $a=$a+1;
}elseif ($_POST["l3"] == 2) {
  $b=$b+1;
}elseif ($_POST["l3"] == 3) {
  $c=$c+1;
}
// l2
if ($_POST["l4"] == 1) {
  $a=$a+1;
}elseif ($_POST["l4"] == 2) {
  $b=$b+1;
}elseif ($_POST["l4"] == 3) {
  $c=$c+1;
}
// l2
if ($_POST["l5"] == 1) {
  $a=$a+1;
}elseif ($_POST["l5"] == 2) {
  $b=$b+1;
}elseif ($_POST["l5"] == 3) {
  $c=$c+1;
}
// l2
if ($_POST["l6"] == 1) {
  $a=$a+1;
}elseif ($_POST["l6"] == 2) {
  $b=$b+1;
}elseif ($_POST["l6"] == 3) {
  $c=$c+1;
}
// l2
if ($_POST["l7"] == 1) {
  $a=$a+1;
}elseif ($_POST["l7"] == 2) {
  $b=$b+1;
}elseif ($_POST["l7"] == 3) {
  $c=$c+1;
}
// l2
if ($_POST["l8"] == 1) {
  $a=$a+1;
}elseif ($_POST["l8"] == 2) {
  $b=$b+1;
}elseif ($_POST["l8"] == 3) {
  $c=$c+1;
}
// l2
if ($_POST["l9"] == 1) {
  $a=$a+1;
}elseif ($_POST["l9"] == 2) {
  $b=$b+1;
}elseif ($_POST["l9"] == 3) {
  $c=$c+1;
}
// l2
if ($_POST["l10"] == 1) {
  $a=$a+1;
}elseif ($_POST["l10"] == 2) {
  $b=$b+1;
}elseif ($_POST["l10"] == 3) {
  $c=$c+1;
}
// l2
if ($_POST["l11"] == 1) {
  $a=$a+1;
}elseif ($_POST["l11"] == 2) {
  $b=$b+1;
}elseif ($_POST["l11"] == 3) {
  $c=$c+1;
}
// l2
if ($_POST["l12"] == 1) {
  $a=$a+1;
}elseif ($_POST["l12"] == 2) {
  $b=$b+1;
}elseif ($_POST["l12"] == 3) {
  $c=$c+1;
}
// l2
if ($_POST["l13"] == 1) {
  $a=$a+1;
}elseif ($_POST["l13"] == 2) {
  $b=$b+1;
}elseif ($_POST["l13"] == 3) {
  $c=$c+1;
}
// l2
if ($_POST["l14"] == 1) {
  $a=$a+1;
}elseif ($_POST["l14"] == 2) {
  $b=$b+1;
}elseif ($_POST["l14"] == 3) {
  $c=$c+1;
}

// l2
if ($_POST["l15"] == 1) {
  $a=$a+1;
}elseif ($_POST["l15"] == 2) {
  $b=$b+1;
}elseif ($_POST["l15"] == 3) {
  $c=$c+1;
}

// l2
if ($_POST["l16"] == 1) {
  $a=$a+1;
}elseif ($_POST["l16"] == 2) {
  $b=$b+1;
}elseif ($_POST["l16"] == 3) {
  $c=$c+1;
}


if($a>$b){
  	if($a>$c){
  		$_SESSION[l_style]==1;
  		header("Location: learning_style1.php");
  		exit;
  	}else{
  		$_SESSION[l_style]==3;
  		header("Location: learning_style3.php");
  		exit;
  	}
}elseif($b>$c){
		$_SESSION[l_style]==2;
		header("Location: learning_style2.php");
		exit;
}else{
		$_SESSION[l_style]==3;
		header("Location: learning_style3.php");
		exit;
}
session_write_close();



?>
