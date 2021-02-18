<?php
session_start();
require_once("../../connectionclass.php");
$obj=new ConnectionClass();
$page_action=$_REQUEST['action'];
 $email=$_SESSION['email']; 
 $qry="select oid from org_reg where email='$email'";
 $oid=$obj->GetSingleData($qry);
if($page_action=='insert')
{
 $details=$_POST["details"];
 $fid=$_POST["id"]; 
  $da=date('Y-m-d');
 $qry2="insert into chatbox(message,fid,oid,reply,date)values('$details','$fid','$oid','','$da')";
	$exe2=$obj->Manipulation($qry2);
	//var_dump($exe2);
		if($exe2['Status']=='true')
		{
			echo $obj->alert("Successfully Send to freelancer","../chatbox.php");
		}
		else
		{
		echo $obj->alert("Failed try again","../chatbox.php");	
		}
}
else
{
echo $obj->alert("Failed","../chatbox.php");
}

    ?>