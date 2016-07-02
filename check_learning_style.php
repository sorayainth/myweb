<?php
session_start();
$st_id = $_POST["id"];
$st_name = $_POST["name"];

  $_SESSION['id'] = $st_id;
  $_SESSION['name'] = $st_name;

include('db.php');
$result = mysql_query("SELECT * FROM data_student where ID = '$st_id' and Name = '$st_name'");
while($data = mysql_fetch_array($result))
  {

  if($data["I_style"] == 1) {
      header("Location: content_1.php");

  }

  if($data["I_style"] == 2) {
    header("Location: content_2.php");
  }

  if($data["I_style"] == 3) {
    header("Location: content_3.php");
  }

}

?>
