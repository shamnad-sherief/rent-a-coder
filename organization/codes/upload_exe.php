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
	$baid=$_REQUEST['id'];
	//echo $baid;
	$qry="select pro_file from job_post where job_id='$baid'";
     $result=$obj->GetSingleData($qry);
    //var_dump($result);
   //$val=$_FILES['file_path']['name'];
    //echo $val;
    
    $pah='../document/doc/';
            $str = str_replace('\\', '/', $pah);
            $pathn=$str.$result;
            if(is_file($pathn))
            unlink($pathn);

      $file=$_FILES['fileToUpload']['name'];
      $imgpath="../document/doc/";
      $img_path=str_replace("\\","/",$imgpath);    
     
      $extension=end(explode(".",$file));
      $files=time().".".$extension;
      try
      {
      	move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$img_path.$files);
      	
      	$query = "update job_post set  pro_file='$files' where job_id='$baid'";
      	$exeupdate=$obj->Manipulation($query);
      	//var_dump($exeupdate);
      
      	if($exeupdate['Status']=='true')
      	{
      		//echo $obj->alert("Successfully Updated","../jobview.php?rid=".$baid);
      	}
      	else
      	{
      		echo $obj->alert("Something Went Wrong","../jobview.php?rid=".$baid);
      	}
      }
      catch(Exception $e)
      {
      	echo $e.getMessage();
      }
  }
  ?>