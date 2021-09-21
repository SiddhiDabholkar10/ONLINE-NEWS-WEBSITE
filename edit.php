<?php

session_start();
error_reporting(0);
if ($_SESSION['email'] == true) {

} else {
    header('location:admin_login.php');
}

$page = 'category';
include('include/header.php');
?>


<?php
    include('db/connection.php');
    $id=$_GET['edit'];
    $query=mysqli_query($conn,"select * from category where id='$id' ");
    while($row=mysqli_fetch_array($query)){
        $category=$row['category_name'];
        $des=$row['description'];
    }

?>
<div style="width:70%; margin-left:20%; margin-top:10%;">
    <form action="edit.php" method="post" name="categoryform" onsubmit= " return validateform() ">
        <h1>Update Categories</h1>
        <hr>
        <div class="form-group">
            <label for="category">Category:</label>
            <input type="text" name="category" class="form-control" placeholder="Enter news category" id="category"  value="<?php echo $category;?>">
        </div>
        <div class="form-group">
            <label for="comment">Description: </label>
            <textarea class="form-control" name="des" rows="5" id="comment"><?php echo $des; ?>
            </textarea>
            <input type="hidden" name="id" value="<?php echo $_GET['edit'];?>">
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="Update Category">
    </form>
    <script>
        function validateform(){
            var x = document.forms['categoryform']['category'].value;
            if (x==""){
                alert('Mention a Category');
                return false;
            }
        }
    </script>
</div>

<?php
include('db/connection.php');
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $category=$_POST['category'];
    $des=$_POST['des'];
    $query1=mysqli_query($conn,"update category set category_name='$category',description='$des' where id='$id' ");
    if($query1){
        echo "<script>alert('Category Updated Successfully!')</script>";
        echo  "<script>window.location='http://localhost/NEWS/category.php';</script>";
    }else{
        echo "<script>alert('Category Update Declined!')</script>";
        }
    }
?>


<?php
    include('include/footer.php');
?>
