<?php
session_start();
if(isset($_SESSION['username'])){
  header('Location: users.php');
}

include "../dbconnection.php";

if($_SERVER['REQUEST_METHOD'] == 'POST' ){
$username = $_POST['user'];
$password = $_POST['pass'];

$stmt = $conn->prepare("SELECT username , password FROM user WHERE username = ? AND password = ? AND active = 'on' ");
$stmt->execute(array($username,$password));
$count_row = $stmt->$rowCount();

if ($count_row > 0){
$_SESSION['username'] = $username;
$_SESSION["password"]= $password;
$cookie_name="user";
 $cookie_value=$_POST["user"];
          
 setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");

$msg = "Hello " . $_COOKIE["user"];
header('Location: users.php'); 
exit();

    }else{
        $msg = "PLEASE Enter Your Data";
    }};



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Beverages Admin | Login/Register</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
              <h1>Login Form</h1>
              <div>
                <input type="text" name="user" class="form-control" placeholder="Username" required="" />
              </div> 
              <div>
                <input type="password" name="pass" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <p>click here to log in<br>
                <a class="btn btn-info submit" href="">Log in</a></p>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-graduation-cap"></i></i> Beverages Admin</h1>
                  <p>©2016 All Rights Reserved. Beverages Admin is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
              <h1>Create Account</h1>
              <div>
                <input type="text" name="name" class="form-control" placeholder="Fullname" required="" />
              </div>
              <div>
                <input type="text" name="user" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" name="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
               
                <p name="Submit">
              click here to sign up<br>
                <a class="btn btn-info submit" href="signUp.php">Submit</a>
              </p>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-graduation-cap"></i></i> Cafe Admin</h1>
                  <p>©2016 All Rights Reserved. Beverages Admin is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
            

          </section>
        </div>
      </div>
    </div>
  </body>
</html>
