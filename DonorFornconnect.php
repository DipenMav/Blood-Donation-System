<?php

$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$age=$_POST['age'];
$contact=$_POST['phone'];
$blood=$_POST['bloodgroup'];
$email=$_POST['email'];

$conn= new mysqli('localhost','root','','donorform');

if($conn->connect_error){
    die('connection failed  : '.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into registration (firstname,lastname,age,email,contact,blood) values(?,?,?,?,?,?)");
    $stmt->bind_param('ssisis',$firstname,$lastname,$age,$email,$contact,$blood);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();
}


?>
