<?php
session_start();
require_once('../../connectionclass.php');
$obj=new ConnectionClass();
$page_action=$_REQUEST['action'];
$uname1=$_SESSION['email'];
if($page_action=='update')
{
            $name=$_POST['name'];
			$address=$_POST['address'];
			$phno=$_POST['phno'];
			
			$degree=$_POST['degree'];
			$institution=$_POST['institution'];
			$university=$_POST['university'];
			$other_quali=$_POST['other_quali'];
			$work_exp=$_POST['work_exp'];
			$work_place=$_POST['work_place'];
			$post=$_POST['post'];
			$dob=$_POST['dob'];
			$years_worked=$_POST['years_worked'];
			$current_status=$_POST['current_status'];
			$area_of_study=$_POST['area_of_study'];

			$qry2="update free_reg set name='$name',address='$address',phno='$phno',degree='$degree',institution='$institution',university='$university',other_quali='$other_quali',work_exp='$work_exp',work_place='$work_place',post='$post',years_worked='$years_worked',current_status='$current_status',area_of_study='$area_of_study',dob='$dob' where email='$uname1'";
			$exe2=$obj->Manipulation($qry2);
		//var_dump($exe2);
		//var_dump($exe3);
		if ($exe2['Status']=='true') 
		{
			echo $obj->alert("Updated Successfully","../profile.php");
		}
		else
		{
			echo $obj->alert("Something wrong","../profile.php");		
		}

	}
?>