<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
      
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
       
  
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html"><strong> Dashboard </strong></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
             <div class="company_name d-flex justify-content-center">
                <a href="index.html" style="color: white; font-size: 20px; text-decoration: none; margin-left: 50px; letter-spacing: 3px; font-style: italic;"><strong>GEO</strong> Plus</a>
             </div>
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- header section End ```````````````````````````-->
        <!-- side Nav section strat ```````````````````````````-->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Add_student_info" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                 Lead Information
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Add_student_info" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="add_lead_info.html">Add Information</a>
                                    <a class="nav-link" href="view_lead_info.html">View Information</a>
                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Add_student_info" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Student Information
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Add_student_info" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="add_student_info.html">Add Information</a>
                                    <a class="nav-link" href="view_student_info.html">View Information</a>
                                </nav>
                            </div>




                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                         GEO Plus
                    </div>
                </nav>
            </div>
  <!-- side Nav section END ```````````````````````````-->
  <!--  -------------- Main content Start---------------------------------------->

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add Lead Information</h1>
                        <ol class="breadcrumb mb-4 py-2">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Lead Info</li>
                        </ol>
                        <div class="row py-3 pb-3">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                             <form action="" method="POST">
                                    <div class="row py-4 box_shadow">
                                        <div class="col-lg-3 mb-3">
                                            <label for="skype" class="form-label">Skype ID</label>
                                            <input type="text" class="form-control" id="skype" aria-describedby="emailHelp">
                                         </div>
                                         <div class="col-lg-3 mb-3">
                                            <label for="WhatsApp" class="form-label">WhatsApp</label>
                                            <input type="text" class="form-control" id="WhatsApp" aria-describedby="emailHelp">
                                         </div>
                                         <div class="col-lg-3 mb-3">
                                            <label for="agent" class="form-label">Applied Agent</label>
                                           <select  class="form-control" name="" id="agent">
                                               <option value="">Select Agent </option>
                                               <option value="">Select Agent </option>
                                               <option value="">Select Agent </option>
                                               <option value="">Select Agent </option>
                                               <option value="">Select Agent </option>
                                           </select>
                                         </div>
                                         <div class="col-lg-3 mb-3">
                                            <label for="list" class="form-label">Document List</label>
                                            <input type="file" class="form-control" id="list" aria-describedby="emailHelp">
                                         </div>

                                  <!-- =================hide div 1================================== -->
                                  <div id="main">
                                    <div class="row">
                                         <div class="col-lg-3 mb-3">
                                            <label for="agent" class="form-label">Select University</label>
                                           <select  class="form-control" name="" id="agent">
                                               <option value="">Select University Name </option>
                                               <option value="">University Name</option>
                                               <option value="">University Name</option>
                                               <option value="">University Name</option>
                                               <option value="">University Name</option>
                                             
                                           </select>
                                         </div>
                                         <div class="col-lg-3 mb-3">
                                            <label for="agent" class="form-label">Select Subject</label>
                                           <select  class="form-control" name="" id="agent">
                                               <option value="">Select subject  Name </option>
                                               <option value="">Select subject  Name </option>
                                               <option value="">Select subject  Name </option>
                                               <option value="">Select subject  Name </option>
                                               <option value="">Select subject  Name </option>
                                               
                                           </select>
                                         </div>
                                         <div class="col-lg-3 mb-3">
                                            <label for="Lavel" class="form-label">Course Lavel</label>
                                            <input type="text" class="form-control" id="Lavel" aria-describedby="emailHelp">
                                         </div>
                                         <div class="col-lg-3">
                                             <div class="row">
                                                 <div class="col-lg-8">
                                                    <label for="agent" class="form-label">Select Status</label>
                                                    <select  class="form-control" name="" id="agent">
                                                        <option value="">Select Stutas </option>
                                                        <option value="">Select Stutas </option>
                                                        <option value="">Select Stutas </option>
                                                        <option value="">Select Stutas </option>
                                                    </select>
                                                 </div>
                                                 <div class="col-lg-4  form-label"  style="margin-top: 33px;">
                                                    <input type="button" class="form-control btn-sm btn-outline-success" value="Add" id="btn1">
                                                 </div>
                                            
    
                                             </div>
                                         </div>
                                         </div>
                                        </div>
                                         <!-- =================hide div 2================================== -->
                                         <div id="hide_div2">
                                            <div class="row">
                                            <div class="col-lg-3 mb-3">
                                           
                                              <select  class="form-control" name="" id="agent">
                                                  <option value="">Select University Name </option>
                                                  <option value="">University Name</option>
                                                  <option value="">University Name</option>
                                                  <option value="">University Name</option>
                                                  <option value="">University Name</option>
                                                
                                              </select>
                                            </div>
                                            <div class="col-lg-3 mb-3">
                               
                                              <select  class="form-control" name="" id="agent">
                                                  <option value="">Select subject  Name </option>
                                                  <option value="">Select subject  Name </option>
                                                  <option value="">Select subject  Name </option>
                                                  <option value="">Select subject  Name </option>
                                                  <option value="">Select subject  Name </option>
                                                  
                                              </select>
                                            </div>
                                            <div class="col-lg-3 mb-3">
                                             <input type="text" class="form-control" id="Lavel" aria-describedby="emailHelp">
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                               
                                                       <select  class="form-control" name="" id="agent">
                                                           <option value="">Select Stutas </option>
                                                           <option value="">Select Stutas </option>
                                                           <option value="">Select Stutas </option>
                                                           <option value="">Select Stutas </option>
                                                       </select>
                                                    </div>
                                                    <div class="col-lg-4  form-label" >
                                                        <input type="button" class="form-control btn-sm btn-outline-success" value="Add" id="btn2">
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                         <!-- =================hide div 3================================== -->
                                         <div id="hide_div3">
                                            <div class="row">
                                      
                                            <div class="col-lg-3 mb-3">
                                   
                                              <select  class="form-control" name="" id="agent">
                                                  <option value="">Select University Name </option>
                                                  <option value="">University Name</option>
                                                  <option value="">University Name</option>
                                                  <option value="">University Name</option>
                                                  <option value="">University Name</option>
                                                
                                              </select>
                                            </div>
                                            <div class="col-lg-3 mb-3">
                                             
                                              <select  class="form-control" name="" id="agent">
                                                  <option value="">Select subject  Name </option>
                                                  <option value="">Select subject  Name </option>
                                                  <option value="">Select subject  Name </option>
                                                  <option value="">Select subject  Name </option>
                                                  <option value="">Select subject  Name </option>
                                                  
                                              </select>
                                            </div>
                                            <div class="col-lg-3 mb-3">
                                   
                                               <input type="text" class="form-control" id="Lavel" aria-describedby="emailHelp">
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                      
                                                       <select  class="form-control" name="" id="agent">
                                                           <option value="">Select Stutas </option>
                                                           <option value="">Select Stutas </option>
                                                           <option value="">Select Stutas </option>
                                                           <option value="">Select Stutas </option>
                                                       </select>
                                                    </div>
                                                    <div class="col-lg-4  form-label" >
                                                        <input type="button" class="form-control btn-sm btn-outline-success" value="Add" id="btn3">
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                         </div>

                                                   <!-- =================hide div 4================================== -->
                                                   <div id="hide_div4">
                                                    <div class="row">
                                              
                                                    <div class="col-lg-3 mb-3">
                                           
                                                      <select  class="form-control" name="" id="agent">
                                                          <option value="">Select University Name </option>
                                                          <option value="">University Name</option>
                                                          <option value="">University Name</option>
                                                          <option value="">University Name</option>
                                                          <option value="">University Name</option>
                                                        
                                                      </select>
                                                    </div>
                                                    <div class="col-lg-3 mb-3">
                                                     
                                                      <select  class="form-control" name="" id="agent">
                                                          <option value="">Select subject  Name </option>
                                                          <option value="">Select subject  Name </option>
                                                          <option value="">Select subject  Name </option>
                                                          <option value="">Select subject  Name </option>
                                                          <option value="">Select subject  Name </option>
                                                          
                                                      </select>
                                                    </div>
                                                    <div class="col-lg-3 mb-3">
                                           
                                                       <input type="text" class="form-control" id="Lavel" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="row">
                                                            <div class="col-lg-8">
                                                              
                                                               <select  class="form-control" name="" id="agent">
                                                                   <option value="">Select Stutas </option>
                                                                   <option value="">Select Stutas </option>
                                                                   <option value="">Select Stutas </option>
                                                                   <option value="">Select Stutas </option>
                                                               </select>
                                                            </div>
                                                            <div class="col-lg-4  form-label" >
                                                                <input type="button" class="form-control btn-sm btn-outline-success" value="Add" id="btn4">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                 </div>
                                        <!-- =================hide div 5================================== -->
                                         <div id="hide_div5">
                                            <div class="row">
                                      
                                            <div class="col-lg-3 mb-3">
                                   
                                              <select  class="form-control" name="" id="agent">
                                                  <option value="">Select University Name </option>
                                                  <option value="">University Name</option>
                                                  <option value="">University Name</option>
                                                  <option value="">University Name</option>
                                                  <option value="">University Name</option>
                                                
                                              </select>
                                            </div>
                                            <div class="col-lg-3 mb-3">
                                             
                                              <select  class="form-control" name="" id="agent">
                                                  <option value="">Select subject  Name </option>
                                                  <option value="">Select subject  Name </option>
                                                  <option value="">Select subject  Name </option>
                                                  <option value="">Select subject  Name </option>
                                                  <option value="">Select subject  Name </option>
                                                  
                                              </select>
                                            </div>
                                            <div class="col-lg-3 mb-3">
                                   
                                               <input type="text" class="form-control" id="Lavel" aria-describedby="emailHelp">
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                      
                                                       <select  class="form-control" name="" id="agent">
                                                           <option value="">Select Stutas </option>
                                                           <option value="">Select Stutas </option>
                                                           <option value="">Select Stutas </option>
                                                           <option value="">Select Stutas </option>
                                                       </select>
                                                    </div>
                                                    <div class="col-lg-4  form-label" >
                                                        <!-- <input type="button" class="form-control" value="Add" id="btn3"> -->
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                         </div>
                                          <!-- =========== div end============== -->
                                          <div class="mb-3 justify-content-end d-flex">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                          </div>
                                        </div>
                                      </form>
                               </div>
                            <div class="col-lg-1"></div>


    
  
                       </div>
                    </div>
                </main>
                  <!--  -------------- Main content End---------------------------------------->
                  <!--  -------------- Footer content start---------------------------------------->
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; WebXpro 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script>
            document.getElementById("btn1").addEventListener("click",function(){
              var box1 = document.getElementById("hide_div2");
              if(box1){
                  box1.style.display="block";
                }
            });
            document.getElementById("btn2").addEventListener("click",function(){
              var box1 = document.getElementById("hide_div3");
              if(box1){
                  box1.style.display="block";
              }
            });
            document.getElementById("btn3").addEventListener("click",function(){
              var box1 = document.getElementById("hide_div4");
              if(box1){
                  box1.style.display="block";
              }
            });
            document.getElementById("btn4").addEventListener("click",function(){
              var box1 = document.getElementById("hide_div5");
              if(box1){
                  box1.style.display="block";
              }
            });

      </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
          <!--  -------------- Footer content End---------------------------------------->
