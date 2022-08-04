<?php 
  require_once('header.php');
?>

  <section>
    <div class="row">
       <div class="col-lg-12">
           <div class="headding text-center">
               <h3>LOGIN OR REGISTRATION PAGE</h3>
           </div>
       </div>
    </div>
  </section>
  <section>
      <div class="row py-5">
          <div class="col-lg-4">
              <div class="row">
              <?php
                    if(isset($_POST['login'])){
                    $username = $_POST['user_name'];
                    $pass = $_POST['password'];

                    $select_q = "SELECT  * FROM tbl_buyer_regi WHERE  buyer_name = '$username' AND buyer_pass ='$pass'";
                    $run = mysqli_query($con,$select_q);
                     $check = mysqli_num_rows($run);
                      if($check== 1){
                        $_SESSION['username_buyer']  = "$username";
                        header("Location:payment.php"); 
                    }else{
                        echo"<h4 class='pt-2' style='color:red; text-align:center '>Incorrect name Or  Password</h4>";
                    }
                    }
                  
                  ?>
                  <form action="" method="POST">
                 <div class="card py-5">
                   <div class="card-body">
                       <div class="py-2">
                         <h5 class="card-title">User Name</h5>
                         <input type="text" name="user_name" class="form-control">
                       </div>
                       <div  class="py-2">
                         <h5 class="card-title">Password</h5>
                         <input type="password" name="password" class="form-control">
                       </div>
                       <div  class="py-2">
                         <input type="submit" name="login" value="Login" class="form-control btn btn-success">
                       </div>
                   </div>
                 </div>
                 </form>
              </div>
          </div>
          <div class="col-lg-8">
            <?php
                
                    if(isset($_POST['reg_button'])){
                        $buyer_name = $_POST['buyer_name'];
                        $buyer_email = $_POST['buyer_email'];
                        $buyer_phone = $_POST['buyer_phone'];
                        $buyer_pass = $_POST['buyer_pass'];
                        $buyer_city = $_POST['buyer_city'];
                        $buyer_company = $_POST['buyer_company'];
                    
                        $insert = "INSERT INTO tbl_buyer_regi(buyer_name,buyer_email,buyer_phone,buyer_pass,buyer_city,buyer_company)
                        VALUE('$buyer_name','$buyer_email','$buyer_phone','$buyer_pass','$buyer_city','$buyer_company') ";
                        $run = mysqli_query($con,$insert);
                        if($run){
                            echo "<h3 class='text-success text-center'>Buyer registration Success </h3>";
                        }else{
                            echo "<h3 class='text-danger'>Buyer registration Not Success </h3>";
                        }
                    }
            ?>
              <form action="" method="POST">
          <div class="row">

                 <div class="card">
                   <div class="card-body">
                       <div class="row py-4">
                           <div class="col-lg-6">
                                <h5 class="card-title">User name</h5>
                                <input type="text" name="buyer_name" class="form-control">
                           </div>
                           <div class="col-lg-6">
                               <h5 class="card-title">User Email</h5>
                                <input type="text" name="buyer_email" class="form-control">
                           </div>
                           <div class="col-lg-6">
                                <h5 class="card-title">Company name</h5>
                                <input type="text" name="buyer_company" class="form-control">
                           </div>
                           <div class="col-lg-6">
                               <h5 class="card-title">Phone No</h5>
                                <input type="text" name="buyer_phone" class="form-control">
                           </div>
                           <div class="col-lg-6">
                                <h5 class="card-title">City</h5>
                                <input type="text" name="buyer_city" class="form-control">
                           </div>
                           <div class="col-lg-6">
                               <h5 class="card-title">Password</h5>
                                <input type="text" name="buyer_pass" class="form-control">
                           </div>
                           <div class="py-3 d-flex justify-content-end">
                              <button class="btn btn-primary" name="reg_button">Register</button>
                           </div>
                           
                       </div>
                   
                 </div>
              </div>
          </div>
          </form>
      </div>
  </section>

<?php 
 require_once('footer.php');
?>
    