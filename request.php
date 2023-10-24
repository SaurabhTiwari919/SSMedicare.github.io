<?php
if(isset($_POST['rname']))
{
$server="localhost";
$username="root";
$password="";
$dbname="blood";
$con=mysqli_connect($server,$username,$password,$dbname);
if(!$con){
    die("connection to the datatbse is faikled due to ".mysqli_connect_error());
}
// echo " great successfully connected";
$name=$_POST['rname'];
$bdrequest=$_POST['bloodrequest'];
$unit=$_POST['units'];
$time= $_POST['req_date'];
$phone= $_POST['phoneno'];
$email= $_POST['email'];
$rql ="INSERT INTO `blood`.`request`(`req_id`,`name`, `bloodrequest`, `units`,`phoneno`,`email`,`requested_date`,`required_till`) VALUES (NULL,'$name', '$bdrequest','$unit','$phone','$email',current_timestamp(),'$time');";
//  echo $rql;
 if($con->query($rql)==true){
    echo "<h1>Succesfully Requested!</h1><br>";
 }
 else{
    echo " error : $rql<br> $con->error" ;
 }
 $con->close();
}

?>