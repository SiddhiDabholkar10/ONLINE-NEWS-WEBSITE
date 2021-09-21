<?php
 include('db/connection.php');
 $id=$_GET['del'];
 $query=mysqli_query($conn,"delete  from comment where id='$id'");
  if ($query) {
  	 echo "<script> alert('Comment deleted !')</script> ";
  	   echo "<script >window.location='http://localhost/news/comment.php' ;</script>";

  }else{
  	echo "Please Try again";
  }


?>