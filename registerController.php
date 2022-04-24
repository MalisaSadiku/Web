
<?php
$db=mysqli_connect('localhost','root','','restaurants_db');
session_start();
$username = "";
$email    = "";
$errors = array();

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $select1 = mysqli_real_escape_string($db, $_POST['select1']);
  
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }
  
  
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
      if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
      }
  
      if ($user['email'] === $email) {
        array_push($errors, "email already exists");
      }
      
    // }
    // if (count($errors) == 0) {
    //     $password = md5($password_1);//encrypt the password before saving in the database
  
        $query = "INSERT INTO users (username, email, password,user_admin) 
  			  VALUES('$username', '$email', '$password','$select1')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
    }
    if ($select1=='user') {
        header('location: login.php');
      }
      else if($select1=='admin'){
        header('location:login.php');
      }
      else {
        echo '<script>alert("You have to select ")</script>';
      
      }
      
   
  }
  if (isset($_POST['submitted'])) {
      $username = mysqli_real_escape_string($db, $_POST['username']);
      $password = mysqli_real_escape_string($db, $_POST['password']);
      $select = mysqli_real_escape_string($db, $_POST['select']);
  
      if (empty($username)) {
          array_push($errors, "Username is required");
      }
      if (empty($password)) {
          array_push($errors, "Password is required");
      }
  
      if ($select=='user') {
        header('location: home.php');
      }
      else if($select=='admin'){
        header('location:adminPage.php');
      }
      else {
    
        echo '<script>alert("You have to select ")</script>';
      
      }
  }


?>