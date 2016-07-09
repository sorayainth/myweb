<?php 
session_start();
// $_SESSION["correct_exam1"] = 0;
// session_write_close();
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
  <table cellspacing="0" cellpadding="0" class="table">
    <col width="87" span="12" />
    <tr>
      <td width="87"></td>
      <td colspan="10" width="870">7.   ข้อใดคือคุณสมบัติของรังสี แกมมา ?</td>
      <td width="87"></td>
    </tr>
    <tr>
      <td></td>
      <td colspan="10"><input type="radio" name="radioexam_7" value="1" id="radioexam_7_1" />
      ก.      เป็นนิวเคลียสของธาตุฮีเลียม    มีประจุไฟฟ้า +2  มีมวล 4u  มีอำนาจทะลุผ่านต่ำ  </td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td colspan="10"><input type="radio" name="radioexam_7" value="2" id="radioexam_7_2" />
      ข.      อนุภาคที่มีประจุ -1    มีมวลเท่ากับมวลอิเล็กตรอน มีอำนาจทะลุผ่านปานกลาง </td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td colspan="10"><input type="radio" name="radioexam_7" value="3" id="radioexam_7_3" />
      ค.      เป็นคลื่นแม่เหล็กไฟฟ้า    มีอำนาจทะลุผ่านมากที่สุด                                                                      </td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td colspan="10"><input type="radio" name="radioexam_7" value="4" id="radioexam_7_4" />
      ง.      เป็นคลื่นแม่เหล็กไฟฟ้า    มีความถี่ต่ำมาก    มีอำนาจทะลุผ่านต่ำที่สุด</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td colspan="10">&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Next"  class="btn btn-primary"/></td>
    </tr>
  </table>
</form>
</body>
</html>