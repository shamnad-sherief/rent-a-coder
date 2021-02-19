<?php
session_start();
require_once('../../connectionclass.php');
$obj=new ConnectionClass();
$page_action=$_REQUEST['action'];
 $uname=$_REQUEST['name'];
$qry="select status from login where username='$uname'";
 $exe=$obj->GetSingleData($qry);
//echo $exe;
if($page_action=='reject')
    {
        if($exe=='inactive')
        {

            $qry2="update login set status='rejected' where username='$uname' and status='$exe'";
            $exe2=$obj->Manipulation($qry2);
            //var_dump($exe2);
            if($exe2['Status']=='true')
            {
                echo $obj->alert("Rejected","../free_requests.php?sts=inactive");
            }
            else
            {
                echo $obj->alert("Something Went Wrong","../free_requests.php?sts=inactive");
            }
        }
        elseif($exe=='active')
        {

            $qry2="update login set status='rejected' where username='$uname' and status='$exe'";
            $exe2=$obj->Manipulation($qry2);
            //var_dump($exe2);
            if($exe2['Status']=='true')
            {
                echo $obj->alert("Rejected","../free_requests.php?sts=active");
            }
            else
            {
                echo $obj->alert("Something Went Wrong","../free_requests.php?sts=active");
            }
        }
    }
        ?>