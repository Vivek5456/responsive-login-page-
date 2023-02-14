<?php
$user=$_POST["un"];
$pass=$_POST["pass"];

$record=QUERY:SELECT * from record where Username="$user" and Password="$pass";

if($record IS NOT BLANK){
echo("Login Successfully!!!!");}
else{
echo("Login Failed!!!!")}
?>