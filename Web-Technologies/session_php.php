<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<body>
<form method="post">
Enter the color:<input type="text" name="color"/><br>
Enter a number:<input type="text" name="num"/><br>
<button type="submit" >Submit</button>
</form>
</body>
</html>
<?php
  if($_POST)
  {
     $color=$_POST['color'];
     $num=$_POST['num'];
    
       echo "<body style='background-color:$color'>";
       for($i=1;$i<=10;$i++)
       { $p=$i*$num;
         echo "$num x $i";
         echo "=$p";
         echo "<br>";
      }
   
 }
 session_abort();
?>