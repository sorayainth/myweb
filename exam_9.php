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
      <td colspan="10" width="870">9. เลขมวล  หมายถึง อะไร ?</td>
      <td width="87"></td>
    </tr>
    <tr>
      <td></td>
      <td colspan="10"><input type="radio" name="radioexam_9" value="1" id="radioexam_9_1" />
      ก.      ผลรวมของจำนวนโปรตอนกับอิเล็กตรอนในนิวเคลียส </td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td colspan="10"><input type="radio" name="radioexam_9" value="2" id="radioexam_9_2" />
      ข.      ผลรวมของจำนวนโปรตอนกับนิวตรอน ในนิวเคลียส                        </td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td colspan="10"><input type="radio" name="radioexam_9" value="3" id="radioexam_9_3" />
      ค.      จำนวนโปรตอนในนิวเคลียส</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td colspan="10"><input type="radio" name="radioexam_9" value="4" id="radioexam_9_4" />
      ง.      จำนวนอิเล็กตรอนในนิวเคลียส</td>
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