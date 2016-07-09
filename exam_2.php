<?php 
session_start();
$_SESSION["test_count2"];
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
<table cellspacing="0" cellpadding="0" class="table">
  <col width="87" span="12" />
  <tr>
    <td align="right" width="87">&nbsp;</td>
    <td colspan="10" width="870"> 2. กัมมันตภาพรังสี  หมายถึง อะไร ?</td>
    <td width="87"></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="10"><input type="radio" name="radioexam_2" value="1" id="radioexam_2_1" />
    ก.      รังสีที่แผ่ออกมาจากธาตุเมื่อโดนแสงแดด                 </td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="10"><input type="radio" name="radioexam_2" value="2" id="radioexam_2_2" />
    ข.      รังสีที่แผ่ออกมาจากธาตุได้เองอย่างต่อเนื่อง                  </td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="10"><input type="radio" name="radioexam_2" value="3" id="radioexam_2_3" />
    ค.     รังสีที่แผ่ออกมาจากธาตุเมื่อแตกตัวเป็นประจุไฟฟ้า                       </td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="10"><input type="radio" name="radioexam_2" value="4" id="radioexam_2_4" />
    ง.     รังสีที่เกิดจากการเปลี่ยนวงโคจรของอิเล็กตรอน               </td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="10">&nbsp;</td>
    <input type="hidden" name="exam" value="2">
    <td><input type="submit" name="submit" id="button" value="Next"  class="btn btn-primary"/></td>
  </tr>
</table>
</form>
</body>
</html>