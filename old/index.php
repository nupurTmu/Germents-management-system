<?php 
  require_once('header.php');
?>
  <div class="main_content">
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-6 ">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="picture/garments_reopen_bd-696x430.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="picture/GcsBAWhZzHCiW3necayaxRcNAQ21tOlNP64h5LME.jpeg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="picture/img.jpeg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
          </div>
          <div class="col-lg-6 border">
            <div class="row">
              <div class="col-lg-6 mt-5">
                <div class="card bg-success py-5 text-white text-center">
                    <h4>Total Workers ( 
                      <?php
                           $cion= 1;
                            $sele = "select * from tbl_worker WHERE supervisor_id='$supervisor_id'";
                             $run = mysqli_query($con,$sele);
                            echo  $cont = mysqli_num_rows($run);
                           ?>
                      
                       )</h4>
                </div>
              </div>
              <div class="col-lg-6 mt-5 mb-5">
                <div class="card bg-primary py-5 text-white text-center">
                    <h4>Total Production ( <?php
                           $cion= 1;
                            $sele = "select SUM(qty) AS sum from tbl_production
                                INNER JOIN tbl_supervisor on tbl_production.supervisor_id = tbl_supervisor.id
                                WHERE tbl_supervisor.id = '$supervisor_id'";
                             $run = mysqli_query($con,$sele);
                             while($res = mysqli_fetch_array($run)){ ?>
                                <tr>
                                  <td><?php  echo $res['sum'] ." pcs";?></td>
                                </tr>
                                <?php  }  ?> )</h4>
                </div>
              </div>
              <div class="col-lg-6 mt-5">
                <div class="card bg-secondary py-5 text-white text-center">
                    <h4>Total Manager ( 
                      <?php
                           $cion= 1;
                            $sele = "select * from tbl_manager ";
                             $run = mysqli_query($con,$sele);
                            echo  $cont = mysqli_num_rows($run);
                           
                           ?>
                      )</h4>
                </div>
              </div>
              <div class="col-lg-6 mt-5">
                <div class="card bg-dark py-5 text-white text-center">
                    <h4>Total Supervisor ( 
                      <?php
                           $cion= 1;
                            $sele = "select * from tbl_supervisor ";
                             $run = mysqli_query($con,$sele);
                            echo  $cont = mysqli_num_rows($run);
                           
                           ?>
                      )</h4>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
<?php 
 require_once('footer.php');
?>
    