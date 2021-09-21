<?php
    include('db/connection.php');
    $id=$_GET['del'];
    $query=mysqli_query($conn,"delete from category where id='$id'");
    if($query){
        echo "<script>alert('Category Deleted!')</script>";
        echo "<script>window.location='http://localhost/NEWS/category.php';</script>";


    }
    else{
        echo "<script>alert('Declined!Please Try Again.')</script>";

    }
?>