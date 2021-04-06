var xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET", "recieve.php", true);
xmlhttp.send();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    document.getElementById("right").innerHTML = this.responseText;
  }
};
$('#button').click(function(e){
  if($(box1).val()==''){
    e.preventDefault();
    alert('Roll Number Not Entered');
  }
  else if($(box2).val()==''){
    e.preventDefault();
    alert('Name Not Entered');
  }
  else if($(box3).val()==''){
    e.preventDefault();
    alert('Marks Not Entered');
  }
  else{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);
        if(this.responseText!=''){
          e.preventDefault();
          alert("Roll Number Already Present");
        }
        else {
          xmlhttp.open("GET", "insert.php?box1=" + $(box1).val()+'&box2=' + $(box2).val()+'&box3=' + $(box3).val(), true);
          xmlhttp.send();
        }
      }
    };
    xmlhttp.open("GET", "hint.php?q=" + $(box1).val(), true);
    xmlhttp.send();
  }
});
function check(str) {
  console.log(1);
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  else{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "hint.php?q=" + str, true);
    xmlhttp.send();
  }
}
