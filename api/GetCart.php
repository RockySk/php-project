<?php

include('dbconnect.php'); 
 
$output=array();
$v1=$_GET['f1'];

$result=mysqli_query($conn,"select * from qr_code_penalty WHERE stringet_mno='$v1'");

$cnt=0;

while($r=mysqli_fetch_array($result))
{
    $cnt=1;
    $output[]=array("stringet_pdetails"=>$r["stringet_pdetails"],"stringet_amount"=>$r["stringet_amount"]);       
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