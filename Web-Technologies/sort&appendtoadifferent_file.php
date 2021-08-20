<?php
$myfile = fopen("one.txt", "r") or die("Unable to open file!");
$PNAMES = fopen("Pnames.txt", "w") or die("Unable to open file!");
$SNAMES = fopen("Snames.txt", "w") or die("Unable to open file!");
$Sorted = fopen("sorted.txt", "w") or die("Unable to open file!");
// Output one line until end-of-file
$pattern1 = "/^S/";
$pattern2 = "/^P/";
$arr = array();
$Sarr = array();
$Parr = array();
while(!feof($myfile)) {
    array_push($arr,fgets($myfile));
}

for($i=0;$i<sizeof($arr);$i++){
    if(preg_match($pattern1,$arr[$i])){
   array_push($Sarr,$arr[$i]);
    }
    else if(preg_match($pattern2,$arr[$i])){
    array_push($Parr,$arr[$i]);
    }
}
sort($Sarr);
sort($Parr);
$in=0;
for($i=0;$i<sizeof($Sarr);$i++){
    $in = $in+1;
    $Sarray = "$in ".$Sarr[$i];
    echo "$Sarray";
    echo "<br>";
    fwrite($SNAMES, $Sarray);
}
$in=0;
for($i=0;$i<sizeof($Parr);$i++){
    $in = $in+1;
    $Parray = "$in ".$Parr[$i];
    echo "$Parray";
    echo "<br>";
    fwrite($PNAMES, $Parray);
}
sort($arr);
for($i=0;$i<sizeof($arr);$i++){
    fwrite($Sorted, $arr[$i]);
}

fclose($myfile);

?>