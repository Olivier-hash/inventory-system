<?php

// user class for account creation and log in purpose
 class User
 {

    private $con;

    function __construct() 
    {
      include_once("../database/db.php");
      $db = new Database();
      $this->con = $db->connect();


    }
    //  User is already registered or not      
    private function emailExists($emai){
        $pre_stmt = $this->con->prepare("SELECT id FROM user WHERE email = ?");
        $pre_stmt->bind_param("s",$emai);
        $pre_stmt->execute() or die($this->con->error);
        $result = $pre_stmt->get_result();
         if($result->num_rows > 0){
           return 1;
         }else{
            return 0;
         }
    }

    public function createUserAccount($username,$emai,$password,$usertype){
      // use of prepared statements to protect application from sql attack 

    if($this->emailExists($emai)){
         return "EMAIL_ALREADY_EXIST";
    }else {
        $pass_hash = password_hash($password,PASSWORD_BCRYPT,["cost"=>8]);
        $date =date("Y-m-d");
        $notes = "";
        $pre_stmt =$this->con->prepare("INSERT INTO `user`(`username`, `email`, `password`, `usertype`, `register_date`, `last_login`, `notes`)
         VALUES (?,?,?,?,?,?,?)");
         $pre_stmt->bind_param("sssssss",$username,$emai,$pass_hash ,$usertype,$date,$date,$notes);
         $result = $pre_stmt->execute() or die($this->con->error);
         if ($result) {
            return $this->con->insert_id;
         }else {
            return "SOME_ERROR";
         }
    }      
    
    }

    public function userLogin($emai,$password){
        $pre_stmt = $this->con->prepare("SELECT id,username,password,last_login FROM user WHERE email = ? ");
        $pre_stmt->bind_param("s",$emai);
        $pre_stmt->execute() or die($this->con->error);
        $result = $pre_stmt->get_result();

       if ($result->num_rows < 1) {
           return "NOT_REGISTERED";
       }else {
           $rows = $result->fetch_assoc();
           if (password_verify($password,$rows["password"])) {
              $_SESSION["userid"] = $rows["id"];
              $_SESSION["username"] = $rows["username"];
              $_SESSION["last_login"] = $rows["last_login"];

              // Here we are    updating user last log in time when he is performing login
              $last_login = date("Y-m-d h:m:s");
              $pre_stmt = $this->con->prepare("UPDATE user SET last_login = ? WHERE email = ?");
              $pre_stmt->bind_param("ss",$last_login,$emai);
              $result = $pre_stmt->execute() or die($this->con->error);
              if ($result) {
                return 1;
              }else {
                return 0;
              }
           }else{
              return "PASSWORD_NOT_MATCHED";
           }
       }

    }
 }
  
// $user = new User();
// //echo $user->createUserAccount("oliver","iuiu@gmail.com","1234567890","Admin");
 
// echo $user->userLogin("iuiu@gmail.com","1234567890");

// echo $_SESSION["username"];
?> 