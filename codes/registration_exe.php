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

if($type=='Organization')
{
    $redirect_path='../or_registration.php';
}
else
{
    $redirect_path='../fr_registration.php';
}
if($count==0)
{
	if($password==$cpass)
	{
		if($type=='Organozation')
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
			$qry2="insert into org_reg(org_name,location,address,country,state,city,pincode,license_no,ph_no,email)values('$org_name','$location','$address','$country','$state','$city','$pincode','$license_no','$ph_no','$email')";
			$redirect_path='../or_registration.php';
			$qry3="insert into login(username,password,usertype,status) values('$email','$password','$type','inactive')";
			$exe2=$obj->Manipulation($qry2);
		    $exe3=$obj->Manipulation($qry3);
		    
		}
		elseif($type=='Freelancer')
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
		}
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
/*
if($count==0)
{
	if($password==$cpass)
	{
		if($type=='Organozation')
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
			$qry2="insert into org_reg(org_name,location,address,country,state,city,pincode,license_no,ph_no,email)values('$org_name','$location','$address','$country','$state','$city','$pincode','$license_no','$ph_no','$email')";
			$redirect='../or_registration.php';

		}
		elseif($type=='Freelancer')
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
			$years_worked=$_POST['years_worked'];
			$current_status=$_POST['current_status'];
			$area_of_study=$_POST['area_of_study'];
			//$password=$_POST['password'];
			//$cpass=$_POST['cpass'];
			$qry2="insert into free_reg(name,address,phno,degree,institution,university,other_quali,work_exp,work_place,post,years_worked,current_status,area_of_study,email)values('$name','$address','$phno','$degree','$institution','$university','$other_quali','$work_exp','$work_place','$post','$years_worked','$current_status','$area_of_study','$email')";
			$redirect='../or_registration.php';

		}

		$qry3="insert into login(username,password,usertype,status) values('$email','$password','$type','inactive')";

		$exe2=$obj->Manipulation($qry2);
		$exe3=$obj->Manipulation($qry3);
		if ($exe2['Status']=='true' && $exe3['Status']=='true') 
		{
			echo $obj->alert("Request sended successfully","../reg.php");
		}
		else
		{
			//echo $obj->alert("Something wrong",$redirect);		
		}
    }
	else
	{
		echo $obj->alert("Password Missmatch",$redirect);
	}
}
else
{
	echo $obj->alert("Email ID already Exist",$redirect);
}
*/
?>