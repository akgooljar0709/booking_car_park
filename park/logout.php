
<?php
session_start();
error_reporting(0);

include('conn.php');
// Code user Registration
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$pass=md5($_POST['pass']);

$sql=mysqli_query($conn,"select id from users where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
    echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
} else{
    $msg=mysqli_query($conn,"insert into users(name,email,password) values('$name','$email','$pass')");

if($msg)
{
    echo "<script>alert('Registered successfully');</script>";
    echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
}
}

}


// Code for User login
if(isset($_SESSION['user']))
{
   unset($_SESSION['user']);
}

header("location:sign-up.php");




?>





