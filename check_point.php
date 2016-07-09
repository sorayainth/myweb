<?php 
session_start();


if($_POST["radioexam_1"] == 1) {

	if($_SESSION["test_count1"] == 0) {

		$_SESSION["correct_exam1"] = 1;
		header("location: exam_2.php");

	}elseif($_SESSION["test_count1"] == 1){

		$_SESSION["correct_exam1"] = 1;
		header("location: exam_2.php");

	}
	
}else{

	if($_SESSION["test_count1"] == 1){
		header("location: exam_2.php");
	}else{

		$_SESSION["test_count1"] = $_SESSION["test_count1"]+1;
		header("location: content_1_1.php");

	}
	
}




// if($_POST["radioexam_2"] == 2) {
	
// 	$_SESSION["correct_exam1"] = $_SESSION["correct_exam1"]+1;

// 	header("location: exam_3.php");
// }



// if($_POST["radioexam_3"] == 3) {
	
// 	$_SESSION["correct_exam1"] = $_SESSION["correct_exam1"]+1;

// 	header("location: exam_4.php");





// }
// if($_POST["radioexam_4"] == 1) {
	
// 	$_SESSION["correct_exam1"] = $_SESSION["correct_exam1"]+1;

// 	header("location: exam_5.php");





// }
// if($_POST["radioexam_5"] == 2) {
	
// 	$_SESSION["correct_exam1"] = $_SESSION["correct_exam1"]+1;

// 	header("location: exam_6.php");





// }
// if($_POST["radioexam_6"] == 3) {
	
// 	$_SESSION["correct_exam1"] = $_SESSION["correct_exam1"]+1;

// 	header("location: exam_7.php");




// }
// if($_POST["radioexam_7"] == 1) {
	
// 	$_SESSION["correct_exam1"] = $_SESSION["correct_exam1"]+1;

// 	header("location: exam_8.php");





// }
// if($_POST["radioexam_8"] == 2) {
	
// 	$_SESSION["correct_exam1"] = $_SESSION["correct_exam1"]+1;

// 	header("location: exam_9.php");




// }
// if($_POST["radioexam_9"] == 3) {
	
// 	$_SESSION["correct_exam1"] = $_SESSION["correct_exam1"]+1;

// 	header("location: exam_10.php");




// }
// if($_POST["radioexam_10"] == 1) {
	
// 	//$_SESSION["correct_exam1"] = 1;

// 	//header("location: exam_non.php");

// 	$_SESSION["correct_exam1"] = $_SESSION["correct_exam1"]+1;

// 	echo "<h1 align='center'>Your Score</h1>";
// 	echo "<h1 align='center'>".$_SESSION["correct_exam1"]."</h1>";

// }


session_write_close();

?>