    <?php
    require_once('header.php');
    ?>
    <div class=" d-flex">
 <div class="col-lg-6 justify_content_center ">
 <!-- data insert code staart -->
<?php
if(isset($_POST['button'])){
    
    $name          =$_POST['name'];
    $product_name  =$_POST['product_name'];
    $category_name =$_POST['category_name'];
    $buyer_name    =$_POST['buyer_name'];
    $insert = "INSERT INTO tbl_new_test(name,product_name,category_name,buyer_name)
    VALUE('$name','$product_name','$category_name','$buyer_name')";
    $run = mysqli_query($con,$insert);

    if($run){
        echo"success";
    }
    else{
        echo"fail";
    }
}

?>
      <form action="" method="post">
        <p>Name</p>
        <input type="text" name="name">
        <p>product name</p>
        <input type="text" name="product_name">
        <p>category name</p>
        <input type="text" name="category_name">
        <p>buyer name</p>
        <input type="text" name="buyer_name">
        <br>
        <input type="submit" name="button" value="insert">
 </form>
</div>
 <!-- data insert code END -->



 <!-- ============================================ -->
  <!-- data Show  code staart -->
<div class="col-lg-6">

       
 <table class="table">
            <tr>
                <th>name</th>
                <th>product name</th>
                <th>buyer name</th>
                <th>category name</th>
            </tr>
  <?php
    $selct = "SELECT * FROM tbl_new_test";
    $run = mysqli_query($con,$selct);

    while($rest = mysqli_fetch_array($run)){  ?>
                    
            <tr>
                <td><?php  echo $rest['name'];?></td>
                <td><?php  echo $rest['product_name'];?></td>
                <td><?php  echo $rest['buyer_name'];?></td>
                <td><?php  echo $rest['category_name'];?></td>
                
            </tr>
      

   <?php }?>

   </table>


</div>
</div>

























<br>
<br>
<br>
<br>
<br>
<br>

<?php
require_once('footer.php');
?>
