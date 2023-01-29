<?php
include("config.php");
include("firebaseRDB.php");


$email = $_POST['email'];
$password = md5($_POST['password']);



if ($email == ""){
   echo "email is required";
} 
else if ($password == ""){
   echo "password is  required";
} 
else{
   $rdb = new FirebaseRDB($databaseURL);
   $retrieve = $rdb-> retrieve ("/user" , "email" , "EQUAL" , $email);

   $data = json_decode($retrieve,1);

   if(count($data) == 0 ){
      echo "Email not registered";
   }else{
      $id = array_keys($data)[0];

      if ($data[$id]['password'] == $password) {
         session_start();
         $_SESSION['user'] = $data[$id];
         header("location:my-account.php");
         //echo "login success";
         //print_r($retrieve);
          //print_r($data);
      } else{
         //$extra = "sign-up.php";
         //header("location:$extra");

         echo "<script>alert('Invalid email id or Password');</script>";
         echo "<script type='text/javascript'> document.location = 'sign-up.php'; </script>";
         //$_SESSION['errmsg']="Invalid email id or Password";
         //exit();
        
         //print_r($retrieve);
         //print_r($data);
      }



   }
}


