<?php
// session_start();
// include "../dbconnection.php";
// if(isset($_POST['login'])){
//   // if(!empty($_POST['name']) && !empty($_POST['pwd'])){ //check form data
//   $name =$_POST['name'];
//   $pwd=$_POST['pwd'];
  
//   $sql=mysqli_query($conn,"SELECT * FROM `user` WHERE username = '$name' AND password = '$pwd'");
//   $row = mysqli_fetch_array( $sql);
//   if(is_array( $row)){
//     $_SESSION['username']=$row['username'];
//     $_SESSION['password']=$row['password'];

//     echo "<script>alert('welcome to our website..login successfully')</script>";
//   }else{
//     echo "<script>alert('sorry..your DATA not correct')</script>";
//   }
// }else{
//   echo "<script>alert('Please enter your data')</script>";
// }
//   $result = mysqli_query($conn,$sql);
//   $row_count = mysqli_num_rows( $result);
//   $row_data = mysqli_fetch_assoc($result);
//   if($row_count>0){
//     if(password_verify($_SESSION['password'],$row_data['password'])){
//       $cookie_name = "user";
//       $cookie_value = $_POST['name'];
//       setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

//       echo "<script>alert('welcome to our website..login successfully')</script>";
//     }else{
//       echo "<script>alert('sorry..your password not correct')</script>";
//     }

//   }else{
//     echo "<script>alert('sorry..your DATA not correct')</script>";
//   }
// }
// }else{
//   echo "<script>alert('Please enter your data')</script>";
//  }





?>


<?php
// if (isset($_POST['login'])) {
//   // Sanitize and validate user inputs
//   $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
//   $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

//   // Check if user exists in database
//   $sql = "SELECT * FROM users WHERE username = '$username'";
//   $result = mysqli_query($conn, $sql);

//   if (mysqli_num_rows($result) > 0) {
//     $row = mysqli_fetch_assoc($result);
//     // Verify password
//     if (password_verify($password, $row['password'])) {
//       // Successful login, start session and redirect to admin page
//       session_start();
//       $_SESSION['user_id'] = $row['id'];
//       header('Location: admin.php');
//     } else {
//       // Invalid password
//       $error = "Invalid password";
//     }
//   } else {
//     // Username not found
//     $error = "Invalid username";
//   }
// }

?>
<?php

// session_start();            //generate random session
// include "../dbconnection.php";

// $msg = "";

// //to start cookie
// if(isset($_POST['login'])){
  
//   if(!empty($_POST['name']) && !empty($_POST['pwd'])){ 
//     $name =$_POST['name'];
//    $pwd=$_POST['pwd'];
    
//     //check the db data
//     $data = $conn->query("SELECT * from `user` WHERE username = '$name' AND password = '$pwd'")->fetch_assoc();
//     foreach( $data as $row){
// //check form data 
//   $_SESSION['username']=$row['username'];
//  $_SESSION['password']=$row['password'] ;
//     }
    
   
// }
// $cookie_name="user";
// $cookie_value=$_POST['name'];

// setcookie($cookie_name,$cookie_value,time( )+(86400*30),"/");

// $msg= "Hello " .$_COOKIE['user'];

// }
//   else{
//       $msg="please, enter your data";
//   }




?>


<?php
session_start();
// include "../dbconnection.php";
if(isset($_POST['Login'])){
if(!empty($_POST['username']) && !empty($_POST['password'])){ //check form data 
            $_SESSION['username']=$_POST['username'];
            $_SESSION['password']=$_POST['password'];

            $msg="Welcome " .$_SESSION['username'] ;

}
  else{
      $msg="please, enter your data";
}


}

?>


<?php

// if($_SERVER["REQUEST_METHOD"] == "POST") {


  
//   $user_sname=$_REQUEST['sname'];
//   $password=$_REQUEST['pw'];
 
  
  
//   echo "welcome " . $user_fname . " " . $user_sname . " in our website .<br> are you want to save your password ".$password;


?>






