<?php

include('dbconnect.php'); 
 
$output=array();
$v1=$_GET['f1'];
$result=mysqli_query($conn,"select * from qr_code_drivining WHERE v_no='$v1'");

$cnt=0;

while($r=mysqli_fetch_array($result))
{
    $cnt=1;
    $output[]=array("v_no"=>$r["v_no"],"o_name"=>$r["o_name"],"v_name"=>$r["v_name"],"mno"=>$r["mno"],"address"=>$r["address"],"dob"=>$r["dob"],"validate_till"=>$r["validate_till"],"blood_group"=>$r["blood_group"],"doi"=>$r["doi"],"d_type"=>$r["d_type"]);       
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