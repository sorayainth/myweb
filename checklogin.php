<?php
session_start();
$st_id = $_POST["id"];
$st_name = $_POST["name"];

  $_SESSION['id'] = $st_id;
  $_SESSION['name'] = $st_name;

  $conn = mysql_connect("localhost", "root", "root");
if (!$conn) {
 //echo "Can't Reader Database";
}else{
 //echo "OK</br>";
}

mysql_select_db("DB_learning");
$result = mysql_query("SELECT * FROM data_student where ID = '$st_id' and Name = '$st_name'");
while($data = mysql_fetch_array($result))
  {

  if($data["Status"] == 1) {
//   echo "Wellcome to Programming Website";

      if($data["Point"]==0){
         header("Location: objective_subject.php");
        exit;
      }elseif ($data["Point"]==1) {
        header("Location: objective_lesson2.php");
        exit;
      }

  }

  if($data["Status"] == 2) {
    echo "No Permission, You have to register";
  }

  if($data["Status"] == 3) {
      echo "No Permission, because you dropped";
  }

}

?>
