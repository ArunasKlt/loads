<?php
$sql_host = 'localhost';
$sql_user = 'root';
$sql_pass ='';
$sql_database = 'cargo';


$con = mysqli_connect($sql_host,$sql_user,$sql_pass, $sql_database);

 if(mysqli_connect_error($con)) {
 	die ("Failed to connect to MySQL". mysqli_connect_error($con));
 }


?>