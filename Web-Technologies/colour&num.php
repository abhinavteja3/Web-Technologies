<?php
    if($_POST){
        $col = $_POST['colour'];
        $number = $_POST['num'];
        echo "<body style='background-color:$colo'>";
        for($i=1;$i<=10;$i++)
        {
            $p=$i*(int)$number;
            echo "$number X $i =  ";
            echo" $p";
            echo "<br>";
        }
    }
?>
