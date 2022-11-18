<?php
$UserName = $_POST['UserName'];
$PhoneNo = $_POST['PhoneNo'];
$Email = $_POST['Email'];
$comment = $_POST['comment'];


//database connection

$conn = new mysql('localhost','root','','loginsystem');
if($conn->connect_error){
die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(UserName,PhoneNo,Email,comment)values(?,?,?)");
    $stmt->bind_param("siss",$UserName,$PhoneNo,$Email,$comment);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close(); 
}

?>