<?php 
  require_once('header.php');
  require_once('side_bar.php');
?>
  <!--  -------------- Main content Start---------------------------------------->
 <div id="layoutSidenav_content">
    <main>
    <div class="container-fluid px-4">
        <div class="container-fluid px-4">
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
                     $insert = "INSERT INTO tbl_supervisor(supervisor_name,manager_id,suvisor_phone,email,password)
                     values('$Supervisor_name','$manager_id','$suer_phone','$super_email','$super_pass') "; 
                      $run = mysqli_query($con,$insert);
                      if($run){
                          echo "<script>alert('Data insert Success')</script>";
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
    
</div>
</main>
        <!--  -------------- Main content End---------------------------------------->
<?php 
  require_once('footer.php');

?>