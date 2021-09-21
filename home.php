<?php
session_start();
if($_SESSION['email']==true){
 

}else{
  header('location:admin_login.php');
}
$page='home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <?php
include('include/header.php');
?>


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <!-- <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
               
              </button> -->

            </div>
          </div>

          
            <iframe width="100%" height="500rem" src="https://datastudio.google.com/embed/reporting/7efe4764-07b9-4d31-a9b1-02c29d209439/page/JgD" frameborder="0" style="border:0" allowfullscreen></iframe>
          

          
          
        </main>
      </div>
    </div>
    <?php
include('include/footer.php');
?>

</body>
</html>


