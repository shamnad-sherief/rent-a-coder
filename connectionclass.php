<?php
class ConnectionClass
{
public $db=null;
public function open()
{
$this->db=mysqli_connect('localhost','root','','rent_a_coder') or die('Error: ' . mysqli_error($myConnection));
	}
//==================INSERT DELETE UPDATE================
	public function Manipulation($qry)
	{
	$this->open();
	
	$response =array();
	try
	{
	$result=mysqli_query($this->db,$qry);
	if($result)
	$response['Status']="true";
	else
	throw new Exception(mysql_error());
	}
	catch(Exception $e)
	{
	$response['Status']="false";
	$response['Message']= $e->getMessage();
	
	}
	mysqli_close($this->db);
	return ($response);
}

//===================Get Values from tables (more than one row)=========
public function GetTable($qry)
{
$this->open();
    try
	{
	$result=mysqli_query($this->db,$qry); 
	if($result)
	{
	    $data = array();
		while ($row=mysqli_fetch_assoc($result))
		{
		$data[ ] = $row;
		}
		return $data;
		}
	else
	throw new  Exception(mysql_error());
	}
	catch(Exception $e)
	{
	return $e->getMessage();
	}
	mysql_close();
}


public function GetSingleData($qry)
{
  $this->open();
  try
  {
      $result=mysqli_query($this->db,$qry);
	  if($result)
	  {
	  
	         $row=mysqli_fetch_row($result) ;
			 
			 return $row[0];
			 }
			 else
			 {
			     throw new Exception(mysqli_error($this->db));
			 }
    }
	catch(Exception $e)
	{
	         return $e->getMessage();
	}
	mysql_close($con);
 }


 public function GetSingleRow($qry)
 {
    $this->open();
	try
	{
	    $result=mysqli_query($this->db,$qry);
		if($result)
		{
		   $row = mysqli_fetch_array($result);
		   
		   return $row;
		   }
else
 throw new Exception(mysql_error());
}
catch(Exception $e)
{
return $e->getMessage();
}
mysql_close($con);
}
public function GenerateID($qry,$num)
{
$this->open();
try
{
$result=mysql_query($qry);
if($result)
{
$row=mysql_fetch_row($result);
if(empty($row[0]))
{
$maxid=($num+1);
}
else
{
$maxid=$row[0]+1;
}
return $maxid;
}
else
throw new Exception(mysql_error());
}
catch(Exception $e)
{
return $e->getMessage();
}
mysql_close();
}
function alert($msg,$url=null)
{
echo "<script type='text/javascript'>
alert('".$msg."');
location.href='".$url."';
</script>";
}
}
?>