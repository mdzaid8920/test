<?php

$con = mysqli_connect('localhost','root');
if($con){
    echo "connection sucessfull";
}
 else{
    echo "not sucessfull";
}

mysqli_select_db($con,'alm');

$fname = $_POST['First_Name'];
$lname = $_POST['Last_Name'];
$country = $_POST['Country'];
$subject = $_POST['Subject'];

$query ="INSERT INTO write_us (First_Name , Last_Name , Country , Subject ) VALUES ( '$fname' , '$lname' , '$country' , '$subject' )";
echo "$query";
mysqli_query($con, $query );
header('location:contact.php');

 ?>