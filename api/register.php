<?php
 include('dbconnect.php');
 
$v1=$_REQUEST['f1'];
$v2=$_REQUEST['f2'];
$v3=$_REQUEST['f3'];
$v4=$_REQUEST['f4'];

 
$response = array();
 
$sql=mysqli_query($conn,"insert into admin values('$v1','$v3','$v2','$v4')");

 
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