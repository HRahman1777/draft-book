<?php 

$servername = "127.0.0.1:3307";
$db_username = "root";
$password = "";
$dbname = "test";


$conn = new mysqli($servername,
$db_username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


  $my_query = "SELECT id, air_circulation FROM ac_technical_spec_offline_tbl";
  $result = mysqli_query($conn, $my_query) or die("Query Failed");

    while ($row = mysqli_fetch_array($result)) {

      $temp_q = $row['air_circulation'];
      echo "<br>" . $row['id'] . " - " . $temp_q . "<br>";

      if(strpos($temp_q, 'm³/hr') !== false){
        $temp = str_replace("m³/hr","mÂ³/hr",$temp_q);
        $id = $row['id'];
        $sub_q ="UPDATE ac_technical_spec_offline_tbl SET air_circulation='$temp' WHERE id='$id'";
        $sub_q_result = mysqli_query($conn, $sub_q) or die("Query Failed 2222222");
      }

      if(strpos($temp_q, 'm3/hr') !== false){
        $temp = str_replace("m3/hr","mÂ³/hr",$temp_q);
        $id = $row['id'];
        $sub_q ="UPDATE ac_technical_spec_offline_tbl SET air_circulation='$temp' WHERE id='$id'";
        $sub_q_result = mysqli_query($conn, $sub_q) or die("Query Failed 3333333");
      }
    }

  echo "done";

?>
