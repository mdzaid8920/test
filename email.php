<?php

$con = mysqli_connect('localhost','root');
if($con){
    echo "connection sucessfull";
}
 else{
    echo "not sucessfull";
}

mysqli_select_db($con,'alm');

$email = $_POST['email'];


$query ="INSERT INTO email (email ) VALUES ( '$email' )";
echo "$query";
mysqli_query($con, $query );
header('location:final.php');

 ?>