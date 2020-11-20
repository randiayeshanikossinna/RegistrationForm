<?php
$user =$_POST['username'];
$password=$_POST['password'];

if(!empty($user)|| !empty($password)){
    $host="localhost"; 
    $dbusername="root";
    $dbpassword="";
    $dbname="pizzahut_customer";
}
?>