<?php
$login=false;
$showerror=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include 'partial/dbconnect.php';
$name= $_POST['uname'];
$password= $_POST['password'];

$exists=false;

// if($password==NULL){
//     echo '<script>
//     alert("password cannot be null")
//     </script>';
// }
$sql=" Select * from users where name='$name' AND password='$password'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num == 1){
  $login = true;
  session_start();
  $_SESSION['loggedin'] = true;
  $_SESSION['uname'] = $name;
  header("location: home.php");

}
else{
  echo '<script>
  alert("Invalid credentials please try again 😞!")
 </script>';
}

}
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <?php require 'partial/_nav.php' ?>
    <?php
    if ($login==true){
    echo '<div class="alert alert-success" role="alert">
  <strong>Successfully done : </strong>
  Now you are logged  in...
<button type="button" class="close" data-dismiss="alert" aria-label="close">
    <span aria-hidden="true">&times;</span></div>';
    }
    ?>
    <div>
      Already have account?<strong>logIn</strong> <br>Otherwise 
      <a href="/mynewp/signup.php"><b>SignUp</b></a><br>
  </div>
    <div class="container my-4" >
        <h1 class=" text-center">Login to our website</h1>
    </div>
    <div class="container my-4" >
        <h6 class=" text-center">You are one step away to save the life 😇 !</h6>
    </div>
    <form  style="align-text: center" action="/mynewp/login.php" method="post">
    <div class="mb-3">
  <label for="uname" class="form-label">User name</label>
    <input type="text" class="form-control" id="uname" aria-describedby="emailHelp" name="uname">
</div>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
 
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>