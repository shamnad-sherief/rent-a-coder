<?php
session_start();
require_once("../../connectionclass.php");
$obj=new ConnectionClass();
 $email=$_SESSION['email']; 
 $currentpassword=$_POST["currentpass"];
 $newpassword=$_POST["newpass"];
 $confirmpassword=$_POST["conpass"]; 
 $qry="select password from login where username='$email'"; 
 $password=$obj->GetSingleData($qry);
 if($password==$currentpassword)
 {
 	if($newpassword==$confirmpassword)
 	{
		 $qry="update login set password='$newpassword' where username='$email'";
		 $result=$obj->Manipulation($qry);
		 if($result['Status']=="true")
		 {
			 //echo $obj->alert("successfully updated","../adminhome.php");
		 	echo $obj->alert("successfully updated","../index.php");
		 }
		 else
		 {
			 echo $obj->alert("Something wrong","../changepassword.php");		 
		 }
	}
	else
	{
		echo $obj->alert("Failed ,try again","../changepassword.php");
	}
 }
 else
 {
 	echo $obj->alert("Check Current Password","../changepassword.php");
 }
 ?>