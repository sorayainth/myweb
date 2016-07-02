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
