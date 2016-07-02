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





?>
