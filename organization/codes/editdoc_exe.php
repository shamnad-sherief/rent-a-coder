<?php
session_start();
require_once('../../connectionclass.php');
$obj=new ConnectionClass();
$page_action=$_REQUEST['action'];
//echo $page_action;
//=============================================================================================
//==============================================================================================
    if($page_action=='pdfupdate')
{
	$taskid=$_REQUEST['id'];
	//echo $baid;
  $jobrid=$_REQUEST['jid'];
  $description=$_POST['description'];
//echo $description."<br>";
	$qry="select document from task where task_id='$taskid'";
     $result=$obj->GetSingleData($qry);
    //var_dump($result);
   //$val=$_FILES['file_path']['name'];
    //echo $val;
    
    $pah='../documentadd/docadd/';
            $str = str_replace('\\', '/', $pah);
            $pathn=$str.$result;
            if(is_file($pathn))
            unlink($pathn);

      $file=$_FILES['fileToUpload']['name'];
      $imgpath="../documentadd/docadd/";
      $img_path=str_replace("\\","/",$imgpath);    
     
      $tmp=explode('.', $file);
      $extension=end($tmp);
      $files=time().".".$extension;
      try
      {
      	move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$img_path.$files);
      	
      	$query = "update task set  document='$files' , description1='$description' where task_id='$taskid'";
      	$exeupdate=$obj->Manipulation($query);
      	//var_dump($exeupdate);
      
      	if($exeupdate['Status']=='true')
      	{
      		echo $obj->alert("Successfully Updated","../adddocument.php?jid=$jobrid");
      	}
      	else
      	{
      		echo $obj->alert("Something Went Wrong","../adddocument.php?jid=$jobrid");
      	}
      }
      catch(Exception $e)
      {
      	echo $e.getMessage();
      }
  }
  ?>