<?php
$server = "localhost";
$username = "root";
$password = "";
$mysql = mysqli_connect($server, $username, $password);
if ($result = $mysql -> query("SELECT * FROM add_details.details")) {
  $name='<script type="text/javascript">var nam=[';
  $roll='<script type="text/javascript">var roll=[';
  $marks='<script type="text/javascript">var marks=[';
  while($row = $result->fetch_assoc()) {
    $name=$name.'"'.$row['Name'].'",';
    $roll=$roll.'"'.$row['Roll_no'].'",';
    $marks=$marks.'"'.$row['Marks'].'",';
  }
  echo $name.'];</script>';
  echo $roll.'];</script>';
  echo $marks.'];</script>';
}
if(isset($_POST['button1'])){



  $name = $_POST['box2'];
  $roll = $_POST['box1'];
  $marks = $_POST['box3'];

  $mysql -> query("INSERT INTO add_details.details VALUES ('$name','$roll','$marks');");
}
$mysql -> close();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Details</title>
  <link rel="stylesheet" href="temp.css">
  <script type="text/javascript" src="jquery-3.6.0.js"></script>
</head>
<body>
  <div id="left">
    <form action="index.php"method="post">
      <h1><b>Add Student Data</b></h1>
      <span id='leftpane'>Roll No.</span>
      <input id="box1" name="box1" type="text"><br><br><br><br>
      <span id='leftpane'>Name</span>
      <input id="box2" name="box2" type="text"><br><br><br><br>
      <span id='leftpane'>Marks</span>
      <input id="box3" name="box3" type="number"><br><br><br><br>
      <input id="button" type="submit" name="button1" value="Add Detail" />
    </form>
  </div>
  <div id="right"></div>
  <script type="text/javascript">
  console.log('at start');
  var option=1;
  for (var i = 0; i < marks.length; i++) {
    if(option==1){
      $("#right").append('<div id="rightpane1"><span id="contain">Roll No - <span id="bg">'+roll[i]+'</span> , <span id="bg">'+nam[i]+'</span> has scored <span id="bg">'+marks[i]+'</span> marks.</div>');
      option=2;
    }
    else{
      $("#right").append('<div id="rightpane2"><span id="contain">Roll No - <span id="bg">'+roll[i]+'</span> , <span id="bg">'+nam[i]+'</span> has scored <span id="bg">'+marks[i]+'</span> marks.</div>');
      option=1;
    }
  }
  $('#button').click(function(e){
    console.log(3);
    if($(box1).val()==''||$(box2).val()==''||$(box3).val()==''){
      console.log(2);
      e.preventDefault();
      alert('All Values Not Entered');
    }
  });
  </script>
</body>
</html>
