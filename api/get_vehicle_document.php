<?php

include('dbconnect.php'); 
 
$output=array();
$v1=$_GET['f1'];
$result=mysqli_query($conn,"select * from qr_code_document WHERE v_no='$v1'");

$cnt=0;

while($r=mysqli_fetch_array($result))
{
    $cnt=1;
    $output[]=array("v_no"=>$r["v_no"],"register_date"=>$r["register_date"],"v_name"=>$r["v_name"],"v_type"=>$r["v_type"],"o_name"=>$r["o_name"],"address"=>$r["address"],"fuel"=>$r["fuel"],"manu_facture"=>$r["manu_facture"],"validate_upto"=>$r["validate_upto"],"seating_no"=>$r["seating_no"]);       
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