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
        $SELECT="SELECT email From register Where email=?Limit 1";
        $INSERT="INSERT Into register(uname1,email1,upass1,upass2) values(?,?,?,?)";
        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("s",$email1);
        $stmt->execute();
        $stmt->bind_result($email1);
        $stmt->store_result();
        $rnum=$stmt->num_rows;

        if($rnum==0){
            $stmt->close();
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ssss",$uname1,$email1,$upass1,$upass2);
            $stmt->execute();
            echo "New record inserted successfully";
        }
        else{
            echo "Someone already register using this email";
        }
        $stmt->close();
        $conn->close();
}
else{
    echo "All field are required";
    die();
}

?>