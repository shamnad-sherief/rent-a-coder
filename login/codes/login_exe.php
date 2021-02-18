<?php
session_start();
require_once('../../connectionclass.php');
$obj=new ConnectionClass();
$username=$_POST['email'];
$password=$_POST['password'];
$qry="select usertype from login where username='$username' and password='$password' and status='active'";
$exe=$obj->GetSingleData($qry);
$_SESSION['email']=$username;
//var_dump($exe);
if($exe=='admin')
{
	header("location:../../admin/index.php");
}
elseif ($exe=='Freelancer') 
{
	header("location:../../freelancer/index.php");
}
elseif ($exe=='Organization') 
{
	header("location:../../organization/index.php");
}
/*elseif ($exe=='customer') 
{
	header("location:../../customer/index.php");
}*/
else
{
	//header("location:../login.php");
	echo $obj->alert("Invalid Username or password","../login.php");
}
?>