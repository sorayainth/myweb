<?php 
session_start();

if ($_SESSION["test_count2"] <= 0) {
	header("location: exam_2.php");
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
รังสีเบต้า
รังสีที่ประกอบด้วยอนุภาคอิเลคตรอนหรือโพสิตรอน รังสีนี้มีคุณสมบัติทะลุทะลวงตัวกลางได้ดีกว่ารังสีแอลฟา สามารถทะลุผ่านน้ำที่ลึกประมาณ 1 นิ้วหรือประมาณความหนาของผิวเนื้อที่ฝ่ามือได้ รังสีเบต้าจะถูกกั้นได้โดยใช้แผ่นอะลูมิเนียมชนิดบาง
</p>
<div align="center">
<a href="exam_1.php" class="btn btn-primary">Next</a>
</div>
</div>
<div class="col-lg-3">
</div>
</body>
</html>