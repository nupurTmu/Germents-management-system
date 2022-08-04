<?php 
 session_start();
 require_once('connect.php');
?>
<?php 
if(!isset($_SESSION['manager_name'])){
header("location:login.php");
}else{
echo $manager_name = $_SESSION['manager_name'];
$select= "SELECT * FROM tbl_manager WHERE manager_name ='$manager_name' limit 1";
$run = mysqli_query($con,$select);
while($rows = mysqli_fetch_array($run)){
$manger_id =  $rows['id'];
$manager_name =  $rows['manager_name'];
$_SESSION['id'] = "$manger_id";
$_SESSION['manager_name']="$manager_name";
}
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>manger dashboard</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
      
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php"><strong> Dashboard </strong></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
      
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button> -->
                </div>
            </form>
            <!-- Navbar-->
            <div class="notice_bord justify-content-center d-flex " style="color: rgb(228, 20, 20); font-size: 20px; margin-left: 30px; margin-right: 30px; letter-spacing: 3px;">
                <!-- <a style="color: white; font-size: 30px; text-decoration: none;" href=""><i class="fas fa-bell"></i></a> -->
            </div>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                  <b style="color:white; margin-right:30px">Manager Name : <?php echo $_SESSION['manager_name'];?></b> <a class="btn btn-outline-danger btn-sm" href="logout.php">Logout</a>
                </li>
            </ul>
        </nav>
        <!-- header section End ```````````````````````````-->