<?php 
$dbhost='localhost';
$dbuser= 'root';
$dbpassword='root';
$dbname='test';
$conn = mysqli_connect($dbhost,$dbpassword,$dbuser,$dbname);

if(!$conn){
    die('Connection impossible:');
}
echo " Connection réussit avec succèes!";
?>