<?php

include_once 'db_connect.php';

$name=$_POST['name'];
//var_dump($name);
$email=$_POST['email'];
$tel=$_POST['tel'];
$option=$_POST['option'];
$gender=$_POST['gender'];


$stmt=$conn->prepare("insert into applicant_data(ap_name,email,ph_number,country,gender)values(?,?,?,?,?)");
$stmt->bind_param("sssss",$name,$email,$tel,$option,$gender);
$stmt->execute();

//$result = array("msg"=>"registration successfully done");

$stmt->close();
$conn->close();
//echo json_encode($result);

?>