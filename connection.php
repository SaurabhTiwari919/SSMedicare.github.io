<!-- <?php
if(isset($_POST['name'])){


$name= $_POST['name'];
$gender= $_POST['gender'];
$bloodgroup= $_POST['bloodgroup'];
$age= $_POST['age'];
//database connection
$conn= mysqli_connect("localhost","root","","testblood",3307);
if($conn-> connect_error){
    die("Connection failed dear!".mysqli_connect_error());
}
else{
    $sql="INSERT INTO 'blood'.'registration'('s.no.', 'name','gender','bloodgroup','age')
    values('null','$name','$gender','$bloodgroup','$age')";
//     $stmt->bind_param("sssi",$name,$gender,$bloodgroup,$age);
//     $stmt->execute();
    echo"Registered succesfully";
//     $stmt->close();
  
// }
if($conn->query($sql)==true){
    echo "succesfully registered !";
}
else{
    echo"ERROR $sql<br> $conn->error";
    
}
$conn->close();
}
}

?> -->
<?php 
if(isset($_GET['name']))
{
$server="localhost";
$username="root";
$password="";
$dbname="blood";
$con=mysqli_connect($server,$username,$password,$dbname);
if(!$con){
    die("connection to the datatbase is failed due to ".mysqli_connect_error());
}
// echo " ngreat successfully connected";
$name=$_GET['name'];
$gender=$_GET['gender'];
$bloodgroup= $_GET['bloodgroup'];
$age= $_GET['age'];
$sql="INSERT INTO `blood`.`registration` (`s.no.`, `name`, `gender`,`bloodgroup`,`age`) VALUES (NULL, '$name','$gender','$bloodgroup','$age');";
//  echo $sql;
 if($con->query($sql)==true){
// echo "succesfully registered";
echo '<script>
alert("succesfully registered! you may go back")

</script>';

// // echo "GO TO HOME" <a link="index.php" href= "#donor"> back </a>;
//  header("location: home.php");
 }
 else{
    echo " error : $sql<br> $con->error" ;
 }
 $con->close();
}

?>