<?php
 include('dbconnect.php');
 
$v1=$_REQUEST['f1'];
$v2=$_REQUEST['f2'];
$v3=$_REQUEST['f3'];
$v4=$_REQUEST['f4'];
$v5=$_REQUEST['f5'];

 
$response = array();
 
$sql=mysqli_query($conn,"INSERT INTO `qr_code_penalty`(`stringet_pdetails`, `stringet_amount`, `stringet_mno`, `stringet_uname`, `stringet_address`) VALUES ('$v1','$v2','$v3','$v4','$v5')");

 
if ( $sql == TRUE)
{
    $response["success"] = 1;
    $response["message"] = "Inserted successfully.";
    echo json_encode($response);
    
}
else
{
    $response["success"] = 0;
    $response["message"] = "Insertion failed.";
    echo json_encode($response);
}

?>