<?php

session_start();
error_reporting(0);
if ($_SESSION['email'] == true) {

} else 
header('location:admin_login.php');
$page = 'news';
include('include/header.php');
?>

<div style="margin-left:16% ; width:90%">
    <ul class="breadcrumb">
        <li class="breadcrumb-item active"><a href="home.php">Home</a></li>
        <li class="breadcrumb-item active">News</li>
    </ul>
    </div>
<div style="width:80%; margin-left:18%; ">
    <div class="text-right">
        <a class="btn btn-primary" href="addnews.php">Add News</a>        
    </div>

    <table class="table table-bordered">
        <tr>
        <th>ID</th>
        <th>Headline</th>
        <th>Description</th>
        <th width="90" style="text-align:center; margin:0 1px">Date</th>
        <th>Category</th>
        <th>Thumbnail</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
        <?php
            include('db/connection.php');
            $limit = 5;
            $page = $_GET['page'];
            // $offset=($page-1)*$limit;

            if ($page == "" || $page == 1) {
                $page1 = 0;
            } else {
                $page1 = ($page - 1) * 5;

            }

            $query=mysqli_query($conn,"select * from news order by id desc limit $page1,5");
            while($row=mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo substr($row['description'],0,100);?></td>
                    <td style="text-align:center; padding-left:0;padding-right:0;"><?php echo date("F jS, y", strtotime($row['date'])); ?></td>
                    <td><?php echo $row['category'];?></td>
                    <td><img  class="img img-thumbnail" src="images/<?php echo $row['thumbnail'];?>" alt="" width="150" height="150"></td>
                    <td><a class="btn btn-success btn-sm" href="news_edit.php?edit=<?php echo $row['id'];?>">Edit</a></td>
                    <td><a class="btn btn-danger btn-sm" href="news_delete.php?del=<?php echo $row['id'];?>">Delete</a></td>
                </tr>
                <?php } ?>
            </table>
            <ul class="pagination">
                <?php
                 if($page>1){
                ?>
                <li class="page-item "><a href="news.php?page=<?php echo ($page-1); ?>" class="page-link" >Previous</a></li> 
               <?php } ?>
              <?php

                    $sql=mysqli_query($conn,"select * from news");
                    $count=mysqli_num_rows($sql);
                    
                    $total_pages=ceil($count/$limit);
                        for ($b=1; $b <=$total_pages ; $b++) { 
                            
                        ?>
                            
                        <li class="page-item"><a class="page-link" href="news.php?page=<?php echo $b;?>"><?php echo $b; ?></a></li>
                        
                    
                        <?php 
                        }
                ?>
                <?php
                 if($total_pages>$page){
                ?>
                <li class="page-item "><a href="news.php?page=<?php echo ($page+1); ?>" class="page-link" >Next</a></li> 
               <?php } ?>
                
                
                        
                
            </ul>

</div>
<?php
    include('include/footer.php');
?>




