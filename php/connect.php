<?php
$first = $_POST['first'];
$last = $_POST['last'];
$gender = $_POST['gender'];
$bday = $_POST['bday'];
$email = $_POST['email'];
$password = $_POST['password'];
$tel = $_POST['tel'];
$tos = $_POST['tos'];
$msg = $_POST['msg'];

// Database connection

$conn = new mysqli('localhost', 'root', '', 'project_login_db');
if($conn->connect_error){
    die('Error: Connection Failed, ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into users(first, last, gender, bday, email, password, tel, tos, msg) 
    values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssii", $first, $last, $gender, $bday, $email, $password, $tel, $tos, $msg);
    $stmt->execute();
    echo "users registered successfully...";
    $stmt->close();
    $conn->close();
}
?>