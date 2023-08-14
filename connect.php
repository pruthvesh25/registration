<?php
$fullname = $_POST['fullname'];
$number = $_POST['number'];
$email = $_POST['email'];
$ur_name = $_POST['ur_name'];
$pasword = $_POST['pasword'];

//database connection 
$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "information";

$conn = mysqli_connect($sname, $uname, $password, $db_name);
if(!$conn){
    die("Connection Failed :" . mysqli_connect_error());
}
else{
    $stmt= $conn->prepare("insert into registration(fullname,number,email,ur_name,password) values(?,?,?,?,?)");
    $stmt->bind_param("sisss",$fullname,$number,$email,$ur_name,$password);
    $stmt->execute();
    echo "Resgistration Sucessfull.....";
    $stmt->close();
    $conn->close();
}
?>