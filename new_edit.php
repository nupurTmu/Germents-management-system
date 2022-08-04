<?php
    require_once('header.php');
    ?>
<?php
   $get_id = $_GET['table_er_id'];
   $select="SELECT * FROM tbl_nupur WHERE id = '$get_id' ";
   $run = mysqli_query($con,$select);
   foreach($run AS  $rest){ ?>
     
<form action="" method="post">
        <p>Name</p>
        <input type="text" name="name" value="<?php echo $rest['name']; ?>" >
        <p>roll</p>
        <input type="text" name="roll" value="<?php echo $rest['roll']; ?>" >
        <p>class</p>
        <input type="text" name="class" value="<?php echo $rest['class']; ?>"  >
        <p>city</p>
        <input type="text" name="city" value="<?php echo $rest['city']; ?>">
        <br>
        <input type="submit" name="button" value="Update">
 </form>

 <?php } ?> 

 <?php 
     if(isset($_POST['button'])){
         $name = $_POST['name'];
         $roll = $_POST['roll'];
         $class = $_POST['class'];
         $city = $_POST['city'];

         $insert = "UPDATE tbl_nupur SET name='$name', roll='$roll', class='$class',city='$city'
         WHERE id='$get_id'";
         $run = mysqli_query($con,$insert);
         if($run){
             echo "update";         }
     }
     else{
         echo "fail";
     }


 ?>


