<?php
session_start();
require_once('../../ConnectionClass.php');
$obj=new ConnectionClass();
$page_action=$_REQUEST['action'];
$uname=$_REQUEST['name'];
 $qry="select status from login where username='$uname'";
 $exe=$obj->GetSingleData($qry);
//echo $exe;
if($page_action=='update')
    {
        if($exe=='inactive')
        {
            $qry2="update login set status='active' where username='$uname' and status='$exe'";
            $exe2=$obj->Manipulation($qry2);
            //var_dump($exe2);
            if($exe2['Status']=='true')
            {
                echo $obj->alert("Approved","../free_requests.php?sts=inactive");
            }
            else
            {
                echo $obj->alert("Something Went Wrong","../free_requests?sts=inactive");
            }
        }
        elseif($exe=='rejected')
        {
            $qry2="update login set status='active' where username='$uname'and status='$exe'";
            $exe2=$obj->Manipulation($qry2);
            //var_dump($exe2);
            if($exe2['Status']=='true')
            {
                echo $obj->alert("Approved","../free_requests?sts=rejected");
            }
            else
            {
                echo $obj->alert("Something Went Wrong","../free_requests?sts=rejected");
            }

        }
    }
        ?>