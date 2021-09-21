  <?php
session_start();
if ($_SESSION['email'] == true) {
    # code...
} else {
    header('location:admin_login.php');
}

$page = 'category';
include 'include/header.php';

?>

  <div style=" width: 70%; margin-left: 25%; margin-top: 10%">


		<form action="addcategory.php" method="post" name="categoryform" onsubmit=" return validateform() ">
			<h1>Add Categories</h1>
			<hr>
		  <div class="form-group">
		    <label for="email"> Category:</label>
		    <input type="text" placeholder="Enter Category Name " name="category" class="form-control" id="email">
		  </div>
		  <div class="form-group">
			  <label for="comment">Description:</label>
			 <textarea class="form-control" placeholder="Enter Category Description" rows="5" name="des" id="comment"></textarea>
			</div>
		  <input type="submit" name="submit" class="btn btn-primary" value="Add Category">
		</form>
		<script>

       function validateform(){
         var x = document.forms['categoryform']['category'].value;
          if (x=="") {
          	alert('Mention a Category!');
          	return false;
          }
       }

		</script>

  </div>
    <?php
include 'include/footer.php'

?>
  <?php
include 'db/connection.php';

if (isset($_POST['submit'])) {

    $category_name = $_POST['category'];
    $des = $_POST['des'];

    $cheak = mysqli_query($conn, "select * from category where category_name='$category_name' ");

    if (mysqli_num_rows($cheak) > 0) {
        echo "<script> alert('Declined! This category already exists.')</script>";
        exit();
    }

    $query = mysqli_query($conn, "insert into  category(category_name,description)values('$category_name','$des')");

    if ($query) {
        echo "<script> alert('Done! Category Added Successfully')</script>";
        echo "<script >window.location='http://localhost/news/category.php' ;</script>";

    } else {
        echo "<script> alert('Error! Please try Again')</script>";
    }
}

?>