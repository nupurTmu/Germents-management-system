<?php
    require_once('header.php');
    ?>
    <div class=" d-flex">
 <div class="col-lg-6 justify_content_center ">
 <!-- data insert code staart -->

      <form action="" method="post">
        <p>Name</p>
        <input type="text" name="name">
        <p>roll</p>
        <input type="text" name="roll">
        <p>class</p>
        <input type="text" name="class">
        <p>city</p>
        <input type="text" name="city">
        <br>
        <input type="submit" name="button" value="insert">
 </form>

 <?php

 if(isset($_POST['button'])){
    $name          =$_POST['name'];
    $roll          =$_POST['roll'];
    $class          =$_POST['class'];
    $city          =$_POST['city'];

     $insert="INSERT INTO tbl_nupur(name,roll,class,city)
     VALUE('$name','$roll','$class','$city')";

     $run=mysqli_query($con,$insert);
     
     if($run){
         echo"success";
     }
     
     else{

        echo"fail";
     }
 }
 ?>

 <!---data show-->
 
 
 
   <style>
       table tr  td{
          border: 1px solid; 
       }
   </style>
   <table >
         <tr>
                <th>name</th>
                <th>roll</th>
                <th>class</th>
                <th>city</th>
                <th>action</th>
         </tr>
         <?php
   $select="SELECT * FROM tbl_nupur";
   $run = mysqli_query($con,$select);
   foreach($run AS  $rest){ ?>
    
    
     <tr>
    <td> <?php  echo $rest['name']; ?></td>
    <td> <?php  echo $rest['roll']; ?></td>
    <td> <?php  echo $rest['class'];?></td>
    <td> <?php  echo $rest['city']; ?></td>
      <td>
       <a href = "new_edit.php?table_er_id=<?php echo $rest['id']; ?>" > Edit </a>||<a href = "delete.php?table_er_id=<?php echo $rest['id'];?>">Delete </a>
      </td>

    </tr>
   
  <?php } ?>
         

</table>