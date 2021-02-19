<?php
session_start();
require_once('../../connectionclass.php');
$obj=new ConnectionClass();
$page_action=$_REQUEST['action'];
$bid=$_REQUEST['id'];
$jid=$_REQUEST['jid'];
$mail=$_REQUEST['mail'];
$email=$_SESSION['email']; 
 $da=date('Y-m-d');
 $qry="select bstatus from bidding where bid_id='$bid'";
 $exe=$obj->GetSingleData($qry);
//echo $exe;
if($page_action=='update')
    {
        if($exe=='Active')
        {
            $qry2="update bidding set bstatus='Accept' where job_id='$jid' and bid_id='$bid'";
            $exe2=$obj->Manipulation($qry2);
            //var_dump($exe2);
            $qry5="update bidding set bstatus='Reject' where job_id='$jid' and bid_id!='$bid'";
            $exe4=$obj->Manipulation($qry5);
            //var_dump($exe2);
            
            $qry="insert into request(oemail,femail,job_id,status,accepted_date,pro_percentage,complete_date)values('$email','$mail','$jid','Accept','$da',0,'00-00-0000')";
            $exe5=$obj->Manipulation($qry);
              //var_dump($exe5);
            if($exe2['Status']=='true' && $exe5['Status']=='true' && $exe4['Status']=='true')
            {
              
                echo $obj->alert("Approved","../request.php?job_id=".$jid);
            }
            else
            {
                echo $obj->alert("Something Went Wrong","../viewbidding.php?job_id=".$jid);
            }
        }
    }
        ?>