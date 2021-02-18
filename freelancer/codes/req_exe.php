<?php
session_start();
require_once('../../connectionclass.php');
$obj=new ConnectionClass();
$page_action=$_REQUEST['action'];
$uname1=$_SESSION['email'];
$rid=$_REQUEST['rid'];
if($page_action=='update')
{
            $da=date('Y-m-d');
            $bid=$_POST["id"]; 
            $org_mail=$_POST["org_mail"];
            $f_mail=$_POST["f_mail"];
            $status=$_POST["status"];
            $accepted_date=$_POST["accepted_date"];
            $progress=$_POST["pro_percentage"];
            $complete_date=$_POST["complete_date"];
            if($progress==100)
            {
            	$qry8="update request set status='Completed',pro_percentage='$progress',complete_date='$da' where job_id='$bid' ";
            	$exe8=$obj->Manipulation($qry8);
            		if ($exe8['Status']=='true') 
		             {
			           echo $obj->alert("Updated Successfully","../progress.php?rid=".$rid);
		             }
		            else
		             {
			           echo $obj->alert("Something wrong","../progress.php?rid=".$rid);		
		             }

            }
            	else
            	{

			   $qry2="update request set status='$status',pro_percentage='$progress',complete_date='$complete_date' where job_id='$bid' ";
			   $exe2=$obj->Manipulation($qry2);
		//var_dump($exe2);
			
		//var_dump($exe3);
		       if ($exe2['Status']=='true') 
		            {
			           echo $obj->alert("Updated Successfully","../progress.php?rid=".$rid);
		            }
		       else
		            {
			           echo $obj->alert("Something wrong","../progress.php?rid=".$rid);		
		            }

	            }
}
?>