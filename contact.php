<?php
error_reporting(0);

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

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
    /* background: linear-gradient(315deg, #5de6de 0%, #b58ecc 74%) ; */
    background:#b4dab7;
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
.footer{
  padding-bottom:0;
  margin-bottom:0.6rem;
}
.btn{
  background-color:#75b8eb;
  border: 1.5px solid #13114f; 
  color:#13114f;
  position:absolute;
  left:45%;
  width:7rem;

}
.btn:hover{
   background-color:#13114f;
  border: 1.5px solid #13114f; 
  color:#75b8eb;
}



</style>
</head>
<body>
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

           <!-- <form action="search.php" method="post">
         <div class="input-group sm-3">
          <input type="text" name="search" class="form-control" placeholder="Search">
          <div class="input-group-append">
            <button class="btn" style="background-color:#9adccd;border:1.5px solid #070752;" name="submit" type="submit">Go</button>
          </div>
        </div>

      </form> -->
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
          <a class="p-2" href="sign_in.php">Sign In</a>



        </nav>
      </div>
      <div class="card" style="width:100%; height:300px; margin-top: 0.2rem; " >
      <img class="card-img-top" src="images/news_prism_bg.jpg" height="450px" alt="Card image">
        <div class="card-img-overlay" style="display:flex; justify-content:center; align-items:center; left:550px;">
          <h4 class="card-title" style="color:#63e3e9; margin-top:45%; font-size:2rem;">SVS24 NEWS &nbsp; </h4>
          <p class="card-subtitle"  style="color:#63e3e9;margin-top:45%; display:block">  ...more than a newspaper!</p>
        </div>
    </div>
    <div class="row mb-2">
    <?php
    include('db/connection.php');
     $query1 =mysqli_query($conn,"select * from news order by id desc limit 1,2 ");
      while($row=mysqli_fetch_array($query1)){
         $category=$row['category'];
         $date=$row['date'];
         $title=$row['title'];
         $thumbnail=$row['thumbnail'];
        
         


    ?>
    <?php } ?>
   

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main"     style=" padding-top:2rem;top: 11rem;border:1px solid rgba(0,0,0,0.3); box-shadow: 7px 7px 9px 1px rgb(0 0 255 / 20%); margin-top: 1rem;border-radius:5%; height:40rem;">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Contact Us
          </h3>


          <div class="blog-post">
     <form action="contact.php" method="post" class="needs-validation" novalidate>
      <div class="form-group">

    <label for="uname">Enter Your Name:</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter Your Name" name="name" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="pwd">Email:</label>
    <input type="email" class="form-control" id="pwd" placeholder="Enter email" name="email" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
 <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea name="comment" class="form-control" rows="10" id="comment"></textarea>
</div>
  <button type="submit"  style="box-shadow: 6px 6px 3px 1px rgb(0 0 255 / 20%);" name="submit" class="btn">Submit</button>
</form>

<?php
 include('db/connection.php');

 if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $comment=$_POST['comment'];

  $query=mysqli_query($conn,"insert into comment(name,email,comment)values('$name','$email','$comment') ");
  if ($query) {
    echo "<script>alert('your query has been sent ')";
    
  }else{
    echo "Error! Please try again";

  
  }
 }



?>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>


           
          </div><!-- /.blog-post -->
  
        
        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar" style="top: 11rem;">
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
$query1 = mysqli_query($conn, "select * from category");
while ($row = mysqli_fetch_array($query1)) {

    ?>
              <li><a href="category_page.php?single=<?php echo $row['category_name']; ?>"><?php echo $row['category_name']; ?></a></li>
              <?php }?>
            
            </ol>
          </div>

          <!-- <div class="p-3" style="line-height: 247%; border: 2px solid rgba(0,0,0,0.3); box-shadow: 7px 7px 9px 1px rgb(0 0 255 / 20%); margin-top: 1rem; margin-bottom: 1rem;">
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
          </div> -->

        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

    <!-- class="blog-footer -->
    <footer class="blog-footer footer" style=" color:#0caab0; text-align:center; background-color:#0f0c33; top:7.5rem;line-height:0.8;height: 4.9rem;
    font-size: 0.8rem;
    word-spacing: 0.3rem;margin-top:11.5rem; width:100%; padding-top:0.5rem; padding-bottom:0.5rem;" >
      <p style="padding-bottom:0rem;" >Copyright &copy; SVS24 NEWS | All rights reserved |</p>
      <p style="padding-bottom:0rem;">Follow us on <a href="#">twitter</a> and <a href="#">facebook</a></p>
      <p style="padding-bottom:0rem;"><a href="#">Back to top</a></p>
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
