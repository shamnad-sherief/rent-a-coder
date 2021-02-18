<?php
session_start();
require_once("../../connectionclass.php");
$obj=new ConnectionClass();
$page_action=$_REQUEST['action'];
$email=$_SESSION['email']; 
$cid=$_REQUEST['cid'];
if($page_action=='update')
{
 $reply=$_POST['reply'];
 $da=date('Y-m-d');
 $qry2="update chatbox set reply='$reply' , date='$da' where chat_id='$cid' ";
	$exe2=$obj->Manipulation($qry2);
	//var_dump($exe2);
		if($exe2['Status']=='true')
		{
			echo $obj->alert("Successfully Send to organization","../chatbox.php");
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