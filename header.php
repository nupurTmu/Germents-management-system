<?php
  session_start();
  $con = mysqli_connect('localhost','root','','management_system');
?>
<!doctype html>
<html lang="en">
  <head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
       
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Garments Managment system</title>

  </head>
    <body style="background:#e7f9ff;">
          <div class="nav_section">
            <div class="container-fluid">
              <div class="row">
              <nav class="navbar navbar-expand-lg">
              <div class="container-fluid">
                <h2><a style="color: white; font-weight:700; font-size:25px; " class="navbar-brand" href="index.php">Garments Management System</a></h2>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ml-5" id="navbarSupportedContent">
                  <ul class="navbar-nav margin-nav  me-auto mb-2 mb-lg-0">
                    <li class="nav-item ml-5">
                      <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item  ml-5">
                      <a class="nav-link" href="all_product.php"> All Products</a>
                    </li>
                 
                    <li class="nav-item ml-5">
                      <?php if(isset($_SESSION['username_buyer'])){ ?>
                            <a class="nav-link" href="order_details.php">Order Details</a>
                      <?php } ?>
                    </li>
                    <li class="nav-item ml-5">
                       <?php if(!isset($_SESSION['username_buyer'])){ ?>
                      <a class="nav-link"  href="login_reg.php"><button class="btn btn-outline-light">Login</button> </a>
                     <?php  } else{ ?>
                      <a class="nav-link"  href="logout.php"><button class="btn btn-outline-danger">Logout</button> </a>
                   <?php } ?>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
             </div>
         </div>
    </div>  