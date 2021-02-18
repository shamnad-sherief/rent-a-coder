<?php
session_start();
require_once('../../ConnectionClass.php');
$obj=new ConnectionClass();
$email=$_SESSION['email']; 
$page_action=$_REQUEST['action'];
$jobrid=$_REQUEST['rid'];
if($page_action=='update')
{
$job_post=$_POST['job_post'];
//echo $job_post."<br>";
$category=$_POST['category'];
//echo $category."<br>";
$description=$_POST['description'];
//echo $description."<br>";
$type_of_pro=$_POST['type_of_pro'];
//echo $type_of_pro."<br>";
$needed_skills=$_POST['needed_skills'];
//echo $needed_skills."<br>";
$qualification=$_POST['qualification'];
//echo $qualification."<br>";
$free_type=$_POST['free_type'];
//echo $free_type."<br>";
$country=$_POST['country'];
//echo $country."<br>";
$lvl_of_exp=$_POST['lvl_of_exp'];
//echo $lvl_of_exp."<br>";
$time_required=$_POST['time_required'];
//echo $patime_requiredss."<br>";
 $da=date('Y-m-d');
$post_date=$_POST['post_date'];
//echo $post_date."<br>";
 $sal_expected=$_POST['sal_expected'];
//echo $sal_expected."<br>";
$sts=$_POST['status'];
//$cid=$_REQUEST['rid']
$qry1= "select count(*) from job_post where  job_post='$job_post'";
$count=$obj->GetSingleData($qry1);
//echo $count;

	$qry2="update job_post set job_post='$job_post',category='$category',description='$description',type_of_pro='$type_of_pro',needed_skills='$needed_skills',qualification='$qualification',free_type='$free_type',country1='$country',lvl_of_exp='$lvl_of_exp',time_required='$time_required',post_date='$post_date',sal_expected='$sal_expected',status='$sts' where job_id='$jobrid'";
	$exe2=$obj->Manipulation($qry2);
	//var_dump($exe2);
		if($exe2['Status']=='true')
		{
			echo $obj->alert("Successfully Updated","../viewjobpost.php?rid=$jobrid&type=$free_type");
		}
		else
		{
		echo $obj->alert("Failed try again","../jobpostedit.php?rid=$jobrid&type=$free_type");	
		}
}
    ?>