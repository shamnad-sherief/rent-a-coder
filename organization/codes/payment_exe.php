<?php
session_start();
require_once('../../ConnectionClass.php');
$obj=new ConnectionClass();
$page_action=$_REQUEST['action'];
$uname=$_SESSION['email'];
$jid=$_REQUEST['job_id'];
  $qryy1="select card_no from bank where email='$uname'";
 $acc=$obj->GetSingleData($qryy1);
 //echo $acc;
 $qryy3="select oid from org_reg where email='$uname'";
 $oname=$obj->GetSingleData($qryy3);
 //echo $acc;
  $qryy2="select amount from bank where email='$uname'";
 $now=$obj->GetSingleData($qryy2);
 //echo $now;
if($page_action=='insert')
{
$name=$_POST['fid'];
$accno=$_POST['acc_no'];
//$accno."<br>";
$date = date("Y-m-d");
//echo $date;
$amount=$_POST['pay_amount'];
//echo $amount."<br>";
$qry10="select amount from bank where card_no='$accno' ";
$exe10=$obj->GetSingleData($qry10);
$qry8="select * from bank where card_no='$accno' ";
$exe8=$obj->GetSingleData($qry8);
if($exe8==0)
{
  echo $obj->alert("Not Exists","../bankdetails.php?job_id=".$jid);
}
else
{
$qry1= "select count(*) from payment where  job_id='$jid' and tofree='$name'";
$count=$obj->GetSingleData($qry1);
//echo $count;
if($count!=0)
{
	echo $obj->alert("Payment is already done", "../bankdetails.php?job_id=".$jid);
}
else
{
$newamount=$exe10+$amount;
$newam=$now-$amount;
	$qry2="INSERT INTO `payment`(`job_id`, `pay_date`, `pay_amount`, `tofree`, `card_no`, `from`) VALUES ('$jid','$date','$amount','$name','$accno','$oname')";
	$exe2=$obj->Manipulation($qry2);
	//var_dump($exe2);
	$qry="update bank set amount='$newam' where card_no='$acc'";
	$exe=$obj->Manipulation($qry);
	$qry9="update bank set amount='$newamount' where card_no='$accno'";
	$exe9=$obj->Manipulation($qry9);
		if($exe2['Status']=='true' && $exe['Status']=='true' && $exe9['Status']=='true')
		{
			echo $obj->alert("Successfully Sent","../bankdetails.php?job_id=".$jid);
		}
		else
		{
		echo $obj->alert("Failed try again","../bankdetails.php?job_id=".$jid);	
		}
        }
    }
}
    ?>