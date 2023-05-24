<?php
$servername=
"localhost";
$username =
"root";
$password =
"";
$dbname="soeexam";
// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if(!$con)
{ // creation of the connection object failed
    die("connection object not created: ".mysqli_error($con));
}

if (mysqli_connect_errno()) 
{ // creation of the connection object has some other error
    die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
}?>