<?php

$servername="sql313.epizy.com";
$dbname = "epiz_34058699_Deezapp";
$username = "epiz_34058699";
$password = "99HRmIRGb2";

$link=mysqli_connect($servername,$username, $password,$dbname);

if(!$link)
{
    echo "error";
}

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
?>