<?php
session_start();
require_once('../../connectionclass.php');
$obj=new ConnectionClass();
$email=$_SESSION['email']; 
$page_action=$_REQUEST['action'];
if($page_action=='insert')
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
$files=$_FILES['file']['name'];
//echo $files."<br>";
$imgpath="../document/doc/";
$img_path=str_replace("\\","/",$imgpath);
$tmp=explode('.', $files);
$extension=end($tmp);
/*$expl=explode(".",$files);
$extension=end($expl);	*/
$files1=time()."b.".$extension;

try
{
move_uploaded_file($_FILES['file']['tmp_name'],$img_path.$files1);
//var_dump($_POST);
$qry1= "select count(*) from job_post where  job_post='$job_post'";
$count=$obj->GetSingleData($qry1);
//echo $count;
if($count!=0)
{
	echo $obj->alert("Job is already added", "../jobpost.php");
}
else
{
	$qry2="insert into job_post(job_post,category,description,type_of_pro,needed_skills,qualification,free_type,country1,lvl_of_exp,time_required,comp_mail,date,post_date,pro_file,sal_expected,status)values('$job_post','$category','$description','$type_of_pro','$needed_skills','$qualification','$free_type','$country','$lvl_of_exp','$time_required','$email','$da','$post_date','$files1','$sal_expected','$sts')";
	$exe2=$obj->Manipulation($qry2);
	//var_dump($exe2);
		if($exe2['Status']=='true')
		{
			echo $obj->alert("Successfully Inserted","../viewjobpost.php");
		}
		else
		{
		echo $obj->alert("Failed try again","../jobpost.php");	
		}
}
}
catch(Exception $e)
 {
echo $e.getMessage();
 }
 }
elseif($page_action=='delete')
{
	$regid=$_REQUEST['rid'];
	$query="select comp_email from job_post where job_id='$regid'";
	$exe=$obj->GetSingleData($query);
	$qry1="delete from job_post where job_id='$regid'";
	$exe1=$obj->Manipulation($qry1);
	if($exe1['Status']=='true')
	{
		echo $obj->alert("Successfully Deleted","../viewjobpost.php");
	}
	else
	{
	    echo $obj->alert("Something Went Wrong","../viewjobpost.php");
	}
}

    ?>