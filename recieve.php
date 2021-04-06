<?php
$server = "localhost";
$username = "root";
$password = "";
$mysql = mysqli_connect($server, $username, $password);
$sql="SELECT * FROM add_details.details";
$result = $mysql -> query($sql);
$str='';
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $option=1;
    if($option==1){
      $str=$str.'<div id="rightpane1"><span id="contain">Roll No - <span id="bg">'.$row["Roll_no"].'</span> , <span id="bg">'.$row["Name"].'</span> has scored <span id="bg">'.$row["Marks"].'</span> marks.</div>';
      $option=2;
    }
    else{
      $str=$str.'<div id="rightpane2"><span id="contain">Roll No - <span id="bg">'.$row["Roll_no"].'</span> , <span id="bg">'.$row["Name"].'</span> has scored <span id="bg">'.$row["Marks"].'</span> marks.</div>';
      $option=1;
    }
  }
  echo $str;
}
$mysql -> close();
?>
