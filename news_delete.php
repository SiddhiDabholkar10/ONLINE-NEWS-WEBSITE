<?php
    include('db/connection.php');
    $id=$_GET['del'];
    $query=mysqli_query($conn,"delete from news where id='$id' ");
    if($query){
        echo "<script>alert('News Deleted!')</script>";
        echo "<script>window.location='http://localhost/NEWS/news.php';</script>";
    }
    else{
        echo "<script>alert('Declined!Please Try Again.')</script>";

    }
?>