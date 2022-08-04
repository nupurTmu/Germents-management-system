<?php 
  require_once('header.php');
  require_once('side_bar.php');
?>
  <!--  -------------- Main content Start---------------------------------------->


 <div id="layoutSidenav_content">
    <main>
        <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <?php
                                   if(isset($_POST['register_btn'])){
                                       $worker_name = $_POST['worker_name'];
                                       $supervisor_id = $_POST['supervisor_id'];
                                       $manger_id = $_POST['manger_id'];
                                       $password = $_POST['password'];
                                       $gender = $_POST['gender'];
                                       $email = $_POST['email'];
                                       
                                       $insert = "INSERT INTO tbl_worker(worker_name,supervisor_id,manger_id,password,gender,email)
                                       VALUES('$worker_name','$supervisor_id','$manger_id','$password','$gender','$email')";
                                       $run = mysqli_query($con,$insert);
                                       if($run){
                                           echo"<h4 class='text-success'>Registration Success</h4>";
                                       }else{
                                        echo"<h4>Registration Not Success</h4>";
                                       }
                                   }
                                ?>
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register New Worker </h3></div>
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" name="worker_name" type="text"  />
                                                        <label for="inputFirstName">User name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" name="email" type="email"/>
                                                        <label for="inputLastName">E-mail</label>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select  class="form-control" name="manger_id">
                                                            <option value="">select manager</option>
                                                            <option value="1">Nupur</option>
                                                            <option value="2">Tania</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <select  class="form-control" name="supervisor_id">
                                                    <option value="">select Supervisor</option>
                                                     <?php
                                                          $select ="SELECT * FROM tbl_supervisor";
                                                          $run = mysqli_query($con,$select);
                                                          while($result = mysqli_fetch_array($run)){ ?>
                                                                <option value="<?php echo $result['id']?>"><?php echo $result['supervisor_name']?> </option>
                                                                
                                                        <?php } ?>
                                                          
                                                        </select>
                                                     </div>
                                                </div>
                                            </div>
                                          
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" name="gender" type="text"  />
                                                        <label for="inputPassword">Gender</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="password" name="password" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <button class="btn btn-primary btn-block" name="register_btn">Create Account</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                              
                                </div>
                            </div>
                        </div>
                    </div>
</main>
    <!--  -------------- Main content End---------------------------------------->
<?php 
  require_once('footer.php');

?>
    