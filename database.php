<?php 
$dbhost='localhost';
$dbuser= 'root';
$dbpassword='root';
$dbname='test';
$conn = mysqli_connect($dbhost,$dbpassword,$dbuser,$dbname);

if(!$conn){
    printf('Connection Impossible:', mysqli_connect_error());
    exit();
}
echo " Connection réussit avec succèes!";
?>