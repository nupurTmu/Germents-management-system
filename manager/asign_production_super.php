<?php 
  require_once('header.php');
  require_once('side_bar.php');
?>
  <!--  -------------- Main content Start---------------------------------------->
<?php
  
  if(isset($_GET['order_id'])){
     $order_id = $_GET['order_id'];
    $order_de = $_SESSION['order_id'] = "$order_id";
  }
?>

<?php 
  $select = "SELECT * FROM tbl_order WHERE order_id='$order_id'";
  $run = mysqli_query($con,$select);
  while($result = mysqli_fetch_array($run)){
     $total_qtye =  $result['product_quantity'];
  } 
    $select ="SELECT SUM(ass_quantity) AS total_qty FROM `tbl_assign_production` WHERE order_id='$order_id' ";
    $run = mysqli_query($con,$select);
    while($res = mysqli_fetch_array($run)){
    $totla =  $res['total_qty'];
    }
    $Sum = $total_qtye - $totla;
    ?>

 <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 ">
        <?php
            if(isset($_POST['save_order'])){
                    $supervisor_id = $_POST['supervisor_id'];
                    $quantity = $_POST['quantity'];
                    if($Sum < $quantity){
                        echo "<h4 class=' text-danger text-center'> Please check current quantity and try again</h4>";
                    }else{
                        $select = "SELECT * FROM tbl_assign_production WHERE  order_id='$order_id' AND supervisor_id='$supervisor_id'";
                        $run = mysqli_query($con,$select);
                         $chak = mysqli_num_rows($run)>0;
                        if($chak){
                          echo"<h1>data ache</h1>";
                          $update = "UPDATE tbl_assign_production SET ass_quantity=ass_quantity+'$quantity'  WHERE supervisor_id='$supervisor_id' AND order_id='$order_id'";
                          $run = mysqli_query($con,$update);
                          if($run){
                          echo "<h4 class='text-center text-success'>Production Assigned</h4>";
                          echo "<script>window.location='asign_production_super.php?order_id=$order_de'</script>";
                        }
                      }else{
                        echo"<h1>data nai</h1>";
                          $insert = "INSERT INTO tbl_assign_production(order_id,supervisor_id,ass_quantity)VALUES('$order_id','$supervisor_id','$quantity')";
                          $run = mysqli_query($con,$insert);
                          if($run){
                          echo "<h4 class='text-center text-success'>Production Assigned</h4>";
                          echo "<script>window.location='asign_production_super.php?order_id=$order_de'</script>";
                         }
                   
                      }
                    }
                  }
             ?>
            
        <form action="" method="POST">
            <div class="row border py-3">  
         
                <h4>Assign Supervisor</h4>
                <hr>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4  py-4 bg-success m-2">
                          <h5>Total quantity: ( <?php echo $total_qtye?> )</h5>
                        </div>
                        <div class="col-md-4 py-4 bg-primary m-2">
                          <h5>Current quantity: ( <?php echo $Sum;?>   ) </h5>
                        </div>
                    </div>
                 
                    <hr>
                   
                </div>
             
                <div class="col-md-4">
                   <label for="">Select Supervisor</label>
                   <select class="form-control" name="supervisor_id" id="">
                       <option>select supervisor</option>
                      <?php 
                         $select = "SELECT * FROM tbl_supervisor";
                         $run = mysqli_query($con,$select);
                         while($result = mysqli_fetch_array($run)){ ?>
                         <option value="<?php echo $result['id']?>"><?php echo $result['supervisor_name']?></option>

                       <?php  } ?>
                   </select>
                </div>
                <div class="col-md-4">
                    <label for="">Quantity</label>
                    <input type="number" name="quantity" required class=" form-control">
                </div>
             
                <div class="d-flex justify-content-center pt-2">
                    <button class=" btn  btn-success" name="save_order">Save</button>
                </div>
            </div>
            </form>
            <h4 class="mt-4">Assign  Order quantity   and supervisor name list</h4>
            <hr>
            <div class="row ">
           
              <table class="table table-hover border ">
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Supervisor Name </th>
                    <th>Assign Quantity</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $count = 1;
          $select = "SELECT * FROM `tbl_assign_production` 
                    INNER JOIN tbl_supervisor ON tbl_assign_production.supervisor_id = tbl_supervisor.id ";
                    $run = mysqli_query($con,$select);
                    while($result = mysqli_fetch_array($run)){ ?>
                   <tr>
                    <td><?php echo $count++;?></td>
                    <td><?php echo $result['supervisor_name']?></td>
                    <td><?php echo $result['ass_quantity']?></td>
                    <td><?php if($result['ass_quantity']=='0'){
                        echo"<p class='text-success'>Order complete</p>";
                    }else{
                        echo " <p class='text-primary'>Procesing</p>";
                    } ?>
                </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
         </div>
    </div>
</main>
    <!--  -------------- Main content End---------------------------------------->
<?php 
  require_once('footer.php');

?>
    