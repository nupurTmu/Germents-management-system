<?php 
  require_once('header.php');
  require_once('side_bar.php');
?>
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
                             <form>
                             
        <div class="row py-4 box_shadow">
            <div class="col-lg-3 mb-3">
                <label for="date" class="form-label">Select Date</label>
                <input type="date" class="form-control" id="date" aria-describedby="emailHelp">
            </div>

            <div class="col-lg-3 mb-3">
            <label for="exampleInputEmail1" class="form-label">Select Source</label>
            <select class="form-select form-control mb-3" aria-label=".form-select-lg example">
                <option selected>Open this select menu</option>
                <option value="1">Facebook</option>
                <option value="2">Website</option>
                <option value="3">Others</option>
                </select>
            </div>
            <div class="col-lg-3 mb-3">
                <label for="exampleInputEmail1" class="form-label">Student Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-lg-3 mb-3">
            <label for="Mobile" class="form-label">Mobile Number</label>
            <input type="number" class="form-control" id="Mobile">
            </div>
            <div class="col-lg-3 mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email">
            </div>
            <div class="col-lg-3 mb-3">
            <label for="exampleInputEmail1" class="form-label">English Test</label>
            <select class="form-select form-control mb-3" aria-label=".form-select-lg example">
                <option selected>Open this select menu</option>
                <option value="1">IELTS</option>
                <option value="2">data base theke</option>
                <option value="3">Others</option>
                </select>
            </div>
            <div class="col-lg-3 mb-3">
                <label for="result" class="form-label"> Result</label>
                <input type="text" class="form-control" id="result">
                </div>

                <div class="col-lg-3 mb-3">
                <label for="Intake" class="form-label">Intake</label>
                <select class="form-select form-control mb-3" aria-label=".form-select-lg example">
                    <option selected>Open this select menu</option>
                    <option value="1">data base theke </option>
                    <option value="2">Intake</option>
                    <option value="3">Intake</option>
                    </select>
                </div>
                <div class="col-lg-3 mb-3">
                    <label for="Intake" class="form-label">Comments</label>
                    <select class="form-select form-control mb-3" aria-label=".form-select-lg example">
                        <option selected>Open this select menu</option>
                        <option value="1">data base theke </option>
                        <option value="2">Comments</option>
                        <option value="3">Comments</option>
                        </select>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label for="Test" class="form-label">English Test</label>
                        <input type="text" class="form-control" id="Test" aria-describedby="emailHelp">
                        </div>
                

                    <div class="col-lg-3 mb-3">
                        <label for="Intake" class="form-label">Status</label>
                        <select class="form-select form-control mb-3" aria-label=".form-select-lg example">
                            <option selected>Open this select menu</option>
                            <option value="1">data base theke </option>
                            <option value="2">Comments</option>
                            <option value="3">Comments</option>
                            </select>
                        </div>
                        <div class="col-lg-3 mb-3">
                        <label for="reminder" class="form-label">Reminder</label>
                        <input type="date" class="form-control" id="reminder" aria-describedby="emailHelp">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label for="details" class="form-label">Remarks</label>
                            <textarea class="form-control" name="" id="details" rows="2"></textarea>
                        </div>
                        <div class="col-lg-9 mb-3">
                            <div id="hidden_div">
                            <div class="row">
                            <div class="col-lg-4 mb-3">
                                <label for="Intake" class="form-label">Education</label>
                                <select class="form-select form-control mb-3" aria-label=".form-select-lg example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">data base theke </option>
                                    <option value="2">Comments</option>
                                    <option value="3">Comments</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <label for="Test" class="form-label">Result(Gpa)</label>
                                    <input type="text" class="form-control" id="Test" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <div class="row">
                                            <div class="col-lg-8">
                                            <label for="Test" class="form-label">Passing Year</label>
                                            <input type="text" class="form-control" id="Test" aria-describedby="emailHelp">
                                            </div>
                                            <div class="col-lg-4" style="margin-top: 32px;">
                                                <input type="button" class="form-control btn-sm btn-outline-success" value="Add" id="btn1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        <!-- ======================hidden_div1============================== -->
                            <div id="hidden_div1">
                                <div class="row">
                                <div class="col-lg-4 mb-3">
                                    <select class="form-select form-control mb-3" aria-label=".form-select-lg example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">data base theke </option>
                                        <option value="2">Comments</option>
                                        <option value="3">Comments</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <input type="text" class="form-control" id="Test"   placeholder="GPA" aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <div class="row">
                                                <div class="col-lg-8">
                                  
                                                <input type="text" class="form-control" id="Test"   placeholder="Year"aria-describedby="emailHelp">
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="button" class="form-control btn-sm btn-outline-success" value="Add" id="btn2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ======================hidden_div2============================== -->
                                <div id="hidden_div2">
                                    <div class="row">
                                    <div class="col-lg-4 mb-3">
                                        <select class="form-select form-control mb-3" aria-label=".form-select-lg example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">data base theke </option>
                                            <option value="2">Comments</option>
                                            <option value="3">Comments</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <input type="text" class="form-control" id="Test"  placeholder="GPA" aria-describedby="emailHelp">
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="Test"  placeholder="Year" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <input type="button" class="form-control btn-sm btn-outline-success" value="Add" id="btn3">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- ======================hidden_div3============================== -->
                                    <div id="hidden_div3">
                                        <div class="row">
                                        <div class="col-lg-4 mb-3">
                                          
                                            <select class="form-select form-control mb-3" aria-label=".form-select-lg example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">data base theke </option>
                                                <option value="2">Comments</option>
                                                <option value="3">Comments</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                           
                                                <input type="text" class="form-control" id="Test"   placeholder="GPA" aria-describedby="emailHelp">
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                          
                                                        <input type="text" class="form-control"  placeholder="Year"id="Test" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <input type="button" class="form-control btn-sm btn-outline-success" value="Add" id="btn4">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <!-- ======================hidden_div4============================== -->
                                    <div id="hidden_div4">
                                        <div class="row">
                                        <div class="col-lg-4 mb-3">
                                            <select class="form-select form-control mb-3" aria-label=".form-select-lg example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">data base theke </option>
                                                <option value="2">Comments</option>
                                                <option value="3">Comments</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <input type="text" class="form-control"id="Test" placeholder="GPA" aria-describedby="emailHelp">
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                        <input type="text" class="form-control" id="Test"placeholder="Year" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="col-lg-4">

                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       </div>
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
  <?php 
  require_once('footer.php');
?>