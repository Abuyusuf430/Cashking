<?php

$servername="sql7.freemysqlhosting.net";
$dbname = "sql7614113";
$username = "sql7614113";
$password = "W55Pq98mKm";

$link=mysqli_connect($servername,$username, $password,$dbname);

if(!$link)
{
    echo "error";
}

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
?>