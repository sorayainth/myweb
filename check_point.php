<?php 
session_start();
if ($_POST["RadioGroup1"] == 1) {

	$_SESSION["exam_1"] = 1;

	header("location: exam_2.php");
	
}
session_write_close();

?>