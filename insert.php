<?php
$server = "localhost";
$username = "root";
$password = "";
$mysql = mysqli_connect($server, $username, $password);
$name = $_REQUEST['box2'];
$roll = $_REQUEST['box1'];
$marks = $_REQUEST['box3'];
echo $name;
$mysql -> query("INSERT INTO add_details.details VALUES ('$name','$roll','$marks');");
$mysql -> close();
?>
