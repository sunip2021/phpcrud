<?php
$fptr=fopen("myfile.txt","r");
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr).'<br>';
while($a=fgets($fptr)){
    echo $a.'<br>';
}
?>