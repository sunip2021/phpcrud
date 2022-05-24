<?php 
$fptr=fopen("myfile.txt","r");
if(!$fptr){
    die("unable to opent this file. please enter correct filename");
}
$content=fread($fptr,filesize("myfile.txt"));

echo $content;
fclose($fptr);
?>