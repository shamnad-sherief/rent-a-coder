<?php
session_start();
require_once("../../connectionclass.php");
$obj=new ConnectionClass();
$page_action=$_REQUEST['action'];
if($page_action=='insert')
{
 $email=$_SESSION['email']; 
 $details=$_POST["details"];
 $rating=$_POST["rating"];
 $fid=$_POST["id"]; 
 $da=date('Y-m-d');
 $qry2="insert into feedback(details,rating,date,fromorg,tofree)values('$details','$rating','$da','$email','$fid')";
	$exe2=$obj->Manipulation($qry2);
	//var_dump($exe2);
		if($exe2['Status']=='true')
		{
			echo $obj->alert("Successfully Sent","../viewfeedback.php");
		}
		else
		{
		echo $obj->alert("Failed try again","../feedback.php");	
		}
}
elseif($page_action=='delete')
{
	$regid=$_REQUEST['rid'];
	$qry="select fromorg from feedback where feed_id='$regid'";
	$email=$obj->GetSingleData($qry);
	$qry1="delete from feedback where feed_id='$regid'";
	$exe1=$obj->Manipulation($qry1);
	//var_dump($exe1);
	if($exe1['Status']=='true')
	{
		echo $obj->alert("Successfully Deleted","../viewfeedback.php");
	}
	else
	{
	    echo $obj->alert("Something Went Wrong","../viewfeedback.php");
	}
}

    ?>