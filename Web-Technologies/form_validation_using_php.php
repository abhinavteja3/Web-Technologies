<form method="post">  
Username <input type="text" name="username"><br><br>  
Password: <input type="text" name="password"><br><br>
Telephone number: <input type="text" name="phonenumber"><br><br>
E-mail: <input type="text" name="email"><br><br>
<input type="submit" name="submit" value="Submit">  
</form>  
<?php  
if($_POST)  
{  
    $name=$_POST['username'];  
	$pass=$_POST['password'];
    $phone=$_POST['phonenumber'];
    $mail=$_POST['email'];  	
    if(!ctype_upper($name[0])) 
    {
		echo "First character of username should be capital";
		echo "<br>";
    }		
	if ( strlen($phone) < 10 && strlen($phone) > 10) {  
    $ErrMsg = "Mobile must have 10 digits.";  
            echo $ErrMsg;
            echo "<br>";			
    }
	if($phone[0]=='0')
	{
		echo 'first number should not be 0';
		echo "<br>";
	}
	if(!filter_var($mail, FILTER_VALIDATE_EMAIL))
	{
		echo "Email address is  invalid";
		echo "<br>";
	}
	if (strlen($pass) < 8) {  
    $ErrMsg = "password must be more than 8 charcters.";  
            echo $ErrMsg;  
			echo "<br>";
    }
	$uppercase = preg_match('@[A-Z]@', $pass);
    $lowercase = preg_match('@[a-z]@', $pass);
    $number    = preg_match('@[0-9]@', $pass);
    $specialChars = preg_match('@[^\w]@', $pass);
 if(!$uppercase || !$lowercase || !$number || !$specialChars ) {
    echo 'Password should include at least one upper case letter, one number, and one special character.';
	echo "<br>";
    }
	else {
		echo 'form submitted successfully';
	}
}  
?>
