<?php 
session_start();


if($_POST["exam"] == "1"){
	if($_POST["radioexam_1"] == 1) {

		if($_SESSION["test_count1"] == 0) {

			$_SESSION["correct_exam1"] = 2;
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
}



if($_POST["exam"] == "2"){
	if($_POST["radioexam_2"] == 2) {
		
		if($_SESSION["test_count2"] == 0) {

			$_SESSION["correct_exam1"] = $_SESSION["correct_exam1"]+2;
			header("location: exam_3.php");

		}elseif($_SESSION["test_count2"] == 1){

			$_SESSION["correct_exam1"] = $_SESSION["correct_exam1"]+1;
			header("location: exam_3.php");

		}

	}else{

		if($_SESSION["test_count2"] == 1){
			header("location: exam_3.php");
		}else{

			$_SESSION["test_count2"] = $_SESSION["test_count2"]+1;
			header("location: content_1_2.php");

		}
		
	}
}



if($_POST["exam"] == "3"){
	if($_POST["radioexam_3"] == 3) {
		
		if($_SESSION["test_count3"] == 0) {

			$_SESSION["correct_exam1"] = $_SESSION["correct_exam1"]+2;
			header("location: exam_4.php");

		}elseif($_SESSION["test_count3"] == 1){

			$_SESSION["correct_exam1"] = $_SESSION["correct_exam1"]+1;
			header("location: exam_4.php");

		}

	}else{

		if($_SESSION["test_count3"] == 1){
			header("location: exam_4.php");
		}else{

			$_SESSION["test_count3"] = $_SESSION["test_count3"]+1;
			header("location: content_1_3.php");

		}
		
	}
}


if($_POST["exam"] == "4"){
	if($_POST["radioexam_4"] == 1) {
		
		if($_SESSION["test_count4"] == 0) {

			$_SESSION["correct_exam1"] = $_SESSION["correct_exam1"]+2;
			header("location: exam_5.php");

		}elseif($_SESSION["test_count4"] == 1){

			$_SESSION["correct_exam1"] = $_SESSION["correct_exam1"]+1;
			header("location: exam_5.php");

		}

	}else{

		if($_SESSION["test_count4"] == 1){
			header("location: exam_5.php");
		}else{

			$_SESSION["test_count4"] = $_SESSION["test_count4"]+1;
			header("location: content_1_4.php");

		}
		
	}
}


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