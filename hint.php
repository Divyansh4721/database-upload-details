<?php
$server = "localhost";
$username = "root";
$password = "";
$mysql = mysqli_connect($server, $username, $password);
$q = $_REQUEST["q"];
$hint='';
$resultroll=$mysql->query("SELECT `Roll_no` FROM add_details.details");
if ($resultroll->num_rows > 0) {
  while($row = $resultroll->fetch_assoc()) {
    if($row['Roll_no']==$q){
      $hint='Roll Number Entered Already Exists.';
      break;
    }
  }
}
echo $hint;
?>
