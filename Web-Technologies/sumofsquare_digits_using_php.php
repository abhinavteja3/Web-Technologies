<form method="post">        
Enter a Number: <input type="text" name="num"/><br>  
<button type="submit">Check</button>  
</form>  
<?php
if($_POST)  
    {  
        //get the value from form  
        $num = $_POST['num'];   
  	$sum=0; $rem=0;  
  	for ($i =0; $i<=strlen($num);$i++)  
 	{  
  		$rem=$num%10;  
   		$sum = $sum + $rem*$rem;  
   		$num=$num/10;  
  	}  
 	echo "Sum of the square of the digits for given number is $sum";  
   }
 ?>
