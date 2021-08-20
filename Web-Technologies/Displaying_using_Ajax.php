<!DOCTYPE html>
<html>
<head>
<script>
function myFunction() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "one.txt", true);
    xmlhttp.send();
}
function sorted()
{
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "sorted.txt", true);
    xmlhttp.send();
}

</script>
</head>
<body>
<p>Suggestions: <span id="txtHint"></span></p>
 <button onclick="myFunction()">Click me</button> 
 <button onclick="sorted()">click for sorted elements </button> 
</body>
</html>
