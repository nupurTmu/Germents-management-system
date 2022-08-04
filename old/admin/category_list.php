<?php 
  require_once('header.php');
  require_once('side_bar.php');
?>
  <!--  -------------- Main content Start---------------------------------------->

       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-4">Category List</h4>
                        <div class="row">
                        <table class="table" id="datatablesSimple">
                                <thead>
                                   <tr>
                                      <th scope="col">Sl.No</th>
                                      <th scope="col">Category Name</th>
                                      <th scope="col">Action</th>
                                   </tr>
                                </thead>
                              <tbody>
                             
                              <?php 
                                  $selct_production=" SELECT * FROM `tbl_category`"; 
                                   $run = mysqli_query($con,$selct_production);
                                   if($run){
                                      $count ="1";
                                   while($res = mysqli_fetch_array($run)){  ?>
                                     <tr>
                                      <th scope="row"><?php echo $count++; ?></th>
                                      <td><?php  echo $res['category_name'];?></td>
                                      <td><a class="btn btn-success btn-sm" href="">Edit</a> <a class="btn btn-sm btn-danger" href="">Delete</a></td>
                                   </tr>
                                <?php 
                                  } } 
                                ?>
                          </tbody>
                    </table> 
                </div>
            </div>
        </main>
                  <!--  -------------- Main content End---------------------------------------->
<?php 
  require_once('footer.php');

?>