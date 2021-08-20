 <form method="post">  
Enter a Number: <input type="text" name="input"><br><br>  
<input type="submit" name="submit" value="Submit">  
</form>  
<?php  
if($_POST)  
{  
    $x=$_POST['input'];  
    if($x%2!=0)
    {
        echo "It is odd number";
  
        for ($i = 2; $i <= $x-1; $i++) {  
          if ($x % $i == 0) {  
          $value= True;  
          }  
        }  
    if (isset($value) && $value) {  
         echo 'The Number '. $x . ' is not prime'; 
         echo " Factors of  " . $x . " are: ";
    for ($i = 1; $i <= $x; ++$i) {
        if ($x % $i == 0) {
            echo $i . " ";
        }
    }	 
    } 
    else {  
        echo ' Number '. $x . ' is prime.'; 
        echo "\n";
        echo 'Prime numbers upto '. $x. ' are:';
        for ($i = 0; $i < $x; $i++) {
            if ($i == 1 || $i == 0)
        continue;
    $f = 1;
    for ($j = 2; $j < intval($i / 2) + 1; $j++) {
        if ($i % $j == 0) {
            $f = 0;
            break;
        }
    }
    if ($f == 1)
        echo $i." ";
    }
   }       
}  

elseif($x%2==0)
{
    echo "It is not odd number";
    echo "<br>";
    echo "The factors of the " . $x . " are: ";
    $i = 1;
    while ($i <= $x) {
    if ($x % $i == 0) {
        echo $i . " ";
    }
    ++$i;
}
}
}
?>
