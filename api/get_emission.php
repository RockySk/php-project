<?php

include('dbconnect.php'); 
 
$output=array();
$v1=$_GET['f1'];
$result=mysqli_query($conn,"select * from qr_code_emmission WHERE v_no='$v1'");

$cnt=0;

while($r=mysqli_fetch_array($result))
{
    $cnt=1;
    $output[]=array("v_no"=>$r["v_no"],"o_name"=>$r["o_name"],"v_name"=>$r["v_name"],"emission_test_date"=>$r["emission_test_date"],"emission_valid_upto"=>$r["emission_valid_upto"],"v_type"=>$r["v_type"],"v_condition"=>$r["v_condition"],"carbon_value"=>$r["carbon_value"]);       
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