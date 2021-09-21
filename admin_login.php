<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_Admin</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="style/admin_login.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');
    </style>

</head>
<body>
  <div class="container">
    <form action="admin_login.php" method="post">
      <h3>Admin Login</h3>
      <div class="form-group">
        <label for="email">Username:</label>
        <input autocomplete="off" type="username" class="form-control" placeholder="Enter email ID" name="email" id="email" style="text-transform:none ; font-family: 'Nunito', sans-serif; font-size:1rem;  border: 1.5px solid #00ffff;  background-color:rgba(0, 0, 0, 0.3); box-shadow:0 0 5px #00ffff inset; color:pink; ">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" name="password" placeholder="Enter password" id="pwd" style="text-transform:none ; font-family: 'Nunito', sans-serif; font-size:1rem; border: 1.5px solid #00ffff; background-color:rgba(0, 0, 0, 0.3); box-shadow:0 0 5px #00ffff inset; color:white;
">
      </div>
      <input type="submit" name="submit" class="btn btn-primary" value="login">
    </form>
  </div>

</body>
</html>

<?php
include('db/connection.php');
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($conn, "select * from admin_login where email='$email' AND password='$password' ");
    if ($query) {
        if (mysqli_num_rows($query) > 0) {
            $_SESSION['email'] = $email;
            header('location:home.php');
        } else {
            echo "<script> alert('Please Enter Valid Email Address and Password.'); </script>";
        }
    }

}
?>
