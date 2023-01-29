<?php
include("config.php");
include("firebaseRDB.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];



if($name == ""){
   echo "name is required";
} 
else if ($email == ""){
   echo "email is required";
} 
else if ($password == ""){
   echo "password is  required";
} 
else{
   $rdb = new FirebaseRDB($databaseURL);
   $retrieve = $rdb -> retrieve ("/user" , "email" , "EQUAL" , $email);

   $data = json_decode($retrieve,1);

   if(count($data) > 0){
      echo "<script>alert('Email already in use');</script>";
      echo "<script type='text/javascript'> document.location = 'sign-up.php'; </script>";
   }else{
   $insert = $rdb->insert("user", [
   "customer_name"     => $name,
   "email" => $email,
   "password" =>md5($password)
]);


   }
}


