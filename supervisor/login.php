<?php
  $con = mysqli_connect('localhost','root','','management_system');
?>
<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>supervisor page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
      body{
        background-image: url(picture/pic2.jpg);
        background-size:cover;
        background-attachment:fixed;
      }
    </style>
</head>
<body>
    <section>
      <div class="container">
         <div class="row mt-5 pt-5">
           <div class="col-lg-4"></div>
           <div class="col-lg-4">
               <div class="card">  

               <?php
                    if(isset($_POST['login'])){
                    $username = $_POST['username'];
                    $pass = $_POST['pass'];

                    $select_q = "select * from tbl_supervisor where  supervisor_name = '$username' AND password ='$pass'";
                    $run = mysqli_query($con,$select_q);
                     $check = mysqli_num_rows($run);
                      if($check== 1){
                        $_SESSION['username']  = "$username";
                      header("Location:index.php");  
                    }else{
                        echo"<h4 class='pt-2' style='color:red; text-align:center '>Incorrect name Or  Password</h4>";
                    }
                    }
                  
                  ?>

                   <div class="card-header">
                      <h4 class="color text-center py-3">Login Supervisor</h4>
                   </div>
                   <div class="card-body">
                            <form action="" method="POST"  class="form">
                                <label for="">User Name</label>
                                <input type="text" name="username" class="form-control"> <br>
                                <label for="">User Password</label>
                                <input type="password" name="pass" class="form-control" > <br>
                                <div class="div">
                                  <div class="d-flex">
                                    <input type="submit" name="login" value="Login" class="btn btn-primary">
                                  </div>
                                  <div class=" d-flex justify-content-end"><a style="text-decoration:none;" href="register.php">Register</a></div>
                                </div>
                               
                            </form>
                      </div>
                  </div>
             </div>
           <div class="col-lg-4">
                   
           </div>
         </div>
      </div>
    </section>
</body>
</html>
