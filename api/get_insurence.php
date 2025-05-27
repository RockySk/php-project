<?php

include('dbconnect.php'); 
 
$output=array();
$v1=$_GET['f1'];
$result=mysqli_query($conn,"select * from qr_code_insurence WHERE v_no='$v1'");

$cnt=0;

while($r=mysqli_fetch_array($result))
{
    $cnt=1;
    $output[]=array("v_no"=>$r["v_no"],"o_name"=>$r["o_name"],"v_type"=>$r["v_type"],"v_price"=>$r["v_price"],"insurence_date"=>$r["insurence_date"],"valid_upto"=>$r["valid_upto"],"insurence_amount"=>$r["insurence_amount"],"address"=>$r["address"]);       
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