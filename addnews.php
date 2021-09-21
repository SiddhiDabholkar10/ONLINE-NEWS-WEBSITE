<?php

session_start();
if ($_SESSION['email'] == true) {

} else {
    header('location:admin_login.php');
}

$page = 'product';
include('include/header.php');
?>

<div style="margin-left:16% ; width:85%">
    <ul class="breadcrumb">
        <li class="breadcrumb-item active"><a href="home.php">Home</a></li>
        <li class="breadcrumb-item active"><a href="news.php">News</a></li>
        <li class="breadcrumb-item active">Add News</li>
    </ul>
    </div>
<div style="width:70%; margin-left:20%;">
    
    <form action="addnews.php" method="post" enctype="multipart/form-data" name="categoryform" onsubmit= " return validateform() ">
        <h1>Add News</h1>
        <hr>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" placeholder="Enter News Title" name="title" class="form-control"  id="category">
        </div>
        <div class="form-group">
            <label for="description">Description: </label>
            <textarea class="form-control" placeholder="Enter Description" name="description" rows="5" id="comment"></textarea>
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" name="date" class="form-control"  id="datefield"  max="<?php echo date('Y-m-d');?>" >
        </div>
        <div class="form-group">
            <label for="file">Thumbnail:</label>
            <input  style="height: 20%" type="file" name="thumbnail" class="form-control img-thumbnail"  id="file">
        </div>
        <div class="form-group">
            <label for="category">Category:</label>
            <select name="category" class="form-control">
            <?php
                include('db/connection.php');
                $query=mysqli_query($conn,"select * from category");
                while($row=mysqli_fetch_array($query)){

                    ?>
                    <option value="none" selected disabled hidden>Select an Option</option>
                    <option value="<?php echo $row['category_name'];?>"><?php echo $row['category_name'];?></option>
                
                <?php } ?>
            </select> 
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="Add News">
    </form>
    <script>
        function validateform(){
            var x = document.forms['categoryform']['title'].value;
            var y = document.forms['categoryform']['description'].value;
            var z = document.forms['categoryform']['category'].value;

            if (x==""){
                alert('Mention a News Title.');
                return false;
            }
            if (y==""){
                alert('Please enter Description.');
                return false;}
            if (y.length<100) {
                alert('Description should be minimum 100 characters.');
                return false;
            }

            var valueDate = document.getElementById('datefield').value;
            if ( valueDate== null || valueDate== '')
            {
                alert('Please Enter Valid Date.');
                return false;
            }

        }
    </script>


</div>
<?php
include('include/footer.php');
?>


<?php
    include('db/connection.php');
    if (isset($_POST['submit'])){
        $title=$_POST['title'];
        $description=$_POST['description'];
        $date=$_POST['date'];
        $thumbnail=$_FILES['thumbnail']['name'];
        $tmp_thumbnail = $_FILES['thumbnail']['tmp_name'];
        move_uploaded_file($tmp_thumbnail,"images/$thumbnail");
        $category=$_POST['category'];

        $query1=mysqli_query($conn,"insert into news(title,description,date,thumbnail,category) values('$title','$description','$date','$thumbnail','$category')");
        if($query1){
            echo "<script>alert('News Uploaded Successfully!')</script>";
        }else{
            echo "<script>alert('Declined! Please Try Again. ')</script>";

        }
    }
?>


