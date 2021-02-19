<?php
//session_start();
require_once('header.php'); 
require_once("../connectionclass.php");
$obj=new ConnectionClass();
$jobrid=$_REQUEST['rid'];
$uname=$_SESSION['email'];
$type=$_REQUEST['type'];
$qry="select * from job_post j inner join org_reg r on r.email=j.comp_mail  where r.email='$uname' and j.status='active'  and j.job_id='$jobrid'";
$result=$obj->GetTable($qry);
//var_dump($result);
?>

  		
         <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">List</h3>
                        
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Job List</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">

                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                          <tr>
            <th data-breakpoints="xs">ID</th>
            
            <th>Type</th>
            <th>Country</th>
            <th>level of Experience</th>
            <th>Time required</th>
            <th>Date</th>
            <th>Posted Date</th>
            <th>File</th>
            <th>Payment</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
            <?php
            $i=0;
            foreach ($result as $res) 
            {
                $i++;
            ?>
          <tr data-expanded="true">
            <td><?php echo $i;?></td>
            
            <td><?php echo $res['free_type'];?></td>
            <td><?php echo $res['country1'];?></td>
            <td><?php echo $res['lvl_of_exp'];?></td>
            <td><?php echo $res['time_required'];?></td>
            <td><?php echo $da=date("d-m-Y", strtotime($res['date']) );?></td>
            <td><?php echo $da=date("d-m-Y", strtotime($res['post_date']) );?></td>
            <td><a target="_blank" href="document/doc/<?php echo $res['pro_file'];?>">View File</a>
             
             <form method="post" enctype="multipart/form-data" action="codes/upload_exe.php?action=pdfupdate&id=<?php echo $res['job_id'];?>">
                                    
                                      <input type="file" name="fileToUpload" required="">
                                        <button type="submit" class="btn btn-info btn-sm">Submit</button>
                                
                            </form>
                </td>
            <td><?php echo $res['sal_expected'];?></td>
            <td>
                <a class="btn btn-info btn-sm" href="jobpostedit.php?action=update&rid=<?php echo $res['job_id'];?>">EDIT</a>
                <a class="btn btn-success btn-sm" href="adddocument.php?action=insert&jid=<?php echo $res['job_id'];?>">Add Document</a>
                 <?php
                        if($type=='Freelancer')
                        {
                          ?>
                          <a class="btn btn-info btn-sm" href="viewbidding.php?rid=<?php echo $res['job_id'];?>&date=<?php echo $res['post_date'];?>">View Bidding</a>
                          <?php
                        }
                ?>
            </td>
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