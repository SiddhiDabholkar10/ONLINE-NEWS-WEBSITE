
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title> Admin Dashboard </title>
   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href=" style/dashboard.css" rel="stylesheet">
    <style>
      .px-3:hover{
        background-color:#ff7575;
        border-radius: 3px;
        width:5rem;
        
      }
      .sign-out:hover{
        color:#000000 !important;

      }
    
    </style>
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><?php echo $_SESSION['email'];?></a>
      <div class="form-control form-control-dark w-100" type="text" placeholder="" aria-label="Search"></div>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link sign-out" style="color:#ebe134; " href="logout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link <?php if($page=='home'){echo 'active';} ?>  " href="home.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">
                  <span data-feather="file"></span>
                  Online News
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link <?php if($page=='news'){echo 'active';} ?> " href="news.php">
                  <span data-feather="shopping-cart"></span>
                  News
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link  <?php if($page=='category'){echo 'active';} ?>  " href="category.php">
                  <span data-feather="users"></span>
                  Categories
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($page=='Comments'){echo 'active';} ?>" href="comment.php">
                  <span data-feather="bar-chart-2"></span>
                  Contact Requests
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($page=='reviews'){echo 'active';} ?>" href="reviews.php">
                  <span data-feather="bar-chart-2"></span>
                  News Reviews
                </a>
              </li>
            </ul>

           
            </ul>
          </div>
        </nav>