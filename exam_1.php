<?php 
session_start();
$_SESSION["correct_exam1"] = 0;
$_SESSION["test_count1"];
session_write_close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<form id="form1" name="form1" method="post" action="check_point.php">
<table align="center" cellpadding="0" cellspacing="0" class="table">
  <col width="87" span="12" />
  <tr>
    <td align="right" width="87">&nbsp;</td>
    <td colspan="11" width="957">1. นักวิทยาศาสตร์ที่ค้นพบว่า   มีรังสีชนิดหนึ่งที่ปล่อยออกมาจากธาตุยูเรเนียมตลอดเวลาและถูกระบุว่าเป็นคนที่ค้นพบกัมมันตภาพรังสีคนแรก   มีชื่อว่าอย่างไร ? </td>
  </tr>
  <tr>
    <td></td>
    <td colspan="10"> <input type="radio" name="radioexam_1" id="radioexam_1"  value="1"/>
    ก.    มารี   กูรี                 </td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="10"><input type="radio" name="radioexam_1" id="radioexam_1" value="2"/>
    ข.      ปีแอร์ กูรี               </td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="10"><input type="radio" name="radioexam_1" id="radioexam_1" value="3"/>
    ค.     แบ็กเกอเรล            </td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="10"><input type="radio" name="radioexam_1"  id="radioexam_1" value="4"/>
    ง.     แชดวิก                  </td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="10">&nbsp;</td>
    <input type="hidden" name="exam" value="1">
    <td><input type="submit" name="submit" id="button" value="Next"  class="btn btn-primary"/></td>
  </tr>
</table>
</form>
</body>
</html>