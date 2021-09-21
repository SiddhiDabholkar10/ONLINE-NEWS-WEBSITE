<?php
error_reporting(0);
include('config.php');
$login_button = '';

if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];

 $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}

if(!isset($_SESSION['access_token']))
{

 $login_button = '<a href="'.$google_client->createAuthUrl().'"style="background:#9adccd; border:1.5px solid #070752; border-radius: 20px; color: #070752; display:block; font-weigth:bold; padding: 7px; text-align:center; text-decoration:none; width: 200px;position: relative; left: 450px; top: 60px">Login With Google</a>';
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>SVS24 NEWS</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="style/blog.css" rel="stylesheet">

    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style>
  html {
   height: 100%;
  }
  body{
    /* background-color:#cceeff; */
    height: 100%;
    margin: 0;
    background: linear-gradient(315deg, #5de6de 0%, #b58ecc 74%) ; 
    background-repeat: no-repeat;
    background-attachment: fixed;
    
  }
  .p-2 {
    color:#2ec4c9;
  }
  #google_translate_element .goog-te-gadget-simple {
    background-color:#9adccd !important;
    color: #070752;
    border:1.5px solid #070752 !important;
    border-radius:2rem !important;
  }
  .goog-te-gadget-icon {
    margin-left: 2.5px !important;
    margin-right: 2px !important;
    width: 17px !important;
    height: 17px !important;
    border: none !important;
    vertical-align: middle !important;
    border-radius:1rem !important
}
.goog-te-gadget-simple .goog-te-menu-value span {
    text-decoration: none !important;
}
.goog-te-gadget-simple .goog-te-menu-value span:hover{
    text-decoration: none !important;
}
.goog-te-gadget-simple .goog-te-menu-value {
    color: #070752;

}
.goog-te-gadget-simple .goog-te-menu-value:hover {
    text-decoration:none;

}
.p-2:hover{
  color:#04d9ff !important;
  text-decoration:none;
  transform:scale(1.2) !important;
}


</style>
  </head>

  <body>
    <div class="panel panel-default" style="margin-top:2rem;color:#070752;border-radius:2px; border: 1px solid rgba(0,0,0,0.3); box-shadow: 7px 7px 9px 1px rgb(0 0 255 / 20%);padding-left:2rem;align-items:center;justify-content:center;">
   <?php
   if($login_button == '')
   {
    echo '<h6 style="display:inline;margin-left:25%;">Name: '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h6><span style="margin:0 12px;"></span>';
    echo '<h6 style="display:inline;">Email: '.$_SESSION['user_email_address'].'</h6><span style="margin:0 12px;"></span>';
    echo '<h6 style="display:inline;background-color: #070752; border-radius:1.5px;padding-left:5px; padding-right:5px; "><a style="color: #2ec4c9;" href="out.php">Logout</h6>';
   }
   else
   {
    echo '<div align="center" >'.$login_button . '</div>';
   }
   ?>
   </div>

  

    <div class="container">


      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#"> <div id="google_translate_element"></div></a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo" href="#" style="color:#070752;">SVS24 NEWS</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">

           <form action="search.php" method="post">
         <div class="input-group sm-3">
         
        </div>

      </form>
          </div>
        </div>
      </header>
      
  

      <div class="nav-scroller py-1 mb-2" style="background: #012324;">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2" href="index.php">Home</a>
          <a class="p-2" href="category_page.php?single=<?php echo 'Politics'; ?>">Politics</a>
          <a class="p-2" href="category_page.php?single=<?php echo 'Business'; ?>">Business</a>
          <a class="p-2" href="category_page.php?single=<?php echo 'Health'; ?>">Health</a>
          <a class="p-2" href="category_page.php?single=<?php echo 'Technology'; ?>">Technology</a>
          <a class="p-2" href="category_page.php?single=<?php echo 'Entertainment'; ?>">Entertainment</a>
          <a class="p-2" href="category_page.php?single=<?php echo 'Sports'; ?>">Sports</a>          
          <a class="p-2" href="category_page.php?single=<?php echo 'World'; ?>">World</a>          
          <a class="p-2" href="contact.php">Contact Us</a>
          <a class="p-2" href="">Sign In</a>


        </nav>
      </div>

     <div class="card" style="width:100%; height:300px; margin-top: 0.2rem; " >
      <img class="card-img-top" src="images/news_prism_bg.jpg" height="450px" alt="Card image">
        <div class="card-img-overlay" style="display:flex; justify-content:center; align-items:center; left:550px;">
          <h4 class="card-title" style="color:#63e3e9;; font-size:2rem;">SVS24 NEWS &nbsp; </h4>
          <p class="card-subtitle"  style="color:#63e3e9; display:block">  ...more than a newspaper!</p>
        </div>
    </div>

      <div class="row mb-2">
    <?php
include 'db/connection.php';
$query1 = mysqli_query($conn, "select * from news order by id desc limit 1,2 ");
while ($row = mysqli_fetch_array($query1)) {
    $category = $row['category'];
    $date = $row['date'];
    $title = $row['title'];
    $thumbnail = $row['thumbnail'];

    ?>

        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">

            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary"><?php echo $category; ?></strong>
              <h3 class="mb-0">
                <a class="text-dark" href="single_page.php?single=<?php echo $row['id']; ?> "><?php echo $title; ?></a>
              </h3>
              <div class="mb-1 text-muted"><?php echo $date; ?></div>

              <a href="single_page.php?single=<?php echo $row['id']; ?> ">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="images/<?php echo $thumbnail; ?>" alt="Card image cap" width="150">
          </div>
        </div>
      <?php }?>

    </div>
    

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">


          <?php

include 'db/connection.php';
$limit = 5;
$page = $_GET['page'];
// $offset=($page-1)*$limit;

if ($page == "" || $page == 1) {
    $page1 = 0;
} else {
    $page1 = ($page - 1) * 5;

}


$query = mysqli_query($conn, "select * from news order by date desc limit $page1,5");
while ($row = mysqli_fetch_array($query)) {
    ?>
          <div class="blog-post">
            <h4 class="blog"> <a href="single_page.php?single=<?php echo $row['id']; ?>"><?php echo $row['title']; ?> </a></h4>
            <p class="blog-post-meta" style="color:rgba(0,0,0,0.8)"><?php echo $row['date']; ?> <a href="#"><?php echo $row['admin']; ?></a></p>

            <p><img class="img img-thumbnail" style="width:100%;" src="images/<?php echo $row['thumbnail']; ?>"  width="400" height="200" > </p>
            <hr>

            <blockquote>
              <?php echo substr($row['description'], 0, 300); ?>
               <a href="single_page.php?single=<?php echo $row['id']; ?> " class="btn btn-primary btn-sm">Read More</a>
            </blockquote>


            </ol>

          </div><!-- /.blog-post -->

          <?php }?>


             <ul class="pagination">
             <?php
                 if($page>1){
                ?>
                <li class="page-item "><a href="index.php?page=<?php echo ($page-1); ?>" class="page-link" >Previous</a></li> 
               <?php } ?>
              <?php

                  $sql = mysqli_query($conn, "select * from news");
                  $count = mysqli_num_rows($sql);
                  $total_pages = ceil($count / $limit);
                  for ($b = 1; $b <= $total_pages; $b++) {
              ?>


                    <li class="page-item"><a class="page-link" href="index.php?page=<?php echo $b;?>"><?php echo $b; ?></a></li>


          <?php
        }
        ?>
                <?php
                 if($total_pages>$page){
                ?>
                <li class="page-item "><a href="index.php?page=<?php echo ($page+1); ?>" class="page-link" >Next</a></li> 
               <?php } ?>      
               </ul>




        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3" style=" border: 1.5px solid rgba(0,0,0,0.3); box-shadow: 7px 7px 9px 1px rgb(0 0 255 / 20%); margin-top: 1rem;border-radius:10%; margin-bottom: 1rem;">
            <h4 class="font-italic">About Us</h4>
            <p class="mb-0">Welcome to<em>SVS24 News</em>The destination for news, blogs and original content offering coverage of India politics, entertainment, business, world news, technology and sports. </p>
          </div>

           <div class="p-3" style="line-height: 247%; border: 2px solid rgba(0,0,0,0.3); box-shadow: 7px 7px 9px 1px rgb(0 0 255 / 20%); margin-top: 1rem; margin-bottom: 1rem;">
            <h4 class="font-italic">Categories</h4>
            <hr>
            <ol class="list-unstyled mb-0">
               <?php
include 'db/connection.php';
$query2 = mysqli_query($conn, "select * from category");
while ($row = mysqli_fetch_array($query2)) {

    ?>
              <li><a href="category_page.php?single=<?php echo $row['category_name']; ?>"><?php echo $row['category_name']; ?></a></li>
              <?php }?>
            </ol>
          </div>

          <div class="p-3" style="line-height: 247%; border: 2px solid rgba(0,0,0,0.3); box-shadow: 7px 7px 9px 1px rgb(0 0 255 / 20%); margin-top: 1rem; margin-bottom: 1rem;">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>

          <div class="p-3" style="line-height: 247%; border: 2px solid rgba(0,0,0,0.3); box-shadow: 7px 7px 9px 1px rgb(0 0 255 / 20%); margin-top: 1rem; margin-bottom: 1rem;">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

    <footer class="blog-footer" style="color:#0caab0
; background-color:#0f0c33; height:7.5rem;">
      <p style="margin-top:-2rem;margin-bottom:1rem;">Copyright &copy; SVS24 NEWS | All rights reserved |</p>
      <p>Follow us on <a href="#">twitter</a> and <a href="#">facebook</a></p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
