<?php
 $name = $_POST['name'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $password = $_POST['cpassword'];

 //DatabaseConnection
 $conn = new mysqli('localhost', 'root', '', 'test');
 if($conn -> connect_error()){
    die('Connection Failed  : '.$conn->connect_error);
 }
 else{
    $stmt = $conn->prepare("insert in registration(name, username, password, cpassword) values('?', '?', '?', '?')")
    $stmt->bind_param('sssssi', $name, $email, $username, $password, $password);
    $stmt->execute();
    echo "SignUp Successful";
    $stmt->close();
    $conn->close();
 }
?>