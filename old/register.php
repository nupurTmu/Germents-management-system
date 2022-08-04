<?php
  $con = mysqli_connect('localhost','root','','management_system');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manager page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
      body{
        background-image: url(picture/img.jpg);
        background-size:cover;
        background-attachment:fixed;
      }
    </style>
</head>
<body>
    <section>
      <div class="container">
         <div class="row mt-5 pt-5">
           <div class="col-lg-2"></div>
           <div class="col-lg-8">
               <?php
                 if(isset($_POST['register'])){
                     $Supervisor_name = $_POST['Supervisor_name'];
                     $suer_phone = $_POST['suer_phone'];
                     $super_pass = $_POST['super_pass'];
                     $super_email = $_POST['super_email'];
                     $manager_id = $_POST['manager_id'];
                     $production_id = $_POST['production_id'];
                     $insert = "INSERT INTO tbl_supervisor(supervisor_name,production_id,manager_id,suvisor_phone,email,password)
                     values('$Supervisor_name','$production_id','$manager_id','$suer_phone','$super_email','$super_pass') "; 
                      $run = mysqli_query($con,$insert);
                      if($run){
                          echo "<script>alert('Data insert Success')</script>";
                          header("Location:login.php");  
                      }else{
                          echo"data not insert";
                      }


                    }
               ?>
               <div class="card"> 
                   <div class="card-header">
                      <h4 class="color text-center py-3">Supervisor Registration</h4>
                   </div>
                   <div class="card-body">
                            <form action="" method="POST"  class="form">
                                <div class="row">
                                    <div class="col-md-6 py-1">
                                        <label for="">Supervisor Name</label>
                                        <input type="text" name="Supervisor_name" class="form-control">
                                    </div>
                                    <div class="col-md-6 py-1">
                                        <label for="">Phone</label>
                                        <input type="text" name="suer_phone" class="form-control">
                                    </div>
                                    <div class="col-md-6 py-1">
                                        <label for="">Password</label>
                                        <input type="password" name="super_pass" class="form-control">
                                    </div>
                                    <div class="col-md-6 py-1">
                                        <label for="">E-mail</label>
                                        <input type="email" name="super_email" class="form-control">
                                    </div>
                                    <div class="col-md-6 py-1">
                                        <label for="">Select Manager </label>
                                         <select class="form-select" name="manager_id" aria-label="Default select example">
                                           <option selected>select menu</option>
                                           <?php 
                                                $selet = "SELECT * FROM `tbl_manager`";
                                                $run = mysqli_query($con,$selet);
                                                while($resutl =  mysqli_fetch_array($run)){  ?>
                                                <option value="<?php echo $resutl['id']?>"><?php echo $resutl['manager_name']?></option>
                                            <?php } ?>
                                         </select>
                                    </div>
                                    <div class="col-md-6 py-1">
                                        <label for="">Select production Officer </label>
                                        <select class="form-select" name="production_id" aria-label="Default select example">
                                           <option selected>select menu</option>
                                           <?php 
                                                $selet = "SELECT * FROM `tbl_prodction_officer`";
                                                $run = mysqli_query($con,$selet);
                                                while($resutl =  mysqli_fetch_array($run)){  ?>
                                                <option value="<?php echo $resutl['id']?>"><?php echo $resutl['name']?></option>
                                            <?php } ?>
                                         </select>
                                    </div>
                                </div>
                                <div class="div pt-3 d-flex justify-content-end">
                                   <input type="submit" name="register" value="Save" class="btn btn-primary">
                                </div>
                            </form>
                      </div>
                  </div>
             </div>
           <div class="col-lg-2">
                   
           </div>
         </div>
      </div>
    </section>
</body>
</html>
