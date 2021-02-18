<?php 
require_once('header.php'); 
require_once('../connectionclass.php'); 
$obj=new ConnectionClass();
$status=$_REQUEST['sts'];
$qryl="select * from free_reg inner join login on free_reg.email=login.username and login.status='$status' and login.usertype='Freelancer'";
$result=$obj->GetTable($qryl);
//var_dump($result);
if($status=='active')
{
  $name='APPROVED';
}
elseif($status=='inactive')
{
  $name='NEW';
}
elseif($status=='rejected')
{
  $name='REJECTED';
}
else
{
  echo "";
}
?>

  		
         <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Freelancer Requests</h3>
                        
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3> <?php echo $name;?> FREELANCER REQUEST</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Sl No</th>
                          
                          <th>Name of Freelancer</th>
                          <th>Address</th>
                          <th>Area of Study</th>
                          <th>Degree</th>
                          <th>Other Qualifications</th>
                          <th>Experience</th>
                          <th>Contact</th>   
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php
                      	$i=1;
                      	foreach ($result as $res) 
                      	{                      		
                      	?>
                        <tr>
                         <td><?php echo $i++; ?></td>
                          <td><?php echo $res['name']; ?></td>
                          <td><?php echo $res['address']; ?></td>
                          <td><?php echo $res['area_of_study']; ?></td>
                          <td><?php echo $res['degree'];?></td>
                          <td><?php echo $res['other_quali'];?></td>
                          <td><?php echo $res['work_exp']; ?></td>
                          <td><?php echo $res['phno']; ?><br><?php echo $res['email']; ?></td>
                          <td>
                      <?php
                if($status=="active")
                {
                  ?>
                  <a class="btn btn-success btn-sm">Activated</a>
                  <?php
                }
                 elseif($status=="inactive")
                  {
                    ?>
                    <a href="codes/approve_exe.php?action=update&name=<?php echo $res['username']; ?>" class="btn btn-xs btn-info">Approve</a>
                          <a href="codes/reject_exe.php?action=reject&name=<?php echo $res['username']; ?>" class="btn btn-xs btn-info">Reject</a>
                    <?php
                  }
                    else
                    {
                      ?>
                    <a class="btn btn-warning btn-sm">Rejected Freelancer</a>
                    <?php
                  }
                  ?></td>
                        </tr>
                       <?php
                         }
                         ?>
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->

    
         
          
    
<?php require_once('footer.php'); ?>