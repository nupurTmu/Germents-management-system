<?php 
  require_once('header.php');
  require_once('side_bar.php');
?>
  <!--  -------------- Main content Start---------------------------------------->

       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 border">
                        <h4 class="mt-2"> Product list</h4>
                        <hr>
                        <div class="row">
                           <table class="table table-striped table-responsive">
                             <thead>
                               <tr>
                                 <th>sl.no</th>
                                 <th>product name</th>
                                 <th> description</th>
                                 <th> image</th>
                                 <th> type</th>
                                 <th> price</th>
                                 <th>Action</th>
                               </tr>
                             </thead>
                             <tbody>
                                 <?php
                                  $count=1;
                                   $select = "SELECT * FROM tbl_product";
                                   $run = mysqli_query($con,$select);
                                   while($result = mysqli_fetch_array($run)){ ?>
                                        <tr>
                                            <td> <?php echo $count++; ?></td>
                                            <td><?php echo $result['product_name']?></td>
                                            <td> <?php echo $result['product_description']?></td>
                                            <td><?php echo $result['product_type']?></td>
                                            <td> <?php echo $result['product_price']?></td>
                                            <td> <img  style="width:100px;" src="picture/<?php echo $result['product_imgae']?>" alt=""></td>
                                            <td><button class="btn btn-success">Edit</button> <button class="btn btn-danger">delete</button></td>
                                        </tr>
                                <?php   } ?>
                             </tbody>
                           </table>
                        </div>
                    </div>
                </main>
                  <!--  -------------- Main content End---------------------------------------->
<?php 
  require_once('footer.php');

?>