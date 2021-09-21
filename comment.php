<?php
session_start();
error_reporting(0);
if ( $_SESSION['email']==true) {
  # code...
}else
header('location:admin_login.php');
$page='Comments';
 include('include/header.php');

  ?>
  <div style="margin-left:16%;  width: 90%;">
        <ul class="breadcrumb">
          <li class="breadcrumb-item active"><a href="home.php">Home</a></li>
         
          <li class="breadcrumb-item active">Messages</li>
        </ul>       
  </div>
 <div style="width: 75%;margin-left: 20%; margin-top: 0%;">
  	   <h1>Contact Messages</h1>
			<hr>
<table class="table">
        <tr>
          <th>Id</th>
            <th>Name</th>
              <th>Email</th>
                <th>Comment</th>
                <th>Delete</th>
        </tr>
  <?php
 include('db/connection.php');
 include 'db/connection.php';
$limit = 5;
$page = $_GET['page'];
// $offset=($page-1)*$limit;

if ($page == "" || $page == 1) {
    $page1 = 0;
} else {
    $page1 = ($page - 1) * 5;

}

  $query=mysqli_query($conn,"SELECT * FROM `comment` order by id DESC limit $page1,5;");
while ($row=mysqli_fetch_array($query)) {
    ?>
		  <tr>
        <td><?php echo $row['id'];?></td>
         <td><?php echo $row['name'];?></td>
          <td><?php echo $row['email'];?></td>
           <td><?php echo $row['comment'];?></td>
           <td><a class="btn btn-danger" href="comment_delete.php?del=<?php echo $row['id'];?>">delete</a></td>
      </tr>
      <?php } ?>
</table>
<ul class="pagination">
                <?php
                 if($page>1){
                ?>
                <li class="page-item "><a href="comment.php?page=<?php echo ($page-1); ?>" class="page-link" >Previous</a></li> 
               <?php } ?>
              <?php

                    $sql=mysqli_query($conn,"select * from comment");
                    $count=mysqli_num_rows($sql);
                    
                    $total_pages=ceil($count/$limit);
                        for ($b=1; $b <=$total_pages ; $b++) { 
                            
                        ?>
                            
                        <li class="page-item"><a class="page-link" href="comment.php?page=<?php echo $b;?>"><?php echo $b; ?></a></li>
                        
                    
                        <?php 
                        }
                ?>
                <?php
                 if($total_pages>$page){
                ?>
                <li class="page-item "><a href="comment.php?page=<?php echo ($page+1); ?>" class="page-link" >Next</a></li> 
               <?php } ?>
                
                
                        
                
            </ul>


		
  </div>




  <?php
 include('include/footer.php');

  ?>
