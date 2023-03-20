<?php

$uname1=$_POST['uname1'];
$email1=$_POST['email1'];
$upass1=$_POST['upass1'];
$upass2=$_POST['upass2'];

if(!empty($uname1)||!empty($email1)||!empty($upass1)||!empty($upass2)){
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="login page";

    $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{
        $SELECT
    }
}