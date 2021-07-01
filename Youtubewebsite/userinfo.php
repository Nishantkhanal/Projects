<?php


$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection successful";
}else{
    echo "No connection";
}

mysqli_select_db($con, 'userdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$comment = $_POST['comment'];

$query = "insert into userinfodata (user, email, mobile, address, comment)
 values ('$user', '$email', '$mobile', '$address', '$comment')";

mysqli_query($con, $query);

header('location:index.php');
?>