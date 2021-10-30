<?php
require_once ('dbh.php');


$firstname = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$nid = $_POST['nid'];
$status = $_POST['status'];
$position = $_POST['position'];
$birthday =$_POST['birthday'];
//echo "$birthday";
    $sql = "INSERT INTO `employee` (`firstName`, `lastName`, `email`, `birthday`, `contact`, `nid`, `position`, `status`, `created_date`) VALUES ( '$firstname', '$lastName', '$email', '$birthday', '$contact','$nid', '$position', '$status', current_timestamp());";

$result = mysqli_query($conn, $sql);


if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='..//viewemp.php';
    </SCRIPT>");
    //header("Location: ..//aloginwel.php");
}

else{
    echo "".mysqli_error($conn);
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}

?>