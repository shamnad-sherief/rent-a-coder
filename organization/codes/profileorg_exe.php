<?php
session_start();
require_once('../../connectionclass.php');
$obj=new ConnectionClass();
$page_action=$_REQUEST['action'];
$uname1=$_SESSION['email'];
if($page_action=='update')
{           
	        $org_name=$_POST['org_name'];
			$location=$_POST['location'];
			$address=$_POST['address'];
			$country=$_POST['country'];
			$state=$_POST['state'];
			$city=$_POST['city'];
			$pincode=$_POST['pincode'];
			$license_no=$_POST['license_no'];
			$ph_no=$_POST['ph_no'];
			//$email=$_POST['email'];
			//$password=$_POST['password'];
			//$cpass=$_POST['cpass'];
			$qry2="update org_reg set org_name='$org_name',location='$location',address='$address',country='$country',state='$state',city='$city',pincode='$pincode',license_no='$license_no',ph_no='$ph_no' where email='$uname1'";
			$exe2=$obj->Manipulation($qry2);
		//var_dump($exe2);
		//var_dump($exe3);
		if ($exe2['Status']=='true') 
		{
			echo $obj->alert("Updated Successfully","../myaccount.php");
		}
		else
		{
			echo $obj->alert("Something wrong","../myaccount.php");		
		}

	}
?>