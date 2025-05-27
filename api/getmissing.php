<?php

include('dbconnect.php'); 
 
$output=array();
$v1=$_GET['f1'];
$result=mysqli_query($conn,"select * from qr_code_missing_bike WHERE v_no='$v1'");

$cnt=0;

while($r=mysqli_fetch_array($result))
{
    $cnt=1;
    $output[]=array("v_no"=>$r["v_no"],"o_name"=>$r["o_name"],"address"=>$r["address"],"v_type"=>$r["v_type"],"v_name"=>$r["v_name"],"complete_date"=>$r["complete_date"],"desc_details"=>$r["desc_details"],"complete_station"=>$r["complete_station"]);       
}

  
$flag["code"]="0";

if($cnt>0)
{
    $flag["code"]="1";
    
    print(json_encode($output));
}
else
{   
    printf(json_encode("Error"));

} 

  

?>