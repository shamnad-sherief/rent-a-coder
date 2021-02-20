<?php
session_start();
require_once('../../connectionclass.php');
$obj=new ConnectionClass();
$email=$_SESSION['email']; 
$jobrid=$_REQUEST['jid'];
$page_action=$_REQUEST['action'];
if($page_action=='insert')
{

$description=$_POST['description'];
//echo $description."<br>";
$files=$_FILES['file']['name'];
//echo $files."<br>";
$imgpath="../documentadd/docadd/";
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
	$qry2="insert into task(job_id,document,description1,email)values('$jobrid','$files1','$description','$email')";
	$exe2=$obj->Manipulation($qry2);
	//var_dump($exe2);
		if($exe2['Status']=='true')
		{
			echo $obj->alert("Successfully Inserted","../adddocument.php?jid=$jobrid");
		}
		else
		{
		echo $obj->alert("Failed try again","../adddocument.php?jid=$jobrid");	
		}
}
catch(Exception $e)
 {
echo $e.getMessage();
 }
 }


    ?>