<?php
session_start();
require_once("../../connectionclass.php");
$obj=new ConnectionClass();
$page_action=$_REQUEST['action'];
 $email=$_SESSION['email'];
if($page_action=='insert')
{
 $da=date('Y-m-d');
 $bid=$_POST["id"]; 
 $post_date=$_POST["dt"];
 $amount=$_POST["amount"];
 $status=$_POST["status"];
 $qry11= "select count(*) from bidding where  job_id='$bid' and bstatus='Accept'";
 echo $count1=$obj->GetSingleData($qry11);

 $qry1= "select count(*) from bidding where  job_id='$bid' and email='$email'";
$count=$obj->GetSingleData($qry1);
//echo $count;
if($count!=0)
{
	echo $obj->alert("Bidding is already added", "../viewbidding.php?job_id=".$bid);
}
elseif($count1!=0)
{
	echo $obj->alert("Bidding is already accepted by someone", "../viewbidding.php?job_id=".$bid);
}
else
{
 $qry2="insert into bidding(job_id,date,amount,bstatus,email)values('$bid','$da','$amount','$status','$email')";
	$exe2=$obj->Manipulation($qry2);
	//var_dump($exe2);
		if($exe2['Status']=='true')
		{
			echo $obj->alert("Successfully Sent","../viewbidding.php?job_id=".$bid);
		}
		else
		{
		echo $obj->alert("Failed try again","../viewbidding.php?job_id=".$bid);	
		}
}
}
else
{
    echo $obj->alert("Error","../viewbidding.php?job_id=".$bid);	
}
?>
