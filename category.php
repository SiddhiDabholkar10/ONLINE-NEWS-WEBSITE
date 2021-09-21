<?php

session_start();
if ($_SESSION['email'] == true) {

} else {
    header('location:admin_login.php');
}
$page = 'category';
include('include/header.php');
?>
<div style="width:80%; margin-left:18%; margin-top:1rem;">
    <div class="text-right">
        <button class="btn" style="background-color:blue;"><a style="color:white; text-decoration:none;" href="addcategory.php">Add Category</a></button>
    </div>

    <table class="table table-bordered">
        <tr>
        <th>ID</th>
        <th>Category:Title</th>
        <th>Category: Description</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
        <?php
            include('db/connection.php');
            $query=mysqli_query($conn,"select * from category");
            while($row=mysqli_fetch_array($query)){
            
            ?>
        <tr>
            <td> <?php echo $row['id']; ?></td>
            <td><?php echo $row['category_name'];?></td>
            <td><?php echo substr($row['description'],0,200);?></td>
            <td><a href="edit.php?edit=<?php echo $row['id'] ?>" class="btn btn-success">Edit</a></td>
            <td><a href="delete.php?del=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></td>
            
        </tr>
        <?php } ?>
    </table>

</div>
<?php
include('include/footer.php');
?>



        
        