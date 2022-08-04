<?php 
  session_start();
  require_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Page</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <style type="text/css">
      body{
        background-image: url(picture/nu2.jpg);
        background-size:cover;
        background-attachment:fixed;
      }
    </style>
    </head>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center mt-5">
                            <div class="col-lg-5">
                                <div class="card  border-0 mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Admin Login</h3></div>
                                  
                                    <?php
                                        if(isset($_POST['login'])){
                                            $admin_name = $_POST['admin_name'];
                                            $admin_pass = $_POST['admin_pass'];

                                            $_SESSION['admin_name']="$admin_name";
                                            $select_q = "SELECT  * FROM  tbl_admin where admin_name ='$admin_name' AND admin_pass ='$admin_pass'";
                                            $run = mysqli_query($con,$select_q);
                                            $check = mysqli_num_rows($run);
                                            if($check== 1){
                                            header("Location:index.php");  
                                            }else{
                                            echo"<h4 class='py-3' style='color:red; text-align:center'>Incorrect name Or  Password</h4>";
                                            }
                                        }

                                    ?>
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="admin_name" type="text" placeholder="name@example.com" />
                                                <label for="inputEmail">User Name</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="admin_pass" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" name="login">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html"></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy;Nupur Akter@2021</div>
                            <div>
                                
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
