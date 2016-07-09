<?php 
session_start();
if ($_SESSION["test_count1"] == 1) {
	header("location: exam_1.php");
	exit();
}
session_write_close();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
	 <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="col-lg-3">
</div>
<div class="col-lg-6" align="center">
<p class="lead">
รังสีแอลฟา
รังสีที่ประกอบด้วยอนุภาคแอลฟาซึ่งเป็นอนุภาคที่มีมวล 4 amu มีประจุ +2 อนุภาคชนิดนี้จะถูกกั้นไว้ด้วยแผ่นกระดาษหรือเพียงแค่ผิวหนังชั้นนอกของคนเราเท่านั้น

การสลายตัวให้รังสีแอลฟา

</p>
<div align="center">
<a href="content_1_3.php" class="btn btn-primary">Next</a>
</div>
</div>
<div class="col-lg-3">
</div>
</body>
</html>