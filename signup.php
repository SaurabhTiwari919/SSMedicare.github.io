<?php
$show= false;
$showerror=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
   
include 'partial/dbconnect.php';
$email=$_POST['emailid'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$name= $_POST['uname'];
$exists=false;
$existsql=" SELECT * FROM `users` WHERE name ='$name'";
$result = mysqli_query($conn,$existsql);
$numExistrows = mysqli_num_rows($result);

if($numExistrows > 0){
    // $exists=true;
    echo '<script>
       alert(" username already exists!")
  </script>';
}
else
{
    // $exists=false;

if($password==$cpassword)
{
$sql="INSERT INTO `users` ( `name`,`email`, `password`, `dt`) VALUES ('$name', '$email', '$password', current_timestamp());";
$presult = mysqli_query($conn, $sql);
if($presult)
{
$show = true;
header("location: login.php");

        }
    } else{
        echo '<script>
       alert(" passwords do not match !")
  </script>';
        }
  
}
if($password==NULL){
    echo '<script>
    alert("password cannot be null")
    </script>';
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <?php require 'partial/_nav.php' ?>
    <?php
    if ($show==true){
    echo '<div class="alert alert-success" role="alert">
  <strong>Successfully registered : </strong>
  Now you can log in ...
<button type="button" class="close" data-dismiss="alert" aria-label="close">
    <span aria-hidden="true">&times;</span></div>';
    }
    ?>
    <div class="container my-4" >
        <h1 class=" text-center">Signup to our website</h1>
    </div>
    <div class="container my-4" >
        <h6 class=" text-center">Your instinct can save someone's life 😇 !</h6>
    </div>
    <form  style="align-text: center" action="/mynewp/signup.php" method="post">
  <div class="mb-3">
  <label for="uname" class="form-label">User name</label>
    <input type="text" class="form-control" id="uname" aria-describedby="emailHelp" name="uname">
</div>
<div class="mb-3">
    <label for="emailid" class="form-label">Email address</label>
    <input type="email" class="form-control" id="emailid" aria-describedby="emailHelp" name="emailid" required >
 
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password" name="password">
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
  </div> <div id="emailHelp" class="form-text">Password must be same as earlier</div>

  <button type="submit" class="btn btn-primary">Sign Up</button>
  <button type="Reset" class="btn btn-primary">Reset</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>