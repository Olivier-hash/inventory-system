<!DOCTYPE html>
<html lang="en">
<head>

<title>Inventory Management</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="./css/login.css">
<script src="./js/main.js"></script>
</head>
<body>


   <!-- navbar -->
  <?php include_once("./templates/header.php"); ?>
   <br>
   <div class="container">
   <div class="card mx-auto" style="width: 18rem;">
      <!-- <img src="./images/user.jpeg" style="width:60%;" class="card-img-top mx-auto" alt="login icon"> -->
        <div class="card-body">
      <form action="./login/checklogin.php" method="post">
        <div class="mb-3">
          <label for="username" class="form-label">user name</label>
          <input type="text" class="form-control" name="username" id="username" >
        </div>
       <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="Password"id="Password">
      </div>
      <label for=" " class="form-label mb-1"> User type</label>
                    <select name="usertype" id="role"  class="form-select mb-3">
                    <option value="">Choose user Type</option> 
                    <option value="pricing" selected>Admin</option>
                    <option value="pricing">Other</option>
                    </select>
        <button type="submit" name="login" class="btn-brand">login</button>
        <span><a href="register.php">Register</a></span>        
      </form>  
   </div>
      <div class="card-footer" style="background-color: #ffff;">
         <h5 class="text-danger text center"><?= $msg; ?></h5>
      </div>
    </div>
    </div>
   
  
</body>
</html>