<?php

session_start();
$conn = new Mysqli("localhost","root","","inventory");

$msg ="";

if (isset($_POST['login'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];
   $password = sha1($password);
   $usertype = $_POST['usertype'];

   $sql = "SELECT * FROM USERS WHERE username=? AND password=? AND user_type=?";
    
   $stmt = $conn->prepare($sql);
   $stmt->bind_param("sss",$username,$password,$usertype);
   $stmt->execute();
   $result = $stmt->get_result();
   $row = $result->fetch_assoc();

   session_regenerate_id();
   $_SESSION['username'] = $row['username'];
   $_SESSION['role'] = $row['user_type'];
   session_write_close();


   if($result->num_rows==1 && $_SESSION['role']=="other"){
    header("location:other.php");
   }
   else if ($result->num_rows==1 && $_SESSION['role']=="Admin") {
    header("location:dashboard.php");
   }
   else{
    $msg = "username or password is incorrect";
   }
}
?>