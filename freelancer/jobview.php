<?php
//session_start();
require_once('header.php'); 
require_once("../connectionclass.php");
$obj=new ConnectionClass();
$jobrid=$_REQUEST['rid'];
$qry="select * from job_post j inner join org_reg r on r.email=j.comp_mail  where j.status='active' and j.job_id='$jobrid'";
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
            
            <th>Free Type</th>
            <th>Country</th>
            <th>level of Experience</th>
            <th>Time required</th>
            <th>Date</th>
            <th>Posted Date</th>
            <th>File</th>
            <th>Action</th>
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
            <td><?php echo $post_date=date("d-m-Y", strtotime($res['post_date']) );?></td>
            <td><a target="_blank" href="../Organization/document/doc/<?php echo $res['pro_file'];?>">View File</a>
                </td>
                <td><?php
                        if($post_date > $da)
                        {
                          ?>
                          <a class="btn btn-info btn-sm" href="bidding.php?rid=<?php echo $res['job_id'];?>&date=<?php echo $res['post_date'];?>">Bidding</a>
                          <?php
                        }
                ?>
                 <a class="btn btn-success btn-sm" href="viewadddoc.php?action=insert&jid=<?php echo $res['job_id'];?>">Documents View</a>
                  <a class="btn btn-info btn-sm" href="viewbidding.php?job_id=<?php echo $res['job_id'];?>&date=<?php echo $res['post_date'];?>">View Bidding</a>

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