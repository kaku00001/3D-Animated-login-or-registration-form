<?php

session_start();


$con = mysqli_connect('localhost','root','password');

mysqli_select_db($con, 'useregistration');
$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];
$s = " select * from userregdetails where name = '$name'";


$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num ==1){
    echo" Username Already Taken";

}else{
    $reg= " insert into userregdetails(name , email , password) values ('$name' , '$email' , '$pass')";

    mysqli_query($con, $reg);
    echo"  Registration Succesful. Now Go Back and Login";
}

?>