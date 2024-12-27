<!DOCTYPE html>
<html lang="en">
<head>

<title>Inventory Management</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="./js/main.js"></script>
</head>
<body>


   <!-- navbar -->
  <?php include_once("./templates/header.php");?>
   <br>
   <div class="container">
      <div class="row">
          <div class="col-md-4">
            <div class="card mx-auto" style="width: 18rem;">
              <img src="./images/user.jpeg" style="width:60%;" class="card-img-top mx-auto" alt="...">
              <div class="card-body">
                <h5 class="card-title">profile Info</h5>
                 <p class="card-text">MODESTE</p>
                 <p class="card-text">Admin</p>
                 <p class="card-text">Last Login : xxxx-xx-xx</p>
                 <a href="#" class="btn btn-primary">Edit profile</a>
                </div>
              </div>   
          </div>
       <div class="col-md-8">
             <div class="bg-light rounded" style="width:100%; height:100%">
                <h1 class="text-center">welcome Admin</h1>
                   <div class="row">
                     <div class="col-sm-6">
                       <iframe src="https://free.timeanddate.com/clock/i9oq4t9u/n3589/szw110/szh110/hoc000/hbw4/cf100/hgr0/hcw2/fav0/fiv0/mqc000/mqs3/mql25/mqw2/mqd96/mhc000/mhs3/mhl20/mhw2/mhd96/mmc000/mms3/mml5/mmw2/mmd96/hhs2/hhw8/hms2/hmw8/hmr4/hsc000/hss3/hsl90" frameborder="0" width="110" height="110"></iframe>
                       </div>
                           <div class="col-sm-6">
                              <div class="card">
                                <div class="card-body">
                                 <h5 class="card-title">New orders</h5>
                                 <p class="card-text">Here you can make invoices and create new orders.</p>
                                 <a href="#" class="btn btn-primary">New orders</a>
                              </div>
                            </div>   
                        </div>
                    </div>
                 </div>
              </div>
          </div>
      </div>
<br>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
           <div class="card">
             <div class="card-body" style="width: 18rem;">
                <h5 class="card-title">Categories</h5>
                <p class="card-text">Here you can manage your categories
                   </p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#form_category" class="btn btn-primary">Add</a>
                <a href="#" class="btn btn-primary">Manage</a>
             </div>
           </div>   
         </div>
        <div class="col-md-4">
        <div class="card">
             <div class="card-body" style="width: 18rem;">
                <h5 class="card-title">Brands</h5>
                <p class="card-text">Here you can make your brand and you add new brands.</p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#form_brand" class="btn btn-primary">Add</a>
                <a href="#" class="btn btn-primary">Manage</a>
             </div>
            </div>   
          </div>
         <div class="col-md-4">
         <div class="card">
             <div class="card-body" style="width: 18rem;">
                <h5 class="card-title">Products</h5>
                <p class="card-text">Here you can make your products and you add new products.</p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#form_products" class="btn btn-primary">Add</a>
                <a href="#" class="btn btn-primary">Manage</a>
             </div>
            </div>
         </div>
      </div>
    </div>

  <?php
  // category form
  include_once("./templates/category.php");
  ?>
    <?php
  // Brand forms
  include_once("./templates/brand.php");
  ?>
    <?php
  // Products form
  include_once("./templates/products.php");
  ?>

  
</body>
</html>