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
  <?php include_once("./templates/header.php");?>
  <br>
   <div class="container-lg ">
      <div class="row justify-content-center my-3 mx-auto">
         <div class="col-lg-6">
            <div class="card mx-auto" style="width: 18rem;">
              <div class="card-body">
                  <h5 class="text-center">Register</h5>
               <form id="register_form" onsubmit="return false" autocomplete="off">
               <label for="name" class="form-label">Full Name</label>
                   <div class="input-group">
                   <span class="input-group-text">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                   <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                   </svg>
                   </span>      
                   <input type="text" class="form-control" name="username" id="username"placeholder="eg. olivier">
                   <small id="u_error" class="form-text text-muted"></small>                          
                   </div>
                <label for="email" class="form-label"> Email adress</label>
                   <div class="input-group">
                   <span class="input-group-text">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
                   <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                   </svg>
                   </span>
                   <input type="email" class="form-control" name="email" id="email" placeholder="example@gmail.com " >
                   <small id="e_error" class="form-text text-muted"></small>
                   </div>
                   <div class="form-group">
                <label for="password1" class="form-label">Password</label>
                    <input type="password" name="password1" id="password1" class="form-control"  placeholder="password">
                    <small id="p1_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                <label for="password2">Re-enter Password</label>
                    <input type="password" name="password2" id="password2" class="form-control"  placeholder="password">
                    <small id="p2_error" class="form-text text-muted"></small>
                    </div>
                <label for="subject" class="form-label"> User type</label>
                    <select name="usertype" id="usertype"  class="form-select">
                    <option value="">Choose user Type</option> 
                    <option value="pricing" selected>Admin</option>
                    <option value="pricing">Other</option>
                    </select>
                    <small id="t_error" class="form-text text-muted"></small>
                    <div class="text-center mb-4">
                    <br>
                    <button type="submit" class="btn-brand">Register</button>
                    <span><a href="index.php">login</a></span>
                    </div>  
                </form>
                  </div>
                <div class="card-footer" style=""><a href="#">Forget password ?</a></div>
            </div>
          </div>
         </div>
      </div> 
   </body>
 </html>









<!-- <div class="container">
  .row
   <div class="card mx-auto" style="width: 18rem;">
      <div class="card-header">Register</div>
        <div class="card-body">
      <form id="register_form">
      <div class="form-group">
          <label for="username">Full Name</label>
          <input type="text" class="form-control"
           id="username" aria-describedby="emailHelp" placeholder="Enter Username">
        </div>
        <div class="form-group">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
       <div class="form-group">
          <label for="password1" class="form-label">Password</label>
          <input type="password" name="password1" class="form-control" id="password1" placeholder="password">
      </div>
      <div class="form-group">
          <label for="password2">Re-enter Password</label>
          <input type="password" name="password2"class="form-control" id="Password2" placeholder="password">
      </div>
      <div class="form-group">
          <label for="usertype">Usertype</label>
          <select name="usertype"class="form-control" id="usertype" >
               <option value="1">Admin</option>
               <option value="2">other</option>
             </select>
       </div>
      <br>
        <button type="submit" class="btn btn-primary">login</button>
         <span><a href="#">Register</a></span>
      </form>
  
   </div>
    <div class="card-footer"><a href="#">Forget password ?</a></div>
    </div>
     </div> -->