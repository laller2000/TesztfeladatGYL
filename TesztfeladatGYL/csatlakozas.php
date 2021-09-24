<?php
$servername="localhost";
$username="root";
$password="";
$databasename="szamlaadatbazis";
$conn=new mysqli($servername,$username,$password,$databasename);
if($conn->connect_error)
{
    die("Csatlakozási hiba:".$conn->connect_error);
}else{
    echo 'Csatlakozás sikeres!';
}
$conn->set_charset("utf8");
?>