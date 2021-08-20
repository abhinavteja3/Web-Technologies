<form method="post">        
Enter a Number: <input type="text" name="number"/><br>  
<button type="submit">Check</button>  
</form>  
<?php   
    if($_POST){  
        $fact = 1;  
        $number = $_POST['number'];  
        echo "Factorial of $number:<br><br>";  
        
        for ($i = 1; $i <= $number; $i++){         
            $fact = $fact * $i;  
            }  
            echo $fact . "<br>";  
    }      
?>
