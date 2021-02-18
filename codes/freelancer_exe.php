<?php
require_once('../connectionclass.php');
$obj=new ConnectionClass();

//var_dump($_POST);
 $type=$_REQUEST['type'];

 $email=$_POST['email'];	
 $password=$_POST['password'];
 $cpass=$_POST['cpass'];

 $qry="select count(*) from login where username='$email'";
 $count=$obj->GetsingleData($qry);
 if($type=='Freelancer')
{
    $redirect_path='../fr_registration.php';
}

if($count==0)
{
	if($password==$cpass)
	{
		if($type=='Freelancer')
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
			//$password=$_POST['password'];
			//$cpass=$_POST['cpass'];
			$qry2="insert into free_reg(name,address,phno,degree,institution,university,other_quali,work_exp,work_place,post,years_worked,current_status,area_of_study,email,dob)values('$name','$address','$phno','$degree','$institution','$university','$other_quali','$work_exp','$work_place','$post','$years_worked','$current_status','$area_of_study','$email','$dob')";
			$redirect_path='../or_registration.php';
			$qry3="insert into login(username,password,usertype,status) values('$email','$password','$type','inactive')";
			$exe2=$obj->Manipulation($qry2);
		    $exe3=$obj->Manipulation($qry3);
		//var_dump($exe2);
		//var_dump($exe3);
		if ($exe2['Status']=='true' && $exe3['Status']=='true') 
		{
			echo $obj->alert("Request sended successfully","../reg.php");
		}
		else
		{
			echo $obj->alert("Something wrong",$redirect_path);		
		}

	}
	else
	{
		echo $obj->alert("Password Missmatch",$redirect_path);
	}
}
else
{
	//echo "Email ID already Exist";
	echo $obj->alert("Email ID already Exist",$redirect_path);
}
}
else
{
	echo $obj->alert("Something wrong",$redirect_path);
}
?>